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
    /*    if (options.cache) {
            var complete = originalOptions.complete || $.noop,
                cacheKey = originalOptions.data.pageName ? originalOptions.data.pageName : originalOptions.data.post_name;
            //remove jQuery cache as we have our own localCache
            options.cache = false;
            options.beforeSend = function () {
                if (localCache.exist(cacheKey)) {
                    complete(localCache.get(cacheKey));
                    return false;
                }
                return true;
            };
            options.complete = function (data, textStatus) {
                localCache.set(cacheKey, data, complete);
            };
        }*/
    if (options.cache) {
        var success = originalOptions.success || $.noop,
            cacheKey = originalOptions.data.pageName
                ? originalOptions.data.pageName+originalOptions.data.convivesYear
                : originalOptions.data.post_name;

        options.cache = false; //remove jQuery cache as we have our own localStorage
        options.beforeSend = function () {
            var foundLocalStorage = localStorage.getItem(cacheKey);
            if (localStorage.getItem("debug")) return true;

            //0.5 h = 1800000 ms
            var parseData = foundLocalStorage;
            try {
                parseData = JSON.parse(foundLocalStorage);
            } catch (e) {
                console.warn('[Cache] couldnot parse data', e)
            }
            console.warn('CACHE ',  new Date().getTime(), parseData._,  new Date().getTime() - parseData._ ,1200000)
            if (foundLocalStorage && parseData && ((new Date().getTime() - parseData._) < 1200000)) {
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
                    cacheData: data.data ? data.data :
                        {
                            ID: 25,
                            comment_count: "0",
                            comment_status: "closed",
                            filter: "raw",
                            guid: "https://timothee.pro/radiosofa/?page_id=25",
                            menu_order: 0,
                            ping_status: "closed",
                            pinged: "",
                            post_author: "1",
                            post_content: data,
                            post_content_filtered: "",
                            post_date: "2020-11-10 15:59:34",
                            post_date_gmt: "2020-11-10 14:59:34",
                            post_excerpt: "",
                            post_mime_type: "",
                            post_modified: "2021-03-24 17:10:10",
                            post_modified_gmt: "2021-03-24 16:10:10",
                            post_name: "ok",
                            post_parent: 0,
                            post_password: "",
                            post_status: "publish",
                            post_title: "Sofas",
                            post_type: "page",
                            to_ping: ""
                        }
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
            'convivesYear': convivesYear ? convivesYear: ""
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
                openPage({selector: "page-ondes",pageName: "Ondes"})
                console.error('[fetchPage] Erreur sur load_page_with_name: ', response);
            }
        },
        error: function (xhr, textStatus, error) {
            console.error("[fetchPage] Erreur", xhr, textStatus, error);
        }
    }).done();
}




