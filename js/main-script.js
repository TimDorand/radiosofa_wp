// On click functions
(function ($) {

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

    if (!$(location).attr('hash').split('#').pop()) {
        $("#page-ondes").hide();
    }

    $(document).ready(function () {
        // hide player spinner
        $(".lds-dual-ring").hide();

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
            fetchHideShowPage($(this).attr("pageSelector"), selectorToPageName($(this).attr("pageSelector")), false);
        });
        $(".pageTemplateSelector").click(function (e) {
            fetchHideShowPage($(this).attr("pageSelector"), selectorRadioToPageName($(this).attr("pageSelector")), true);
        });

        // Mobile Menu toggle
        /*$("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
        });*/

        $(".menu__box li").click(function () {
            console.warn("menu box li")
            $(".menu__box").css("visibility", "visible");
            $(".menu__box").css("left", "0")
        });

        // ARTICLES
        // Home articles
        $(".bloc-articles a").click(function (e) {
            var url = new URL($(this).attr('href'));
            openPage(null, "page-journal", "Journal");
            fetchPost(url.pathname.replace(/\//g, ""));
            window.location = '#article-' + url.pathname.replace(/\//g, "");
            e.preventDefault();
        });

        handleJournal()

        // Block alerts
        alert = function () {
        };
        window.alert = function () {
        };

        $("#link-all-articles").click(function () {
            $(".post-single").hide();
        })

        if (!localStorage.getItem("debug")) {
            // Load all pages in background
            setTimeout(function () {
                var pagesToLoad = ["Sofas", "Convives", "Residence", "Emissions"]
                for (const pageName of pagesToLoad) {
                    setTimeout(function () {
                        /*fetchPage(null, pageName)*/
                    }, 1000)
                }
            }, 10000)
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


        console.log("[Main Script] Document ready");
    });
    // End document ready

})(jQuery);