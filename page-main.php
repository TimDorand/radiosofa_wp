<?php

/*
Template Name: Main
*/

get_header();

?>
    <style>

    </style>

    <main id="primary" class="site-main">


        <?php
        while (have_posts()) :
            the_post();
        endwhile; // End of the loop.
        ?>

        <div id="page-ondes" class="tabcontent active">
            <?php
            $post = get_page_by_title('Ondes');
            $content = $post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
            ?>
        </div>

        <div id="page-convives" class="tabcontent">
        </div>

        <div id="page-sofas" class="tabcontent">
        </div>

        <div id="page-emissions" class="tabcontent">
        </div>

        <div id="page-residence" class="tabcontent">
            <?php
            $post = get_page_by_title('Residence');
            $content = $post->post_content;
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
            ?>
        </div>

        <div id="page-journal" class="tabcontent">
            <?php
            require('page-journal.php');
            ?>
        </div><!-- .page-journal -->

    </main><!-- #main -->


<?php
get_sidebar();
get_footer();


