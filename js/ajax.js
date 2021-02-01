

function displayPost(post_name) {

    $("#menu-journal").removeClass("currenttab").addClass('currenttab');
    $(".post-single").show();
    $("#spin").show();

    $.ajax({
        url: ajaxurl,
        type: "POST",
        data: {
            'action': 'load_post_with_name',
            'post_name': post_name
        }
    }).done(function (response) {
        var post_html = '<div data-post-id="' + response.data['ID'] + '">' +
            '<h2 class="post-title">' + response.data['post_title'] + '</h2>' +
            response.data['post_content'] + '</div><hr/>';
        $('#post-single-content').show().html(post_html); // Afficher le HTML
        $(".site-main").scrollTop(0);
        $("#spin").hide();
    });
}