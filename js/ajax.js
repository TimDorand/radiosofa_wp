(function ($) {
    $(document).ready(function () {
        $('.post-title').click(function () {

            var post_id = $(this).parent().attr('data-post-id');
            displayPost(post_id)
        });
    });
})(jQuery);

function displayPost(post_name) {

    $(".post-single").show();
    $("#spin").show();

    $("html, body").scrollTop(0);
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
        $('#post-single-content').html(post_html); // Afficher le HTML
        $("#spin").hide();

    });
}