<?php

?>

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
                </script>
                <style>
                    /*DUPLICATE OF CONTENT.CSS*/
                    #sofa_mois_video{
                        width:100%;
                        border: 2px solid black;
                    }
                </style>-->
                <img
                        width="524"
                        height="524"
                        loading="lazy"
                        src=""
                        alt="Visuel du mois" id="visuel_mois">
                <div class="fullcap"></div>
            </div>
            <figcaption class="description_visuel_mois">Le sofa du mois</figcaption>
        </figure>
    </div>

    <div class="rs-block-column home-agenda ondes-second-column">
        <div class="rs-title rs-title-light ondes-more-planning clickable">
            <div><h2>AGENDA</h2></div>
        </div>
      <?php echo do_shortcode("[vsel]"); ?>
    </div>
</div>
<div class="rs-block-columns">
    <div class="rs-block-column rs-home-convives">
        <div class="messagedefilant messagedefilant-reverse">
            <h3>
              <?php
              $text_defilant = "↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOUVEAUX REPLAYS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOUVEAUX REPLAYS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOUVEAUX REPLAYS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOUVEAUX REPLAYS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOUVEAUX REPLAYS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOUVEAUX REPLAYS&nbsp;&nbsp;&nbsp;&nbsp;"
              ?>
            </h3>
            <div data-text="<?php echo $text_defilant; ?>"><span><?php echo $text_defilant; ?></span></div>
        </div>
        <div class="rs-title rs-title-dark" onclick="fetchHideShowPage('page-radio-convives', 'Convives', true)">
            <div><h2 class="clickable">
                    CONVIVES</h2></div>
        </div>

        <span class="mobile-container">
                    <div class="bigger-replay-images">
                <div class="rs-block-columns replay-images">
                    <?php
                    $categoryConvives = get_category_by_slug("Convives");
                    $recentConvives = get_posts(["numberposts" => 8, "category" => $categoryConvives->cat_ID]);
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
<div class="rs-block-columns">
    <div class="rs-block-column rs-home-journal desktop-only">
        <div class="messagedefilant messagedefilant-reverse">
            <h3>
              <?php
              $text_defilant = "↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOS ACTUS&nbsp;&nbsp;&nbsp;&nbsp;"
              ?>
            </h3>
            <div data-text="<?php echo $text_defilant; ?>"><span><?php echo $text_defilant; ?></span></div>
        </div>
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
                  $recentArticles = get_posts(["numberposts" => 3, "category" => $categoryArticles->cat_ID]);
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



<div class="rs-block-columns">
    <div class="rs-block-column rs-home-apropos">
        <div class="messagedefilant messagedefilant-reverse">
        <h3>
          <?php
          $text_defilant = "↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;↓↓↓&nbsp;&nbsp;&nbsp;&nbsp;NOTRE COLLECTIF&nbsp;&nbsp;&nbsp;&nbsp;"
          ?>
        </h3>
        <div data-text="<?php echo $text_defilant; ?>"><span><?php echo $text_defilant; ?></span></div>
    </div>
    <div class="rs-title rs-title-default rs-title-margin-top">
        <div><h2 class="clickable">
                A PROPOS</h2>
        </div>
    </div>
        <div class="flex-col">
    <p>
        <br/>
        Radio Sofa est un collectif monté en avril 2020, à l’origine sous forme de webradio, afin de participer à la continuité de la diffusion des musiques actuelles et électroniques dans un contexte de fermeture des lieux culturels.
        <br/><br/>
        Nos activités se sont aujourd’hui étendues pour osciller entre la traditionnelle diffusion radiophonique, la production d’événements festifs et méditatifs, les arts visuels et les micro-collection de vêtements et de cassettes.
        <br/><br/>
        A travers ses ondes et ses événements, Radio Sofa se profile comme un espace d’expression pour les artistes et de découverte pour le public et l’auditoire. Nous nous attachons à proposer une programmation défricheuse et inclusive, mettant en avant des artistes émergent.e.s et aux identités diverses, en valorisant la prise de risque artistique et la création.
        <br/><br/>
        Nous veillons également à minimiser l’impact environnemental de nos activités via une programmation articulée autour d’artistes locaux.ales et une priorité accordée aux mobilités douces ainsi qu’à l’emploi de matériaux de seconde main.
        <br/><br/>
        A écouter assis.e et debout.
        <br/><br/>
    </p>
    <div class="text-italic">
        <br/>
        Radio Sofa is a collective set up in April 2020, originally as a web radio station. The idea was to take part in the continuity of the broadcasting of current and electronic music while cultural venues had to stay silent.
        <br/><br/>
        Our activities have now expanded and oscillate between the traditional radio broadcasting, the production of festive and meditative events, visual arts and micro-collections of clothing and cassettes.
        <br/><br/>
        Through its airwaves and events, Radio Sofa creates a space of expression for artists and discovery for the audience. We are committed to pioneering and inclusive programming, showcasing emerging artists with diverse identities and valuing risk-taking and creation.
        <br/><br/>
        We also intend to minimize the environmental impact of our activities by programming local artists and giving priority to soft mobilityl and second-hand materials.
        <br/><br/>
        To be listened to sitting and standing.
        <br/><br/>

    </div>
    </div>
    <div class="footer-image">
        <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/a_propos_12_23.gif"
             alt="Galerie de photo : foule au concert Radio Sofa au Sample à Bagnolet et photo shoot de collections de vêtements "/>
    </div>
</div>

<div class="mobile-only text-centered mobile-rs-icons">
    <div>
        <a href="https://www.facebook.com/webradio.sofa" target="_blank">
            <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/fb_icon.png"
                 alt="Accéder au facebook radio sofa"/>
        </a>
        <a href="https://www.instagram.com/radio.sofa/" target="_blank">
            <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/insta_icon.png"
                 alt="Accéder à l'insta radio sofa "/>
        </a>
        <a href="https://soundcloud.com/radio-sofa" target="_blank">
            <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/soundcloud_icon_dark.png"
                 alt="Accéder au Soundcloud de Radio Sofa "/></a>
        <a href="mailto:contact.radiosofa@gmail.com" target="_blank">
            <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/mail_icon.png"
                 alt="Ecrire un mail à Radio Sofa "/></a>

    </div>
    <br>
    <small>
        <a href="mailto:contact.radiosofa@gmail.com">contact.radiosofa@gmail.com</a>
    </small>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
</div>


</div>
