// AUDIO
const sidebarPlayerDiv = $("#sidebar-player");

function playRS() {
    const song = $("#sidebar-player-audio").get(0);
    const src = "https://www.radioking.com/play/radio-sofa";
    if (song.paused) {
        song.src = src;
        song.load();
        song.play();
        sidebarPlayerDiv.hide();
        $(".lds-dual-ring").show();
        sidebarPlayerDiv.removeClass("play");
        $("iframe").hide();
        if (currentReplayDiv) {
            currentReplayDiv.attr("src", "about:blank");
            currentReplayDiv.hide();
            $(".replay-container").hide();
            $(".tabcontent").css({"padding-bottom": "2rem"});
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
    sidebarPlayerDiv.addClass("play");
    sidebarPlayerDiv.removeClass("pause");
}
const showLoader = () => {
    document.body.style.cursor = "wait";
    $("#spin").show();
}
const hideLoader = () => {
    document.body.style.cursor = 'default';
    $("#spin").hide();
}

//UTILS
function myOnLoadedData() {
    $(".lds-dual-ring").hide();
    sidebarPlayerDiv.show();
    sidebarPlayerDiv.addClass("pause");
}

// Find and replace text: planning
var ladate = new Date();
var tab_jour = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];

function findMyText(needle, replacementText) {
    const vselDiv = $("#vsel")
    const myOldString = vselDiv.html();
    const myNewString = myOldString && myOldString.replace(needle, replacementText);
    vselDiv.html(myNewString);
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
function fetchHideShowPage(selector, pageName, is_template) {
    console.debug("[fetchHideShowPage] selector to show:", selector, "pageName:", pageName);
    showLoader();
    $(".tabcontent").hide();
    var isTabRendered = $("#" + selector + " div").length !== 0;

    if (isTabRendered && selector !== "page-radio-journal") {
        openPage({ selector, pageName})
    } else {
        console.debug("[fetchHideShow] fetchPage")
        fetchPage({selector, pageName, is_template})
    }
}

let previousConvivesYear
// Rooter page: handle active menu, hide all page, show content
const openPage = (params) => {
    const {evt, selector, pageName, response, loadAll} = params;
    console.debug(`[openPage] pageName : ${pageName}, selector: ${selector}, response: ${response}`);

    const selectorDiv = $("#" + selector);
    if (selector && response) {
        console.debug("[openPage] page rendering started...", response.post_content.length,loadAll );

        if (pageName === "Convives" && response.post_content.length > 50000 && !loadAll) {
            let firstConvives = response.post_content.slice(0, 50000);
            response.post_content = firstConvives.slice(0, firstConvives.lastIndexOf('<div data-post-id='))
                + '<div class="convives-load-more-container"></div><button class="convivesLoadMore" id="load_more_convives">Charger plus de replay</button></main> '
        }
        selectorDiv.show().html(cleanReponseText(response.post_content))
        console.debug("[openPage] page rendered");
    } else {
        // page already fetched
        selectorDiv.show();
    }
    hideLoader();

    if(!loadAll){
        $('main').scrollTop(0);
    }

    handleMenu(evt, selector);

    if (pageName === "Residence") {
        handleResidence();
        handleReplayIframe();
        hideResidenceDetails();
    } else if (pageName === "Sofas") {
        handleSofas();
    } else if (pageName === "Convives") {
        handleReplayIframe()
    } else if (pageName === "Journal") {
        handleJournalClick();
    }
    if (pageName === "Ondes") {
        handleReplayIframe();
        handleJournalClick();
        handleOndes()
        setTimeout(function () {
            /*findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
            findMyText(tab_jour[ladate.getDay() + 1], "Demain");*/
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

// ONDES
function handleOndes() {
    $("#visuel_mois").attr('src', url_visuel_mois);
    $(".description_visuel_mois").html(description_visuel_mois);
    if(description_complete_visuel_mois.length > 0){
        $(".fullcap").html("<p>"+description_complete_visuel_mois+"</p>");
    } else {
        $(".fullcap").hide();
    }

    const ondesMorePlanningDiv = $(".ondes-more-planning");
    const vselDiv = $("#vsel");

    setTimeout(function(){
        ondesMorePlanningDiv.off("click");
        ondesMorePlanningDiv.click(function () {
            if (vselDiv.hasClass("max-height-100")) {
                vselDiv.removeClass("max-height-100");
                ondesMorePlanningDiv.removeClass("rotate-180");
            } else {
                vselDiv.addClass("max-height-100");
                ondesMorePlanningDiv.addClass("rotate-180");
            }
        });
    }, 10)

}

// RESIDENCES
function handleResidence() {
    setTimeout(function () {
        $("#back-residence").click(function () {
            hideResidenceDetails();
        });

        $("#page-radio-residence .resident-item").click(function (e) {
            showResidenceDetails(e);
        });
    }, 0)
}

function showResidenceDetails(e) {
    console.info("showResidenceDetails", e.currentTarget);
    var resident = e.currentTarget.attr('data-resident-id');
    $("#page-radio-residence .replay-images").hide();
    $("#residence-" + resident.replaceAll('/','').split(' ').join('_')).show();
    $("#back-residence").parent("div").show();
    handleReplayIframe();
    setTimeout(function () {
        $('main').scrollTop(0);

    }, 100)
    setTimeout(function () {
        $('main').scrollTop(0);

    }, 0)
}

function hideResidenceDetails() {
    $(".residence-details").hide();
    $("#page-radio-residence .replay-images").show();
    $("#back-residence").parent("div").hide();
}

// JOURNAL
function handleJournalClick() {
    setTimeout(function () {
        // Ondes articles
        $(".ondes-journal-post-link").click(function () {
            window.location = '#article-' + $(this).attr('href').replace(/\//g, "");
            fetchPost($(this).attr('data-post-id'));
            $("html, body").scrollTop(0);
        })
        $('.post-title').click(function () {
            var post_id = $(this).parent().attr('data-post-id');
            fetchPost(post_id);
            $("html, body").scrollTop(0);
        });
    }, 100)

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
    if ($(".convivesYear").length > 0) {
        $(".convivesYear").click(function (e) {
            showLoader();
            e.preventDefault();
            console.debug("[handleClickFilter] fetchPage")
            fetchPage({
                selector:"page-radio-convives",
                pageName:"Convives",
                is_template: true,
                convivesYear: e.target.name})
        })    } else {
    }

    $("#load_more_convives").click(function (e) {
        showLoader();
        e.preventDefault();
        console.debug("[handleLoadMoreConvives] fetchPage")
        fetchPage({
            selector: "page-radio-convives",
            pageName: "Convives",
            is_template: true,
            convivesYear: $(".convivesYear_actif").attr('name'),
            loadAll: true
        });
    })


    // Replay Souncdloud and mixcloud player
    $(".replay-present").click(function () {
        var smallSpinner = $("#small-spin");
        smallSpinner.show()

        var iframe = $(this).next('div').children().last().children("iframe");

        // Stop and hide last replay
        if (currentReplayDiv) {
            currentReplayDiv.attr("src", "about:blank");
            currentReplayDiv.hide();
        }

        // Stop Player
        stopRS();
        // load and display new replay
        $("#btn_clone").click(function(){
            $("#a_clone").clone().appendTo("#b_clone");
        });


        $('.replay-container').empty()
        iframe.clone().appendTo(".replay-container")
        var clonedIframe = $('.replay-container').find('iframe')
        clonedIframe.attr("src", clonedIframe.attr("data-src").replaceAll("auto_play=false", "auto_play=true"));
        clonedIframe.show();
        clonedIframe.addClass("replay-clonedIframe");
        $(".replay-container").show();

        // set new replay to current
        currentReplayDiv = clonedIframe;

        setTimeout(function () {
            clonedIframe.contents().find(".widget-controls-top").css({"background": "#fff", "border": "none"});
            clonedIframe.contents().find(".widget-controls-top").css({"background": "#fff", "border": "none"});
            clonedIframe.contents().find(".singleSound").css({"background": "#fff", "border": "none"});
            clonedIframe.contents().find(".soundContainer").css({"background": "#fff", "border": "none"});
            clonedIframe.contents().find(".compactSound .g-background-default").css({
                "background": "#fff",
                "border": "none"
            });
            smallSpinner.hide();
        }, 2000)
    })
}
