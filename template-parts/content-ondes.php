<?php

?>
<div class="rs-block-columns">
    <div class="rs-block-column ondes-first-column">
        <figure class="rs-block-image size-large img-bordered img-visu-mois" ><img
                    width="524"
                    height="524"
                    loading="lazy"
                    src="/wp-content/uploads/2021/06/shaworks-sofa.png"
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
                        $recentArticles = get_posts(["numberposts" => 2, "category" => $categoryArticles->cat_ID]);
                        foreach ($recentArticles as $post) {
                            $post_date = get_the_date('j n');
                            echo '<li><a class="ondes-journal-post-link" data-post-id="' . $post->post_name . '" href="/#article-' . $post->post_name . '">' . $post->post_title . '</a>
                        <time datetime="' . $post->post_date_gmt . '" class="rs-block-latest-posts__post-date">' . $post_date . '</time>
                        <div class="rs-block-latest-posts__post-excerpt ondes-journal-post">' . $post->post_content . '
                    </div>
                    </li>';
                        }
                        ?>
                        <!--<li><a href="https://radiosofa.timothee.pro/radio-sofa-invite-mic-mac/">RADIO SOFA INVITE MIC
                                MAC</a>
                            <time datetime="2021-02-27T14:34:00+01:00" class="rs-block-latest-posts__post-date">27 02</time>
                            <div class="rs-block-latest-posts__post-excerpt">En attendant d’arpenter à nouveau les fêtes
                                franciliennes, les trois […]
                            </div>
                        </li>
                        <li><a href="https://radiosofa.timothee.pro/nouvelle-release-italo-de-smib/">NOUVELLE RELEASE ITALO
                                DE SMIB</a>
                            <time datetime="2021-02-23T19:44:44+01:00" class="rs-block-latest-posts__post-date">23 02</time>
                            <div class="rs-block-latest-posts__post-excerpt">Release day pour SMIB ! Les tracks de son
                                second […]
                            </div>
                        </li>
                        <li><a href="https://radiosofa.timothee.pro/radio-sofa-invite-itineraire-bis/">RADIO SOFA INVITE
                                ITINÉRAIRE BIS</a>
                            <time datetime="2021-02-19T19:58:00+01:00" class="rs-block-latest-posts__post-date">19 02</time>
                            <div class="rs-block-latest-posts__post-excerpt">Le collectif Itinéraire Bis prend le contrôle
                                de nos ondes […]
                            </div>
                        </li>-->
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <!-- wp:column {"className":"home-agenda"} -->
    <div class="rs-block-column home-agenda ondes-second-column">
        <div class="rs-title rs-title-light">
            <div><h2>AGENDA</h2></div>
        </div>
        <?php echo do_shortcode("[vsel]"); ?>

        <!--<div class="text-centered" id="ondes-more-planning">▽</div>-->
        <div class="rs-block-columns"><!-- wp:column -->
            <div class="rs-block-column"></div>

            <!-- wp:column -->
            <div class="rs-block-column"></div>
        </div>


        <div class="rs-home-convives">
            <div class="rs-title rs-title-dark">
                <div><h2 class="clickable" onclick="fetchHideShowPage('page-radio-convives', 'Convives', true)">
                        CONVIVES</h2></div>
            </div>

            <span class="mobile-container">
        <!-- wp:latest-posts {"categories":[{"id":9,"count":2,"description":"","link":"http://localhost:8888/category/convives/","name":"Convives","slug":"convives","taxonomy":"category","parent":0,"meta":[],"_links":{"self":[{"href":"http://localhost:8888/wp-json/wp/v2/categories/9"}],"collection":[{"href":"http://localhost:8888/wp-json/wp/v2/categories"}],"about":[{"href":"http://localhost:8888/wp-json/wp/v2/taxonomies/category"}],"wp:post_type":[{"href":"http://localhost:8888/wp-json/wp/v2/posts?categories=9"}],"curies":[{"name":"wp","href":"https://api.w.org/{rel}","templated":true}]}}],"postsToShow":6,"displayPostContent":true,"displayPostContentRadio":"full_post","postLayout":"grid","displayFeaturedImage":true} /-->

                <!-- wp:columns {"className":"replay-images"} -->
            <div class="rs-block-columns replay-images"><!-- wp:column -->
                <?php
                $categoryConvives = get_category_by_slug("Convives");
                $recentConvives = get_posts(["numberposts" => 4, "category" => $categoryConvives->cat_ID]);
                /*           foreach ($recentConvives as $post) {
                               echo '<div data-post-id="' . $post->post_name . '"><h2 class="post-title"><a href="/#article-' . $post->post_name . '">' . $post->post_title . '</a></h2>' . $post->post_excerpt . '</div><hr/>';
                           }*/
                foreach ($recentConvives as $post) {
                    $image = get_the_post_thumbnail($post, ["300", "300"]);
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
                    $recentArticles = get_posts(["numberposts" => 2, "category" => $categoryArticles->cat_ID]);
                    foreach ($recentArticles as $post) {
                        $post_date = get_the_date('j n');
                        echo '<li><a class="ondes-journal-post-link" data-post-id="' . $post->post_name . '" href="/#article-' . $post->post_name . '">' . $post->post_title . '</a>
                        <time datetime="' . $post->post_date_gmt . '" class="rs-block-latest-posts__post-date">' . $post_date . '</time>
                        <div class="rs-block-latest-posts__post-excerpt ondes-journal-post">' . $post->post_content . '
                    </div>
                    </li>';
                    }
                    ?>
                    <!--<li><a href="https://radiosofa.timothee.pro/radio-sofa-invite-mic-mac/">RADIO SOFA INVITE MIC
                            MAC</a>
                        <time datetime="2021-02-27T14:34:00+01:00" class="rs-block-latest-posts__post-date">27 02</time>
                        <div class="rs-block-latest-posts__post-excerpt">En attendant d’arpenter à nouveau les fêtes
                            franciliennes, les trois […]
                        </div>
                    </li>
                    <li><a href="https://radiosofa.timothee.pro/nouvelle-release-italo-de-smib/">NOUVELLE RELEASE ITALO
                            DE SMIB</a>
                        <time datetime="2021-02-23T19:44:44+01:00" class="rs-block-latest-posts__post-date">23 02</time>
                        <div class="rs-block-latest-posts__post-excerpt">Release day pour SMIB ! Les tracks de son
                            second […]
                        </div>
                    </li>
                    <li><a href="https://radiosofa.timothee.pro/radio-sofa-invite-itineraire-bis/">RADIO SOFA INVITE
                            ITINÉRAIRE BIS</a>
                        <time datetime="2021-02-19T19:58:00+01:00" class="rs-block-latest-posts__post-date">19 02</time>
                        <div class="rs-block-latest-posts__post-excerpt">Le collectif Itinéraire Bis prend le contrôle
                            de nos ondes […]
                        </div>
                    </li>-->
                </ul>

            </div>
        </div>
    </div>


</div>


<div class="ondes-footer">
    <div><h3 onclick="openPage(event, 'page-actualites')">à propos</h3></div>

<!-- wp:paragraph {"className":"text-justify"} -->
<p class="text-justify">Radio Sofa vous partage en continu de la musique universelle piochée avec soin par notre
    équipe de diggers de salon.<br><br>Eclectisme garanti avec chaque semaine des sélections thématiques et des
    DJ sets, à écouter assis et debout.Radio Sofa vous partage en continu de la musique universelle piochée avec
    soin par notre équipe de diggers de salon.<br></p>
<!-- /wp:paragraph -->
</div>

<div class="mobile-only text-centered">
    <div class="rs-home-footer"><a target="_blank" href="https://facebook.com/webradio.sofa">
            <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/logo_facebook.png" width="20"
                 alt="Facebook logo">
        </a>
        <a target="_blank" href="https://www.instagram.com/radio.sofa/">
            <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/logo_insta.png" width="20"
                 alt="Instagram logo">
        </a>
        <a target="_blank" href="https://open.spotify.com/user/jackhadagroove/">
            <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/logo_spotify.png" width="20"
                 alt="Spotify logo">
        </a>
    </div>
</div>

<!-- wp:column -->

<br/>
<br/>
</div>
