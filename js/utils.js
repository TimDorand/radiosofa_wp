// AUDIO
function playRS() {
    var song = $("#sidebar-player-audio").get(0);
    var src = "https://www.radioking.com/play/radio-sofa";
    if (song.paused) {
        song.src = src;
        song.load();
        song.play();
//         $(this).text("❙ ❙");
        $("#sidebar-player").hide();
        $(".lds-dual-ring").show();
        $("#sidebar-player").removeClass("play");
        $("iframe").hide();
        $(".page-body").css("height", "100%")
        if (currentReplayDiv) {
            currentReplayDiv.attr("src", "about:blank");
            currentReplayDiv.hide();
        }
    } else {
        stopRS(song);
    }
}

function stopRS() {
    var song = $("#sidebar-player-audio").get(0);
    song.pause();
    song.currentTime = 0;
    song.src = '';
    $("#sidebar-player").addClass("play");
    $("#sidebar-player").removeClass("pause");
}

//UTILS
function myOnLoadedData() {
    $(".lds-dual-ring").hide();
    $("#sidebar-player").show();
    $("#sidebar-player").addClass("pause");
}

// Find and replace text: planning
var ladate = new Date();
var tab_jour = new Array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");

function findMyText(needle, replacementText) {
    var myOldString = $("#vsel").html();
    var myNewString = myOldString && myOldString.replaceAll(needle, replacementText);
    $("#vsel").html(myNewString);
}

function replaceEveryting(str, find, replace) {
    if (str && typeof str !== "string" || typeof str === "undefined" || typeof find === "undefined" || typeof replace === "undefined") {
        return;
    }
    return str.replace(new RegExp(find, 'g'), replace);
}

function cleanReponseText(text) {
    return text && text.replace(']]>', ']]&gt;')
        .replace('{"success":true}', '')
}


// CONTENT MANAGEMENT
// Hide content, show loader, fetch page, hide content, openPage()
function fetchHideShowPage(selector, page_name, is_template) {
    console.debug("[fetchHideShowPage] selector to show:", selector, "page_name:", page_name);
    $("#spin").show();
    $(".tabcontent").hide();
    var isTabRendered = $("#" + selector + " div").length === 0;

    if (!isTabRendered && selector !== "page-residence") {
        openPage(null, selector, page_name)
    } else {
        fetchPage(selector, page_name, is_template)
    }
}

// Rooter page: handle active menu, hide all page, show content
function openPage(evt, selector, pageName, response) {
    console.debug("[openPage] evt:", evt, "selector:", selector, "pageName:", pageName);

    var selectorDiv = $("#" + selector);
    if (selector && response) {
        console.debug("[openPage] page rendering started...");
        selectorDiv.show().html(cleanReponseText(response.post_content))
        console.debug("[openPage] page rendered");
    }
    $("#spin").hide();

    /*if (pageName !== "Convives" && pageName !== "Residence") $("#spin").hide();*/
    selectorDiv.show();

    handleMenu(evt, selector);

    if (pageName === "Residence") {
        handleResidence();
        handleReplayIframe();
        hideResidenceDetails();
    } else if (pageName === "Sofas") {
        handleSofas();
    } else if (pageName === "Convives" || pageName === "Ondes") {
        handleReplayIframe()
    } else if (pageName === "Journal" || pageName === "Ondes") {
        handleJournalClick();
    } else if (pageName === "Ondes"){
        setTimeout(function () {
            findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
            findMyText(tab_jour[ladate.getDay() + 1], "Demain");
        }, 1000);
    }
}

//MENU
function selectorToPageName(selector) {
    return selector.substr(selector.lastIndexOf('page-') + 5).replace(/^\w/, (c) => c.toUpperCase());
}

function selectorRadioToPageName(selector) {
    return selector.substr(selector.lastIndexOf('radio-') + 6).replace(/^\w/, (c) => c.toUpperCase());
}

function handleMenu(evt, selector) {
    var i, tablinks;
    $('#post-single-content').hide();
    $("#masthead").find("li").removeClass("currenttab");
    if (evt && evt.currentTarget) {
        evt.currentTarget.className += " currenttab";
        $(this).children("a").css("border", "1px solid black");
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
    }
    if (selector) {
        $("[pageSelector=" + selector + "]").addClass("currenttab");
    }
}

// RESIDENCE
function handleResidence() {
    setTimeout(function () {
        $("#back-residence").click(function () {
            hideResidenceDetails();
        });

        $("#page-radio-residence .rs-block-image").click(function () {
            var resident = $(this).context.parentElement.childNodes[1].innerText;
            $(".replay-images").hide();
            $("#residence-" + resident).show();
            $("#back-residence").parent("div").show();
            handleReplayIframe();
            setTimeout(function(){
                $("html, body").scrollTop(0);
            }, 100)
        });
    }, 0)
}

function hideResidenceDetails() {
    $(".residence-details").hide();
    $(".replay-images").show();
    $("#back-residence").parent("div").hide();
}

// JOURNAL
function handleJournalClick() {
    setTimeout(function () {
        // Journal articles
        $(".ondes-journal-post-link").click(function () {
            var post_id = $(this).attr('data-post-id');
            fetchPost(post_id);
            $("html, body").scrollTop(0);
        })
        $('.post-title').click(function () {
            var post_id = $(this).parent().attr('data-post-id');
            fetchPost(post_id);
            $("html, body").scrollTop(0);

        });
    }, 100)

    setTimeout(function () {
        $("#visuel_mois").attr('src', url_visuel_mois);
        $(".description_visuel_mois").html(description_visuel_mois);

        $("#ondes-more-planning").click(function (e) {
            e.preventDefault();
            if ($(".vsel-container").hasClass("max-height-100")) {
                $(".vsel-container").removeClass("max-height-100");
            } else {
                $(".vsel-container").addClass("max-height-100");
            }
        });

    }, 0)

}

// SOFAS
function handleSofas() {
    setTimeout(function () {
        $(".sofas-posts .wp-block-column").click(function () {
            $(".sofas-post").hide();
            $(this).children(".sofas-post").toggle();
        });
    }, 0)
}

// REPLAYS
var currentReplayDiv;

function handleReplayIframe() {
    /*$("#spin").hide();
*/
    // Replay Souncdloud and mixcloud player
    $(".btn-replay").click(function () {
        var smallSpinner = $("#small-spin");
        smallSpinner.show();

        var iframe = $(this).next();

        // Stop and hide last replay
        if (currentReplayDiv) {
            currentReplayDiv.attr("src", "about:blank");
            currentReplayDiv.hide();
        }
        // set new replay to current
        currentReplayDiv = iframe;

        // Stop Player
        stopRS();

        // load and display new replay
        iframe.attr("src", iframe.attr("data-src"));
        iframe.show();
        iframe.addClass("replay-iframe");
        /*$(".page-body").css("height", "calc(100vh - 135px)")*/
        setTimeout(function () {
            iframe.contents().find(".widget-controls-top").css({"background": "#fff", "border": "none"});
            iframe.contents().find(".singleSound").css({"background": "#fff", "border": "none"});
            iframe.contents().find(".soundContainer").css({"background": "#fff", "border": "none"});
            iframe.contents().find(".compactSound .g-background-default").css({
                "background": "#fff",
                "border": "none"
            });
            smallSpinner.hide();
        }, 2000)
    })
}
