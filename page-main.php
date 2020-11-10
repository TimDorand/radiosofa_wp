<?php

/*
Template Name: Main
*/

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package radiosofa
 */

get_header();

?>
    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
           // background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
          //  background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            /// background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
        .active{
            display:block;
        }
    </style>


	<main id="primary" class="site-main">


		<?php
		while ( have_posts() ) :
			the_post();
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


        </head>
        <body>

<div class="tab">
<button class="tablinks" onclick="openCity(event, 'page-ondes')">
Ondes
</button>
<button class="tablinks" onclick="openCity(event, 'page-convives')">Convives</button>
<button class="tablinks" onclick="openCity(event, 'page-sofas')">Sofas</button>
</div>

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
<h3>Tokyo</h3>
<p>Tokyo is the capital of Japan.</p>
</div>

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
