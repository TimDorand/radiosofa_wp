// PLAYER
$(function() {
    $("audio + a").click(function (e) {
        e.preventDefault();
        var song = $(this).prev('audio').get(0);
        var src = "https://www.radioking.com/play/radio-sofa";


        if (song.paused) {
            stopAllAudio()
            song.src = src;
            song.load();
            song.play();
//         $(this).text("❙ ❙");
            $(this).addClass("pause");
            $(this).removeClass("play");
            $("iframe").hide();
            $(".page-body").css("height", "100%")

        } else {
            stopAllAudio()
            song.pause();
            song.currentTime = 0;
            song.src = '';

//         $(this).text("▶");
            $(this).addClass("play");
            $(this).removeClass("pause");
        }
    });
});

(function ($) {
    $(document).ready(function () {

        // Hide spinner on load
        $("#spin").hide();

        // Rooter: Open page from anchor
        var anchor = $(location).attr('hash').split('#').pop();

        // Article
        if (anchor.includes("article-")) {
            $("#menu-journal").addClass("currenttab");
            openPage(null, "page-journal");
            displayPost(anchor.substr( anchor.lastIndexOf('article-') + 8 ))
        }
        // Page
        else if (anchor && document.getElementById("page-" + anchor)) {
            openPage(null, "page-" + anchor)
        }

        // Mobile Menu toggle
        $("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
        });

        // Planning text replacement
        findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
        findMyText(tab_jour[ladate.getDay() + 1], "Demain");

        // Home articles
        $(".bloc-articles a").click(function(e){
            var url = new URL($(this).attr('href'));
            openPage(null, "page-journal");
            displayPost(url.pathname.replace(/\//g, ""));
            window.location = '#article-'+url.pathname.replace(/\//g, "");
            e.preventDefault();
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
    });

})(jQuery);