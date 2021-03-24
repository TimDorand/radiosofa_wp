<?php


?>
<div class="wp-block-columns">
    <div class="wp-block-column" style="flex-basis:40%">

        <figure class="wp-block-image size-large img-bordered img-visu-mois"><img
                    src="https://radiosofa.timothee.pro/wp-content/uploads/2021/01/Radio_SofaxMoon_Art_Club-1024x1024.jpg"
                    alt="" class="wp-image-493">
            <figcaption>Le sofa du mois par Moon Art Club Template Parts</figcaption>
        </figure>
    </div>

    <!-- wp:column {"className":"home-agenda"} -->
    <div class="wp-block-column home-agenda">
        <div class="rs-title rs-title-light">
            <div><h2>PLANNING</h2></div>
        </div>
        <?php echo do_shortcode("[vsel]"); ?>
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"></div>

            <!-- wp:column -->
            <div class="wp-block-column"></div>
        </div>
    </div>
</div>


<div class="wp-block-columns">
    <div class="wp-block-column" style="flex-basis:40%">
        <div class="rs-title rs-title-default">
            <div><h2 onclick="openPage(event, 'page-actualites')">AGENDA</h2></div>
        </div>


        <div class="wp-block-group">
            <div class="wp-block-group__inner-container">
                <!-- wp:latest-posts {"categories":[{"id":8,"count":18,"description":"","link":"http://localhost:8888/category/articles/","name":"Articles","slug":"articles","taxonomy":"category","parent":0,"meta":[],"_links":{"self":[{"href":"http://localhost:8888/wp-json/wp/v2/categories/8"}],"collection":[{"href":"http://localhost:8888/wp-json/wp/v2/categories"}],"about":[{"href":"http://localhost:8888/wp-json/wp/v2/taxonomies/category"}],"wp:post_type":[{"href":"http://localhost:8888/wp-json/wp/v2/posts?categories=8"}],"curies":[{"name":"wp","href":"https://api.w.org/{rel}","templated":true}]}}],"postsToShow":3,"displayPostContent":true,"excerptLength":10,"displayPostDate":true,"align":"left","className":"bloc-articles"} /-->
                <ul class="wp-block-latest-posts__list has-dates alignleft bloc-articles wp-block-latest-posts">

                <?php
                $categoryArticles = get_category_by_slug("Articles");
                $recentArticles = get_posts(["numberposts" => 2, "category" => $categoryArticles->cat_ID]);
                foreach ($recentArticles as $post) {
                    $post_date = get_the_date( 'j n' );
                    echo '<li><a href="/#article-' . $post->post_name . '">' . $post->post_title . '</a>
                        <time datetime="' . $post->post_date_gmt . '" class="wp-block-latest-posts__post-date">' . $post_date . '</time>
                        <div class="wp-block-latest-posts__post-excerpt ondes-journal-post">' . $post->post_content . '
                    </div>
                    </li>';
                }
                ?>
                    <!--<li><a href="https://radiosofa.timothee.pro/radio-sofa-invite-mic-mac/">RADIO SOFA INVITE MIC
                            MAC</a>
                        <time datetime="2021-02-27T14:34:00+01:00" class="wp-block-latest-posts__post-date">27 02</time>
                        <div class="wp-block-latest-posts__post-excerpt">En attendant d’arpenter à nouveau les fêtes
                            franciliennes, les trois […]
                        </div>
                    </li>
                    <li><a href="https://radiosofa.timothee.pro/nouvelle-release-italo-de-smib/">NOUVELLE RELEASE ITALO
                            DE SMIB</a>
                        <time datetime="2021-02-23T19:44:44+01:00" class="wp-block-latest-posts__post-date">23 02</time>
                        <div class="wp-block-latest-posts__post-excerpt">Release day pour SMIB ! Les tracks de son
                            second […]
                        </div>
                    </li>
                    <li><a href="https://radiosofa.timothee.pro/radio-sofa-invite-itineraire-bis/">RADIO SOFA INVITE
                            ITINÉRAIRE BIS</a>
                        <time datetime="2021-02-19T19:58:00+01:00" class="wp-block-latest-posts__post-date">19 02</time>
                        <div class="wp-block-latest-posts__post-excerpt">Le collectif Itinéraire Bis prend le contrôle
                            de nos ondes […]
                        </div>
                    </li>-->
                </ul>


                <div style="margin-top:50px" class="rs-title rs-title-very-dark">
                    <div><h2 onclick="openPage(event, 'page-actualites')">A PROPOS</h2></div>
                </div>
            </div>
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"className":"text-justify"} -->
        <p class="text-justify">Radio Sofa vous partage en continu de la musique universelle piochée avec soin par notre
            équipe de diggers de salon.<br><br>Eclectisme garanti avec chaque semaine des sélections thématiques et des
            DJ sets, à écouter assis et debout.Radio Sofa vous partage en continu de la musique universelle piochée avec
            soin par notre équipe de diggers de salon.<br></p>
        <!-- /wp:paragraph --></div>

    <!-- wp:column -->
    <div class="wp-block-column">
        <div class="rs-title rs-title-dark">
            <div><h2 onclick="openPage(event, 'page-convives')">CONVIVES</h2></div>
        </div>

        <!-- wp:latest-posts {"categories":[{"id":9,"count":2,"description":"","link":"http://localhost:8888/category/convives/","name":"Convives","slug":"convives","taxonomy":"category","parent":0,"meta":[],"_links":{"self":[{"href":"http://localhost:8888/wp-json/wp/v2/categories/9"}],"collection":[{"href":"http://localhost:8888/wp-json/wp/v2/categories"}],"about":[{"href":"http://localhost:8888/wp-json/wp/v2/taxonomies/category"}],"wp:post_type":[{"href":"http://localhost:8888/wp-json/wp/v2/posts?categories=9"}],"curies":[{"name":"wp","href":"https://api.w.org/{rel}","templated":true}]}}],"postsToShow":6,"displayPostContent":true,"displayPostContentRadio":"full_post","postLayout":"grid","displayFeaturedImage":true} /-->

        <!-- wp:columns {"className":"replay-images"} -->
        <div class="wp-block-columns replay-images"><!-- wp:column -->
            <?php
            $categoryConvives = get_category_by_slug("Convives");
            $recentConvives = get_posts(["numberposts" => 6, "category" => $categoryConvives->cat_ID]);
            foreach ($recentConvives as $post) {
                echo '<div data-post-id="' . $post->post_name . '"><h2 class="post-title"><a href="/#article-' . $post->post_name . '">' . $post->post_title . '</a></h2>' . $post->post_excerpt . '</div><hr/>';
            }
            ?>
            <div class="wp-block-column">

                <figure class="wp-block-image size-large is-resized img-bordered"><img
                            src="http://localhost:8888/wp-content/uploads/2021/01/tom-coololo-edited.jpeg" alt=""
                            class="wp-image-528" width="243" height="242"></figure>

                <!-- wp:columns {"className":"replay-info"} -->
                <div class="wp-block-columns replay-info"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:paragraph -->
                        <p>SET DE SALON w/ JEAN VALJUAN</p>
                        <!-- /wp:paragraph --></div>

                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <div class="btn-replay">REPLAY</div>


                        <iframe width="100%" height="20" scrolling="no" frameborder="no" allow="autoplay"
                                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/941589784&amp;color=%23303030&amp;inverse=false&amp;auto_play=false&amp;show_user=false"></iframe>
                    </div>
                </div>
            </div>

            <!-- wp:column -->
            <div class="wp-block-column">

                <figure class="wp-block-image size-large img-bordered"><img
                            src="http://localhost:8888/wp-content/uploads/2021/01/Baume-1-1024x1024.jpg" alt=""
                            class="wp-image-526">
                    <figcaption><span class="has-inline-color has-black-color">SET DE SALON w/ PIERRE</span>
                    </figcaption>
                </figure>


                <div class="btn-replay">REPLAY</div>


                <iframe width="100%" height="60"
                        src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&amp;mini=1&amp;light=1&amp;feed=%2FPierreRadioSofa%2Fset-de-salon-w-pierre%2F"
                        frameborder="0"></iframe>
            </div>

            <!-- wp:column -->
            <div class="wp-block-column">

                <figure class="wp-block-image size-large img-bordered"><img
                            src="http://localhost:8888/wp-content/uploads/2021/01/jose-manuel-1024x1024.jpg" alt=""
                            class="wp-image-527"></figure>


                <div class="btn-replay">REPLAY</div>

                <!-- wp:paragraph -->
                <p></p>
                <!-- /wp:paragraph --></div>
        </div>

        <!-- wp:columns {"className":"replay-images"} -->
        <div class="wp-block-columns replay-images"><!-- wp:column -->
            <div class="wp-block-column">

                <figure class="wp-block-image size-large img-bordered"><img
                            src="http://localhost:8888/wp-content/uploads/2021/01/tom-coololo-edited.jpeg" alt=""
                            class="wp-image-528">
                    <figcaption><span class="has-inline-color has-black-color">SET DE SALON w/ JEAN VALJUAN</span>
                    </figcaption>
                </figure>


                <div class="btn-replay">REPLAY</div>


                <iframe width="100%" height="20" scrolling="no" frameborder="no" allow="autoplay"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/941589784&amp;color=%23303030&amp;inverse=false&amp;auto_play=false&amp;show_user=false"></iframe>
            </div>

            <!-- wp:column -->
            <div class="wp-block-column">

                <figure class="wp-block-image size-large img-bordered"><img
                            src="http://localhost:8888/wp-content/uploads/2021/01/Baume-1-1024x1024.jpg" alt=""
                            class="wp-image-526">
                    <figcaption><span class="has-inline-color has-black-color">SET DE SALON w/ PIERRE</span>
                    </figcaption>
                </figure>


                <div class="btn-replay">REPLAY</div>


                <iframe width="100%" height="60"
                        src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&amp;mini=1&amp;light=1&amp;feed=%2FPierreRadioSofa%2Fset-de-salon-w-pierre%2F"
                        frameborder="0"></iframe>
            </div>

            <!-- wp:column -->
            <div class="wp-block-column">

                <figure class="wp-block-image size-large img-bordered"><img
                            src="http://localhost:8888/wp-content/uploads/2021/01/jose-manuel-1024x1024.jpg" alt=""
                            class="wp-image-527"></figure>


                <div class="btn-replay">REPLAY</div>
            </div>
        </div>

        <!-- wp:paragraph -->
        <p></p>
        <!-- /wp:paragraph --></div>
</div>
