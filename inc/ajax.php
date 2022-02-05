<?php

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
    try{
        $post = get_page_by_path( $post_name, OBJECT, 'post' );
        wp_send_json_success($post);
    }catch(Exception $e){
        wp_send_json_error($e);
    }
    wp_die();
}


add_action('wp_ajax_nopriv_load_post_with_name', 'rs_load_post_with_name');
add_action('wp_ajax_load_post_with_name', 'rs_load_post_with_name');



function rs_load_page_with_name()
{
    $page_name = $_POST['page_name'];
    try{
        $page = get_page_by_title($page_name);
        wp_send_json_success($page);
    }catch(Exception $e){
        wp_send_json_error($e);
    }
    wp_die();
}

add_action('wp_ajax_nopriv_load_page_with_name', 'rs_load_page_with_name');
add_action('wp_ajax_load_page_with_name', 'rs_load_page_with_name');

function rs_load_page_template_with_name()
{
    $page_name = $_POST['page_name'];
    $convives_year = $_POST['convives_year'];

    try{
        $template = get_template_part( 'template-parts/content', strtolower($page_name), ['convives_year' => $convives_year]);
        wp_send_json_success($template);
    }catch(Exception $e){
        wp_send_json_error($e);
    }
    wp_die();
}

add_action('wp_ajax_nopriv_load_page_template_with_name', 'rs_load_page_template_with_name');
add_action('wp_ajax_load_page_template_with_name', 'rs_load_page_template_with_name');