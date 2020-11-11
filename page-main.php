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
        require('page-ondes.php');
        ?>
    </div>

    <div id="page-convives" class="tabcontent">
        <?php
        require('page-convives.php');
        ?>
    </div>

    <div id="page-sofas" class="tabcontent">
        <?php
        require('page-sofas.php');
        ?>
    </div>

    <div id="page-emissions" class="tabcontent">
        <?php
        require('page-emissions.php');
        ?>
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

    <div id="page-actualite" class="tabcontent">
        <?php
        $post = get_page_by_title('Acutalites');
        $content = $post->post_content;
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
        echo $content;
        ?>
    </div>

</main><!-- #main -->

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php
get_sidebar();
get_footer();


