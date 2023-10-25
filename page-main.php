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

        <div class="replay-container"></div>

        <div id="page-radio-ondes" class="tabcontent active">
        </div>

        <div id="page-radio-convives" class="tabcontent">
        </div>

        <div id="page-sofas" class="tabcontent">
        </div>

        <div id="page-collection" class="tabcontent">
        </div>

        <div id="page-radio-residence" class="tabcontent">

        </div>

        <div id="page-radio-journal" class="tabcontent">
        </div><!-- .page-journal -->



        <div class="rs-tchat">
            <?php if (function_exists('simple_ajax_chat')) simple_ajax_chat(); ?>
        </div>
    </main><!-- #main -->


<?php
get_sidebar();
get_footer();


