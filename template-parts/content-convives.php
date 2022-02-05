<?php

/*
Template Name: Convives
*/

/*
object(WP_Post)#8400 (24) {
["ID"]=> int(629)
["post_author"]=> string(1) "1"
["post_date"]=> string(19) "2021-03-14 20:02:09"
["post_date_gmt"]=> string(19) "2021-03-14 19:02:09"
["post_content"]=> string(706) "
SET DE SALON w/ MATSO

REPLAY
"
["post_title"]=> string(0) ""
["post_excerpt"]=> string(0) ""
["post_status"]=> string(7) "publish"
["comment_status"]=> string(4) "open"
["ping_status"]=> string(4) "open"
["post_password"]=> string(0) ""
["post_name"]=> string(5) "matso"
["to_ping"]=> string(0) ""
["pinged"]=> string(0) ""
["post_modified"]=> string(19) "2021-03-14 20:26:57"
["post_modified_gmt"]=> string(19) "2021-03-14 19:26:57"
["post_content_filtered"]=> string(0) ""
["post_parent"]=> int(0)
["guid"]=> string(28) "http://localhost:8888/?p=629"
["menu_order"]=> int(0)
["post_type"]=> string(4) "post"
["post_mime_type"]=> string(0) ""
["comment_count"]=> string(1) "0"
["filter"]=> string(3) "raw" }
*/
?>
<main class="site-convives replay-images">
    <?php
    echo $post->content;

    $categoryArticles = get_category_by_slug("Convives");
    $posts = get_posts(["numberposts" => -1, "category" => $categoryArticles->cat_ID]);
    $years = ['2021', '2020'];

    $year_selected = isset($args['convives_year']) && $args['convives_year'] !== ""
        ? $args['convives_year']
        : $years[0];

    $posts = array_filter($posts, function ($post) use ($year_selected) {
        return strpos($post->post_date, $year_selected) !== false;
    }, ARRAY_FILTER_USE_BOTH);

    echo '<div class="convives_year_filter">';
    foreach ($years as $year) {
        echo '<button class="convives_year" name="' . $year . '">' . $year . '</button>';
    }
    echo '</div>';
    foreach ($posts as $key => $post) {
        $image = get_the_post_thumbnail($post, [238, 238]);
        echo '<div ' . 'data-post-id="' . $post->post_name . '" class="convives-post">';
        echo $image;
        echo $post->post_content;
        echo '</div>';
    }
    ?>
    <?php wp_reset_postdata(); ?>

</main>
