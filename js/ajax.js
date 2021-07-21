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
                cacheKey = originalOptions.data.page_name ? originalOptions.data.page_name : originalOptions.data.post_name;
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
            cacheKey = originalOptions.data.page_name ? originalOptions.data.page_name : originalOptions.data.post_name;

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
            if (foundLocalStorage && ((new Date().getTime() - parseData._) < 3600000)) {
                console.log("[Cache] found in cache", cacheKey);
                success(foundLocalStorage);
                return false;
            }
            return true;
        };
        options.success = function (data, textStatus) {
            console.warn("cache", data)
            var responseData = JSON.stringify(data && data.data ?
                {
                    _: new Date().getTime(),
                    cacheData: data.data
                }
                : null);

            localStorage.setItem(cacheKey, responseData);

            if ($.isFunction(success)) success(responseData); //call back to original ajax call
        };
    }
});

// Show post-single, show loader, fetch post, hide content
function fetchPost(post_name) {
    console.debug("[fetchPost]", post_name)
    $("#page-radio-journal").show();
    $(".post-single").show();
    $("#spin").show();

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
            openPage(null, "page-radio-journal", "Journal")
            var post_html = '<div data-post-id="' + response.data['ID'] + '">' +
                '<h2 class="post-title">' + response.data['post_title'] + '</h2>' +
                response.data['post_content'] + '</div><hr/>';
            $("#page-radio-journal").show();
            $('#page-radio-journal').html(post_html); // Afficher le HTML
            $(".site-main").scrollTop(0);
        } else {
            console.error('[fetchPost] Erreur sur load_post_with_name: ', response);
        }
        $("#spin").hide();
    });
}

// Hide content, show loader, fetch page, hide content, openPage()
function fetchHideShowPage(selector, page_name, is_template) {
    console.debug("[fetchHideShowPage] selector to show:", selector, "page_name:", page_name)
    $("#spin").show();
    $(".tabcontent").hide();
    fetchPage(selector, page_name, is_template)
}

function fetchPage(selector, page_name, is_template) {
    console.debug("[fetchPage] init call. selector: ", selector, " is_template: ", is_template);
    $.ajax({
        url: ajaxUrl,
        type: "POST",
        data: {
            'action': is_template ? 'load_page_template_with_name' : 'load_page_with_name',
            'page_name': page_name
        },
        cache: !is_template,
        success: function (data) {
            console.debug("[fetchPage] selector: ", selector, " is template", is_template);
            if (is_template) {
                openPage(null, selector, page_name)
                $("#" + selector).show().html(data.replace('{"success":true}', ''));
            } else {
                var response = JSON.parse(data) ? JSON.parse(data).cacheData : null;
                console.debug("[fetchPage] selector: ", selector, " is_template: ", is_template, " response: ", response);
                if (response && selector) {
                    openPage(null, selector, page_name)
                    $("#" + selector).show().html(response.post_content ? response.post_content.replace(']]>', ']]&gt;') : null);
                } else if (!response && selector) {
                    openPage(null, "page-ondes", "Ondes")
                    console.error('[fetchPage] Erreur sur load_page_with_name: ', response);
                }
            }

            if(selector !== "page-radio-convives") $("#spin").hide();
        },
        error: function (xhr, textStatus, error) {
            console.error("[fetchPage] Erreur", xhr, textStatus, error);
        }
    }).done();
}




