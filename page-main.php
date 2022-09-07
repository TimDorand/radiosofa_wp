<?php

/*
Template Name: Main
*/

get_header();

?>
    <style>

    </style>

    <main id="primary" class="site-main">

        <div class="messagedefilant">
            <?php
            $text_defilant = get_field("texte_defilant");
            ?>
            <div data-text="<?php echo $text_defilant; ?>"><span><?php echo $text_defilant; ?></span></div>
        </div>

        <div class="rs-tchat">
            <?php if (function_exists('simple_ajax_chat')) simple_ajax_chat(); ?>
        </div>


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
    </main><!-- #main -->


<?php
get_sidebar();
get_footer();


