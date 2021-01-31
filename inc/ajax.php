<?php
add_action('wp_ajax_load_post', 'rs_load_post');
add_action('wp_ajax_load_post_with_name', 'rs_load_post_with_name');

function rs_load_post()
{
    $post_id = $_POST['post_id'];
    $post = get_post($post_id);
    wp_send_json_success($post);
    wp_die();
}


function rs_load_post_with_name()
{
    $post_name = $_POST['post_name'];
    $post = get_page_by_path( $post_name, OBJECT, 'post' );
    wp_send_json_success($post);
    wp_die();
}

