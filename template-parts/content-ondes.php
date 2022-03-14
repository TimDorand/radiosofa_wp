<?php

?>

<h1 class="ondes-title">
    <span>R</span>
    <span>A</span>
    <span>D</span>
    <span>I</span>
    <span>O</span>
    <span> </span>
    <span> </span>
    <span> </span>
    <span> </span>
    <span> </span>
    <span> </span>
    <span> </span>
    <span>S</span>
    <span>O</span>
    <span>F</span>
    <span style="margin-left: -15px;">A</span>
</h1>
<div class="rs-block-columns">
    <div class="rs-block-column ondes-first-column">
        <figure class="rs-block-image size-large img-bordered img-visu-mois"><img
                    width="524"
                    height="524"
                    loading="lazy"
                    src=""
                    alt="Visuel du mois" id="visuel_mois">
            <figcaption class="description_visuel_mois">Le sofa du mois par Moon Art Club Template Parts</figcaption>
        </figure>
        <div class="rs-home-journal desktop-only">
            <div class="rs-title rs-title-default">
                <div><h2 class="clickable" onclick="fetchHideShowPage('page-radio-journal', 'Journal', true)">
                        JOURNAL</h2>
                </div>
            </div>


            <div class="rs-block-group rs-title-journal">
                <div class="rs-block-group__inner-container">
                    <!-- wp:latest-posts {"categories":[{"id":8,"count":18,"description":"","link":"http://localhost:8888/category/articles/","name":"Articles","slug":"articles","taxonomy":"category","parent":0,"meta":[],"_links":{"self":[{"href":"http://localhost:8888/wp-json/wp/v2/categories/8"}],"collection":[{"href":"http://localhost:8888/wp-json/wp/v2/categories"}],"about":[{"href":"http://localhost:8888/wp-json/wp/v2/taxonomies/category"}],"wp:post_type":[{"href":"http://localhost:8888/wp-json/wp/v2/posts?categories=8"}],"curies":[{"name":"wp","href":"https://api.w.org/{rel}","templated":true}]}}],"postsToShow":3,"displayPostContent":true,"excerptLength":10,"displayPostDate":true,"align":"left","className":"bloc-articles"} /-->
                    <ul class="rs-block-latest-posts__list has-dates alignleft bloc-articles rs-block-latest-posts">

                        <?php
                        $categoryArticles = get_category_by_slug("Articles");
                        $recentArticles = get_posts(["numberposts" => 4, "category" => $categoryArticles->cat_ID]);
                        foreach ($recentArticles as $post) {
                            $post_date = get_the_date('j') . "/" . get_the_date('n');
                            echo '<li><a class="ondes-journal-post-link" data-post-id="' . $post->post_name . '" href="/#article-' . $post->post_name . '">' . $post->post_title . '</a>
                        <time datetime="' . $post->post_date_gmt . '" class="rs-block-latest-posts__post-date">' . $post_date . '</time>
                        <div class="rs-block-latest-posts__post-excerpt ondes-journal-post">' . $post->post_content . '
                    </div>
                    </li>';
                        }
                        ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="rs-block-column home-agenda ondes-second-column">
        <div class="rs-title rs-title-light ondes-more-planning clickable" style="margin-top:45px">
            <div><h2>AGENDA</h2></div>
        </div>
        <?php echo do_shortcode("[vsel]"); ?>

        <div class="text-centered ondes-more-planning clickable">▽</div>
        <div class="rs-block-columns">
            <div class="rs-block-column"></div>


            <div class="rs-block-column"></div>
        </div>


        <div class="rs-home-convives">
            <div class="rs-title rs-title-dark" onclick="fetchHideShowPage('page-radio-convives', 'Convives', true)">
                <div><h2 class="clickable">
                        CONVIVES</h2></div>
            </div>

            <span class="mobile-container">
                <div class="rs-block-columns replay-images">
                    <?php
                    $categoryConvives = get_category_by_slug("Convives");
                    $recentConvives = get_posts(["numberposts" => 4, "category" => $categoryConvives->cat_ID]);
                    /*           foreach ($recentConvives as $post) {
                                   echo '<div data-post-id="' . $post->post_name . '"><h2 class="post-title"><a href="/#article-' . $post->post_name . '">' . $post->post_title . '</a></h2>' . $post->post_excerpt . '</div><hr/>';
                               }*/
                    foreach ($recentConvives as $post) {
                        $image = get_the_post_thumbnail($post, [238, 238]);
                        echo '<div data-post-id="' . $post->post_name . '" class="ondes-convives-post" >';
                        echo $image;
                        echo $post->post_content;
                        echo '</div>';
                    }
                    ?>
                </div>
            </span>
        </div>

    </div>
    <div class="rs-home-journal mobile-only">
        <div class="rs-title rs-title-default rs-title-margin-top"
             onclick="fetchHideShowPage('page-radio-journal', 'Journal', true)">
            <div><h2 class="clickable">
                    JOURNAL</h2>
            </div>
        </div>

        <!-- MOBILE ONLY-->
        <div class="rs-block-group rs-title-journal">
            <div class="rs-block-group__inner-container">
                <!-- wp:latest-posts {"categories":[{"id":8,"count":18,"description":"","link":"http://localhost:8888/category/articles/","name":"Articles","slug":"articles","taxonomy":"category","parent":0,"meta":[],"_links":{"self":[{"href":"http://localhost:8888/wp-json/wp/v2/categories/8"}],"collection":[{"href":"http://localhost:8888/wp-json/wp/v2/categories"}],"about":[{"href":"http://localhost:8888/wp-json/wp/v2/taxonomies/category"}],"wp:post_type":[{"href":"http://localhost:8888/wp-json/wp/v2/posts?categories=8"}],"curies":[{"name":"wp","href":"https://api.w.org/{rel}","templated":true}]}}],"postsToShow":3,"displayPostContent":true,"excerptLength":10,"displayPostDate":true,"align":"left","className":"bloc-articles"} /-->
                <ul class="rs-block-latest-posts__list has-dates alignleft bloc-articles rs-block-latest-posts">

                    <?php
                    $categoryArticles = get_category_by_slug("Articles");
                    $recentArticles = get_posts(["numberposts" => 2, "category" => $categoryArticles->cat_ID]);
                    foreach ($recentArticles as $post) {
                        $post_date = get_the_date('j') . "/" . get_the_date('n');
                        echo '<li><a class="ondes-journal-post-link" data-post-id="' . $post->post_name . '" href="/#article-' . $post->post_name . '">' . $post->post_title . '</a>
                        <time datetime="' . $post->post_date_gmt . '" class="rs-block-latest-posts__post-date">' . $post_date . '</time>
                        <div class="rs-block-latest-posts__post-excerpt ondes-journal-post">' . $post->post_content . '
                    </div>
                    </li>';
                    }
                    ?>
                </ul>

            </div>
        </div>
    </div>


</div>


<div class="ondes-footer">
    <div><h3 onclick="openPage({evt:event, selector:'page-actualites'})">à propos</h3></div>

    <!-- wp:paragraph {"className":"text-justify"} -->
    <p class="text-justify">Radio Sofa vous partage en continu de la musique universelle piochée avec soin par notre
        équipe de diggers de salon.<br><br>Eclectisme garanti avec chaque semaine des sélections thématiques et des
        DJ sets, à écouter assis et debout.<br></p>
    <!-- /wp:paragraph -->
</div>

<div class="mobile-only text-centered mobile-rs-icons">
    <a href="https://www.facebook.com/webradio.sofa" target="_blank"><i class="fab fa-facebook">Facebook</i></a>
    <a href="https://www.instagram.com/radio.sofa/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://soundcloud.com/radio-sofa" target="_blank"><i class="fab fa-soundcloud"></i></a>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>


</div>
