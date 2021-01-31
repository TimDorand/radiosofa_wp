// Find and replace text: planning
var ladate = new Date();
var tab_jour = new Array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
console.log("Nous sommes un " + tab_jour[ladate.getDay()]);

function findMyText(needle, replacementText) {
    var myOldString = $("#vsel").html();
    var myNewString = myOldString.replaceAll(needle, replacementText);
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
    var allIframes = $("iframe");
    for(let count = 0; count < allIframes.length; count++) {
        // Stop iframe audio
        var srcIframe = $(allIframes[count]).attr('src');
        $(allIframes[count]).attr('src', "");
        $(allIframes[count]).attr('src', srcIframe);
    }

}

// Rooter page
function openPage(evt, pageName) {
    var i, tabcontent, tablinks;
    $("#primary-menu").find("li").removeClass("currenttab");
    if(evt && evt.currentTarget){
        evt.currentTarget.className += " currenttab";
        $(this).children("a").css("border", "1px solid black");
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
    }
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    if(pageName.includes("page-")){
        document.getElementById(pageName).style.display = "block";
    }
}