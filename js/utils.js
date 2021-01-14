function stopAllAudio() {
    // Stop all audio
    $('audio').each(function(){
        this.pause();
        this.currentTime = 0;
    });
    var allIframes = $("iframe");
    console.log(allIframes)
    console.log(allIframes.length)
    for(let count = 0; count < allIframes.length; count++) {
        console.warn("iframe", allIframes[count]);

        // Stop iframe audio
        var srcIframe = $(allIframes[count]).attr('src');
        $(allIframes[count]).attr('src', "");
        $(allIframes[count]).attr('src', srcIframe);
    }

}