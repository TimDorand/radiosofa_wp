// Find and replace text: planning
var ladate = new Date();
var tab_jour = new Array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
console.log("Nous sommes un " + tab_jour[ladate.getDay()]);

function findMyText(needle, replacementText) {
    var myOldString = $("#vsel").html();
    var myNewString = myOldString && myOldString.replaceAll(needle, replacementText);
    $("#vsel").html(myNewString);
}

var haystackText = "";

function findMyText2(needle, replacement) {
    if (haystackText.length == 0) {
        haystackText = document.getElementById("primary").innerHTML;
    }
    var match = new RegExp(needle, "ig");
    var replaced = "";
    if (replacement.length > 0) {
        replaced = haystackText.replace(match, replacement);
    } else {
        var boldText = "            " + needle + "            ";
        replaced = haystackText.replace(match, boldText);
    }
    console.warn(match)
    document.getElementById("vsel").innerHTML = replaced;
}


function stopAllAudio() {
    // Stop all audio
    $('audio').each(function(){
        this.pause();
        this.currentTime = 0;
    });
    var allRelpayIframes = $(".replay-images iframe")
    allRelpayIframes.hide();
    console.debug('[stopAllAudio]',     allRelpayIframes);
    for(let count = 0; count < allRelpayIframes.length; count++) {
        // Stop iframe audio
        var srcIframe = $(allRelpayIframes[count]).attr('src');
        $(allRelpayIframes[count]).attr('src', "");
        $(allRelpayIframes[count]).attr('src', srcIframe);
    }

}

// Rooter page: handle active menu, hide all page, show content
function openPage(evt, selector, pageName) {
    console.debug("[openPage] evt:", evt, "selector:", selector, "pageName:", pageName);

    // Menu handling
    var i, tablinks;
    $('#post-single-content').hide();
    $("#primary-menu").find("li").removeClass("currenttab");
    if(evt && evt.currentTarget){
        evt.currentTarget.className += " currenttab";
        $(this).children("a").css("border", "1px solid black");
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
    }
    if(selector){
        $("[pageSelector="+selector+"]").addClass("currenttab");
    }

    // Hide all pages
    $(".tabcontent").hide();
    $("#"+selector).show();

    setTimeout(function(){
        findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
        findMyText(tab_jour[ladate.getDay() + 1], "Demain");
        handleReplayIframe();

    }, 1000)

    $("#spin").hide();

    if(pageName === "Residence"){
        console.debug("[handlerRe] evt:", evt, "selector:", selector, "pageName:", pageName);
        handleResidence();
    }else if(pageName === "Sofas"){
        handleSofas();
    }else if(pageName === "Journal" || pageName ==="Ondes"){
        handleJournal();

        setTimeout(function(){
            $("#visuel_mois").attr('src', url_visuel_mois);
            $(".description_visuel_mois").html(description_visuel_mois);

            $("#ondes-more-planning").click(function(e) {
                e.preventDefault();
                if($(".vsel-container").hasClass("max-height-100")){
                    $(".vsel-container").removeClass("max-height-100");
                } else {
                    $(".vsel-container").addClass("max-height-100");
                }
            });

        },0)
    }
}

function selectorToPageName(selector){
    return selector.substr( selector.lastIndexOf('page-') + 5 ).replace(/^\w/, (c) => c.toUpperCase());
}

function selectorRadioToPageName(selector){
    return selector.substr( selector.lastIndexOf('radio-') + 6 ).replace(/^\w/, (c) => c.toUpperCase());
}

function handleResidence(){
    setTimeout(function(){
        $("#page-residence .wp-block-image").click(function(){
            var resident = $(this).children("figcaption").text();
            console.warn("[Résidence]", resident);
            fetchHideShowPage("page-residence", "RESIDENCE "+resident);
        });
    },0)
}
function handleJournal(){
    setTimeout(function(){
        // Journal articles
    $(".ondes-journal-post-link").click(function(){
        var post_id = $(this).attr('data-post-id');
        fetchPost(post_id);
        $("html, body").scrollTop(0);
    })
    $('.post-title').click(function () {
        console.debug('test');
        var post_id = $(this).parent().attr('data-post-id');
        fetchPost(post_id);
        $("html, body").scrollTop(0);

    });
    },100)

}

function handleSofas(){
    setTimeout(function(){
        $(".sofas-posts .wp-block-column").click(function(){
            $(".sofas-post").hide();
            $(this).children(".sofas-post").toggle();
        });
    },0)
}


function handleReplayIframe(){
//hide all replay iframes
var allRelpayIframes = $(".replay-images iframe")
allRelpayIframes.hide();
    for (i = 0; i < allRelpayIframes.length; i++) {
        const iframe = allRelpayIframes[i];
console.log("handleReplayIframe", $(iframe).attr("src"));
/*
        const iframeUrl = iframe.attr("src");
*/
        $(iframe).attr("data-src", $(iframe).attr("src"));
        $(iframe).attr("src", "about:blank");
    }
// Replay Souncdloud and mixcloud player
$(".btn-replay").click(function () {
    stopAllAudio();

    // set "play" to player
    $(".site-player a").addClass("play");
    $(".site-player a").removeClass("pause");

    /*$(this).parent().find("iframe").show();*/
    $(this).next().show();
    var iframe = $(this).next(); // or some other selector to get the iframe
    iframe.attr("src", iframe.attr("data-src"));

    iframe.addClass("replay-iframe");
    /*$(".page-body").css("height", "calc(100vh - 135px)")*/
    setTimeout(function(){
        iframe.contents().find(".widget-controls-top").css({"background": "#fff", "border": "none"});
        iframe.contents().find(".singleSound").css({"background": "#fff", "border": "none"});
        iframe.contents().find(".soundContainer").css({"background": "#fff", "border": "none"});
        iframe.contents().find(".compactSound .g-background-default").css({"background": "#fff", "border": "none"});
    }, 2000)

    })
}