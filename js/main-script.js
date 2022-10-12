// On click functions

(function ($) {
    // Disable console log in production
    var DEBUG = false;
    if (!DEBUG) {
        if (!window.console) window.console = {};
        var methods = ["log", "debug", "warn", "info"];
        for (var i = 0; i < methods.length; i++) {
            console[methods[i]] = function () {
            };
        }
    }

    // Player
    $(".lds-dual-ring").click(function (e) {
        playRS();
    })
    setInterval(function () {
        var playerDiv = $("div[class^='src-components-current-track__title--']");
        if (playerDiv[0] && playerDiv[0].childNodes[0].length > 25) {
            //TODO: defilement du player

        }
    }, 1000)
    $("#sidebar-player").click(function (e) {
        e.preventDefault();
        playRS();
    });

    document.body.onkeydown = function (e) {
        if (e.key === " " ||
            e.code === "Space" ||
            e.keyCode === 32
        ) {
            e.preventDefault();
            playRS();
        }
    }

    if (!$(location).attr('hash').split('#').pop()) {
        $("#page-ondes").hide();
    }

    $(document).ready(function () {
        // hide player spinner
        $(".lds-dual-ring").hide();
        $("#sidebar-player").show();

        // Navigation: Open page from anchor
        var anchor = $(location).attr('hash').split('#').pop();

        // Url to Article
        if (anchor.includes("article-")) {

            fetchPost(anchor.substr(anchor.lastIndexOf('article-') + 8))

        } else if (anchor.includes("radio-")) {
            fetchHideShowPage("page-" + anchor, selectorRadioToPageName("page-" + anchor), true)
        }
        // Url to Page
        else if (anchor.includes("page-") && anchor) {
            fetchHideShowPage(anchor, selectorToPageName(anchor), false)
        } else {
            fetchHideShowPage("page-radio-ondes", selectorToPageName("page-ondes"), true)
        }

        // Menu to Page
        $(".pageSelector").click(function (e) {
            if ($(this).attr("mobileMenu")) {
                $("#menu__toggle").click()
            }
            fetchHideShowPage($(this).attr("pageSelector"), selectorToPageName($(this).attr("pageSelector")), false);
        });
        $(".pageTemplateSelector").click(function (e) {
            if ($(this).attr("mobileMenu")) {
                $("#menu__toggle").click()
            }
            fetchHideShowPage($(this).attr("pageSelector"), selectorRadioToPageName($(this).attr("pageSelector")), true);
        });

        $("#menu__close").click(function (e) {
            $("#menu__toggle").click()
        })

        // Mobile Menu toggle
        /*$("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
        });*/

        /*        // ARTICLES
                // Home articles
                $(".bloc-articles a").click(function (e) {
                    var url = new URL($(this).attr('href'));
                    openPage(null, "page-journal", "Journal");
                    fetchPost(url.pathname.replace(/\//g, ""));
                    window.location = '#article-' + url.pathname.replace(/\//g, "");
                    e.preventDefault();
                });*/

        handleReplayIframe();

        // Block alerts
        alert = function () {
        };
        window.alert = function () {
        };

        $("#link-all-articles").click(function () {
            $(".post-single").hide();
        })

        if (!localStorage.getItem("debug")) {
            // Load all pages in background after 30 min and every hour
            setTimeout(function () {
                var pagesToLoad = ["Ondes", "Convives", "Residence"]
                for (const pageName of pagesToLoad) {
                    setTimeout(function () {
                        console.debug("[loadPageBackground] fetchPage")
                        setInterval(function () {
                            fetchPage(null, pageName, true, null)
                        }, 3600000)
                    }, 1000)
                }
            }, 1800000)
        }

        var siteMainDiv = $(".site-main");
        siteMainDiv.on('scroll', function () {
            /*if(siteMainDiv.scrollTop() === 0){
                $(".site-branding").fadeIn();
            }*/
            var largeurEcran = $(window).width();
            if (siteMainDiv.scrollTop() > 0 && largeurEcran < 700) {
                $(".site-branding").fadeOut(1000);
            }
        });

        // PREVIOUS NAV
        window.addEventListener('popstate', (event) => {
            console.log("location: " + document.location + ", state: " + JSON.stringify(event.state), ", history: ", event);
            if (event.state) {
                window.location.reload();
            }
        });

        console.log("[Main Script] Document ready");
    });
    // End document ready

})(jQuery);