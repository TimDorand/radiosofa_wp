<?php

/*
Template Name: Journal
*/
?>
<main id="primary" class="site-journal">

<div class="post-single">
    <button class="btn" id="link-all-articles">Tous les articles</button>
    <div id="post-single-content"></div>
</div>

<div id="tous-les-articles"></div>
<?php

/*
 * [0]=> object(WP_Post)#5188 (24) {
 * ["ID"]=> int(578)
 * ["post_author"]=> string(1) "1"
 * ["post_date"]=> string(19) "2021-01-13 14:54:00"
 * ["post_date_gmt"]=> string(19) "2021-01-13 13:54:00"
 * ["post_content"]=> string(899) "
Mise en bouche de l’EP GMD 002 composé par Doublure de Gourmandisque et Pinche RICO d'Apero Electronique.

La suite sur www.radio-sofa.com

https://www.youtube.com/watch?v=XYbzw_t0TB4&ab_channel=SinchiCollective&fbclid=IwAR0qlMTINXDr-x5eSN5ywOMJGyJpZKZT1U_be8DdoV3Z2Xt4-hFkvdKfF58
"
["post_title"]=> string(32) "NOUVEL EP DU LABEL GOURMANDISQUE"
["post_excerpt"]=> string(0) ""
["post_status"]=> string(7) "publish"
["comment_status"]=> string(4) "open"
["ping_status"]=> string(4) "open"
["post_password"]=> string(0) ""
["post_name"]=> string(32) "nouvel-ep-du-label-gourmandisque"
["to_ping"]=> string(0) ""
["pinged"]=> string(0) ""
["post_modified"]=> string(19) "2021-01-13 14:54:00"
["post_modified_gmt"]=> string(19) "2021-01-13 13:54:00"
["post_content_filtered"]=> string(0) ""
["post_parent"]=> int(0)
["guid"]=> string(37) "https://radiosofa.timothee.pro/?p=578"
["menu_order"]=> int(0)
["post_type"]=> string(4) "post"
["post_mime_type"]=> string(0) ""
["comment_count"]=> string(1) "0"
["filter"]=> string(3) "raw" } [
*/


$categoryArticles = get_category_by_slug("Articles");
$posts = get_posts(["numberposts" => -1, "category" => $categoryArticles->cat_ID]);
foreach ($posts as $post) {
    echo '<div class="rs-journal-post" data-post-id="' . $post->post_name . '">
            <h2 class="post-title"><a href="/#article-'.$post->post_name.'">'. $post->post_title . '</a></h2>
                ' . $post->post_content . '
            </div><hr/>';
}

?>

<?php wp_reset_postdata(); ?>
</main>
