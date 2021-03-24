// On click functions
(function ($) {
    // Player
    $("audio + a").click(function (e) {
        e.preventDefault();
        var song = $(this).prev('audio').get(0);
        var src = "https://www.radioking.com/play/radio-sofa";

        if (song.paused) {
            stopAllAudio();
            song.src = src;
            song.load();
            song.play();
//         $(this).text("❙ ❙");
            $(this).addClass("pause");
            $(this).removeClass("play");
            $("iframe").hide();
            $(".page-body").css("height", "100%")

        } else {
            stopAllAudio();
            song.pause();
            song.currentTime = 0;
            song.src = '';

//         $(this).text("▶");
            $(this).addClass("play");
            $(this).removeClass("pause");
        }
    });

    if (!$(location).attr('hash').split('#').pop()) {
        $("#page-ondes").hide();
    }

    $(document).ready(function () {
        // Navigation: Open page from anchor
        var anchor = $(location).attr('hash').split('#').pop();

        // Url to Article
        if (anchor.includes("article-")) {
            console.debug('end article');

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

        console.debug('end navigation');

        // Mobile Menu toggle
        $("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
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
                        fetchPage(null, pageName)
                    }, 1000)
                }
            }, 10000)
        }

        console.log("[Main Script] Document ready");
    });
    // End document ready


})(jQuery);