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


        <?php
        while (have_posts()) :
            the_post();
        endwhile; // End of the loop.
        ?>

        <div id="page-radio-ondes" class="tabcontent active">
        </div>

        <div id="page-radio-convives" class="tabcontent">
        </div>

        <div id="page-sofas" class="tabcontent">
        </div>

        <div id="page-emissions" class="tabcontent">
        </div>

        <div id="page-radio-residence" class="tabcontent">

        </div>

        <div id="page-radio-journal" class="tabcontent">
        </div><!-- .page-journal -->

    </main><!-- #main -->


<?php
get_sidebar();
get_footer();


