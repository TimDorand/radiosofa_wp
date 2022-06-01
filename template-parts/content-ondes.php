<?php

?>

<h1 class="ondes-title">
    <span>R</span>
    <span>A</span>
    <span>D</span>
    <span>I</span>
    <span>O</span>
    <span> </span>
    <span>S</span>
    <span>O</span>
    <span>F</span>
    <span style="margin-left: -15px;">A</span>
</h1>
<div class="rs-block-columns">
    <div class="rs-block-column ondes-first-column">
        <figure class="rs-block-image size-large img-bordered img-visu-mois">
            <div class="rs-image-wrapper">
                <!--<video id="sofa_mois_video" src="https://www.radio-sofa.com/wp-content/uploads/2022/06/video_sofa_juin_2022_resize500px.mp4" autoplay loop muted playsinline ></video>
                <script>window.addEventListener('load', function(){
                var newVideo = document.getElementById('sofa_mois_video');
                newVideo.addEventListener('ended', function() {
                this.currentTime = 0;
                this.play();
                }, false);

                newVideo.play();

                });
                </script>-->
                <!--<img
                        width="524"
                        height="524"
                        loading="lazy"
                        src=""
                        alt="Visuel du mois" id="visuel_mois">-->
                <div class="fullcap"></div>
            </div>
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

        <div class="text-centered ondes-more-planning clickable desktop-only">
            <?php if(strlen(do_shortcode("[vsel]")) > 700){ echo '▽'; } ?>
        </div>
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
                    <div class="bigger-replay-images">
                <div class="rs-block-columns replay-images">
                    <?php
                    $categoryConvives = get_category_by_slug("Convives");
                    $recentConvives = get_posts(["numberposts" => 4, "category" => $categoryConvives->cat_ID]);
                    /*           foreach ($recentConvives as $post) {
                                   echo '<div data-post-id="' . $post->post_name . '"><h2 class="post-title"><a href="/#article-' . $post->post_name . '">' . $post->post_title . '</a></h2>' . $post->post_excerpt . '</div><hr/>';
                               }*/
                    foreach ($recentConvives as $post) {
                        $image = get_the_post_thumbnail($post, [238, 238]);
                        echo '<div data-post-id="' . $post->post_name . '" class="ondes-convives-post convives-post" >';
                        echo $image;
                        if (strpos($post->post_content, 'btn-replay') !== false) {
                            echo '<span class="play-hover replay-present">&#9654;</span>';
                        } else {
                            echo '<span class="play-hover no-replay">&#10710;</span>';
                        }
                        echo $post->post_content;
                        echo '</div>';
                    }
                    ?>
                    </div>
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
    <p class="text-justify">
    <p>Radio Sofa vous partage en continu de la musique universelle piochée avec soin par notre équipe de diggers de
        salon.</p>
    <p style="margin-bottom:19px">Radio Sofa est une webradio assemblée au printemps 2020 dans un Paris atone.
        Nous partageons en flux tendu nos trouvailles éclectiques, et convions chaque
        semaine artistes et résidents locaux ou étrangers sur nos ondes pour des sets
        et sélections. Notre bande-son se module entre atmosphères lounge et lentes,
        grooves des quatre coins du monde et beats club acides et synthétiques.</p>
    __
    <p class="text-italic">
        Radio Sofa shares with you a continuous stream of universal music carefully selected by our team of living room
        diggers.
    </p>
    <p class="text-italic">
        Radio Sofa is a webradio assembled in the spring of 2020 in a dull Paris. We share our eclectic finds and invite
        local and foreign artists and residents on our airwaves every week for sets and selections. Our soundtrack is
        modulated between lounge and slow atmospheres, grooves from all over the world and acid and synthetic club
        beats.
    </p>
    </p>
    <h1 class="ondes-title ondes-title-stroke">
        <span>R</span>
        <span>A</span>
        <span>D</span>
        <span>I</span>
        <span>O</span>
        <span> </span>
        <span>S</span>
        <span>O</span>
        <span>F</span>
        <span style="margin-left: -15px;">A</span>
    </h1>
</div>

<div class="mobile-only text-centered mobile-rs-icons">
    <a href="https://www.facebook.com/webradio.sofa" target="_blank"><i class="fab fa-facebook"></i></a>
    <a href="https://www.instagram.com/radio.sofa/" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="https://soundcloud.com/radio-sofa" target="_blank"><i class="fab fa-soundcloud"></i></a>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>


</div>
