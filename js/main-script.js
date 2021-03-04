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

    if(!$(location).attr('hash').split('#').pop()){
        $("#page-ondes").hide();
    }

    $(document).ready(function () {
        // Navigation: Open page from anchor
        var anchor = $(location).attr('hash').split('#').pop();

        // Url to Article
        if (anchor.includes("article-")) {
            fetchPost(anchor.substr( anchor.lastIndexOf('article-') + 8 ))
        }
        // Url to Page
        else if (anchor && document.getElementById("page-" + anchor)) {
            if(anchor === "journal"){
                openPage(null, "page-journal", "Journal");
            }else{
                fetchHideShowPage("page-" + anchor, selectorToPageName("page-" + anchor))
            }
        } else{
            // Hide spinner on load
            $("#spin").hide();

            $("#page-ondes").show();
        }

        // Menu to Page
        $(".pageSelector").click(function(e) {
            fetchHideShowPage($(this).attr("pageSelector"), selectorToPageName($(this).attr("pageSelector")));
        });

        // Mobile Menu toggle
        $("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
        });

        // Planning text replacement
        findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
        findMyText(tab_jour[ladate.getDay() + 1], "Demain");

        // ARTICLES
        // Home articles
        $(".bloc-articles a").click(function(e){
            var url = new URL($(this).attr('href'));
            openPage(null, "page-journal", "Journal");
            fetchPost(url.pathname.replace(/\//g, ""));
            window.location = '#article-'+url.pathname.replace(/\//g, "");
            e.preventDefault();
        });

        // Journal articles
        $('.post-title').click(function () {
            var post_id = $(this).parent().attr('data-post-id');
            fetchPost(post_id);
            $("html, body").scrollTop(0);

        });

        // Block alerts
        alert = function () {
        };
        window.alert = function () {
        };

        // Replay Souncdloud and mixcloud player
        $("iframe").hide();
        $(".btn-replay").click(function () {
            stopAllAudio();

            // Hide all iframes
            $("iframe").hide();

            // set "play" to player
            $(".site-player a").addClass("play");
            $(".site-player a").removeClass("pause");

            /*$(this).parent().find("iframe").show();*/
            $(this).next().show();
            $(".page-body").css("height", "calc(100vh - 135px)")
            $(".widget-controls-top").css({"background": "#fff", "border": "none"});
            $(".singleSound").css({"background": "#fff", "border": "none"});
            $(".soundContainer").css({"background": "#fff", "border": "none"});
            $(".compactSound .g-background-default").css({"background": "#fff", "border": "none"});

        })

        $("#link-all-articles").click(function(){
            $(".post-single").hide();
        })


        // Load all pages in background
        setTimeout(function () {
            var pagesToLoad = ["Sofas", "Convives", "Residence", "Emissions"]
            for ( const pageName of pagesToLoad ) {
                setTimeout(function(){
                    fetchPage(null, pageName)
                },1000)
            }
        },10000)

        console.log("[Main Script] Document ready");

    });
    // End document ready


})(jQuery);