var localCache = {
    /**
     * timeout for cache in millis
     * @type {number}
     */
    timeout: 30000,
    /**
     * @type {{_: number, data: {}}}
     **/
    data: {},
    remove: function (key) {
        delete localCache.data[key];
    },
    exist: function (key) {
        return !!localCache.data[key] && ((new Date().getTime() - localCache.data[key]._) < localCache.timeout);
    },
    get: function (key) {
        console.log('Getting in cache for key: ' + key);
        return localCache.data[key].data;
    },
    set: function (key, cachedData, callback) {
        localCache.remove(key);
        localCache.data[key] = {
            _: new Date().getTime(),
            data: cachedData
        };
        if ($.isFunction(callback)) callback(cachedData);
    }
};

$.ajaxPrefilter(function (options, originalOptions, jqXHR) {
    if (options.cache) {
        var success = originalOptions.success || $.noop,
            cacheKey = originalOptions.data.pageName
                ? originalOptions.data.pageName + originalOptions.data.convivesYear
                : originalOptions.data.post_name;

        options.cache = false; //remove jQuery cache as we have our own localStorage
        options.beforeSend = function () {
            var foundLocalStorage = localStorage.getItem(cacheKey);
            if (localStorage.getItem("debug")) return true;

            //0.5 h = 1 800 000 ms
            // 1m = 60s = 60 000 ms
            var parseData = foundLocalStorage;
            try {
                parseData = JSON.parse(foundLocalStorage);
            } catch (e) {
                console.warn('[Cache] couldnot parse data', e)
            }
            if (foundLocalStorage && parseData && ((new Date().getTime() - parseData._) < 0)) {
                console.debug("[Cache] found in cache", cacheKey);
                success(foundLocalStorage);
                return false;
            }
            return true;
        };
        options.success = function (data, textStatus) {
            if (typeof data === undefined) return;

            if (typeof data.data == "undefined") {
                data = replaceEveryting(data, 'iframe width="100%" height="60" src=', 'iframe width="100%" height="60" allow="autoplay" src="about:blank" data-src=')
                data = replaceEveryting(data, 'allow="autoplay" src=', 'allow="autoplay" src="about:blank" data-src=')
                data = replaceEveryting(data, '<!-- /wp:column -->', '')
                data = replaceEveryting(data, '<!-- wp:column -->', '')
                data = replaceEveryting(data, '<!-- wp:html /-->', '')
                data = replaceEveryting(data, '<!-- /wp:columns -->', '')
                data = replaceEveryting(data, '<!-- wp:paragraph -->', '')
                data = replaceEveryting(data, '<!-- /wp:paragraph -->', '')
                data = replaceEveryting(data, '<!-- wp:columns {"className":"replay-info"} -->', '')
            }

            var responseData = JSON.stringify(
                {
                    _: new Date().getTime(),
                    cacheData: data.data ? data.data : {post_content: data,}
                });

            localStorage.setItem(cacheKey, responseData);

            if ($.isFunction(success)) success(responseData); //call back to original ajax call
        };
    }
});

// Show post-single, show loader, fetch post, hide content
function fetchPost(post_name) {
    console.debug("[fetchPost]", post_name)
    $(".post-single").show();
    showLoader();
    $(".tabcontent").hide();

    $.ajax({
        url: ajaxUrl,
        type: "POST",
        data: {
            'action': 'load_post_with_name',
            'post_name': post_name
        },
        /*cache: true*/
    }).done(function (response) {
        if (response && response.data) {
            openPage({selector: "page-radio-journal", pageName: "Journal"})
            var post_html = '<div class="rs-journal-single" data-post-id="' + response.data['ID'] + '">' +
                '<h2 class="post-title">' + response.data['post_title'] + '</h2>' +
                response.data['post_content'] + '</div><hr/>';
            $("#page-radio-journal").show();
            $('#page-radio-journal').html(post_html); // Afficher le HTML
            $(".site-main").scrollTop(0);
        } else {
            console.error('[fetchPost] Erreur sur load_post_with_name: ', response);
        }
        hideLoader();
    });
}

const fetchPage = (params) => {
    const {
        selector,
        pageName,
        is_template,
        convivesYear,
        loadAll
    } = params;
    console.debug(`[fetchPage] ${JSON.stringify(params)}`);
    $.ajax({
        url: ajaxUrl,
        type: "POST",
        data: {
            'action': is_template ? 'load_page_template_with_name' : 'load_page_with_name',
            'pageName': pageName,
            'convivesYear': convivesYear ? convivesYear : ""
        },
        cache: true,
        success: function (data) {
            var response = JSON.parse(data) ? JSON.parse(data).cacheData : null;
            if (response && selector) {
                openPage({
                    selector,
                    pageName,
                    response,
                    convivesYear,
                    loadAll
                })
            } else if (!response && selector) {
                openPage({selector: "page-ondes", pageName: "Ondes"})
                console.error('[fetchPage] Erreur sur load_page_with_name: ', response);
            }
        },
        error: function (xhr, textStatus, error) {
            console.error("[fetchPage] Erreur", xhr, textStatus, error);
        }
    }).done();
}




