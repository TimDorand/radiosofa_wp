<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radiosofa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="<?php echo site_url();?>/wp-content/themes/radiosofa/js/jquery_min_213.js"></script>
    <script>
        // PLAYER
        $(function() {
            $("audio + a").click(function(e) {
                e.preventDefault();
                var song = $(this).prev('audio').get(0);

                if (song.paused) {
                    song.play();
//         $(this).text("❙ ❙");
                    $(this).addClass("pause");
                    $(this).removeClass("play");
                }
                else {
                    song.pause();
//         $(this).text("▶");
                    $(this).addClass("play");
                    $(this).removeClass("pause");
                }
            });
        });
        </script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/radiosofa/css/style.css">

    <style>
        html{
            background: <?php
             $backgroundColor = get_field("couleur_1");
             if(isset($backgroundColor)){
                 echo $backgroundColor;
             } else {
                 echo "#f7f8f4";
             } ?>;
        }
        .messagedefilant div span {
            animation: defilement <?php
             $texte_defilant_temps = get_field("texte_defilant_temps");
             if(isset($texte_defilant_temps)){
                 echo $texte_defilant_temps;
             } else {
                 echo "50";
             } ?>s infinite linear;
        }

        .messagedefilant div:after {
            animation: defilement2 <?php
             if(isset($texte_defilant_temps)){
                 echo $texte_defilant_temps;
             } else {
                 echo "50";
             } ?>s infinite linear;
        }

        .rs-title-light{
            background:<?php
            $couleur_2 = get_field("couleur_2");
        if(isset($couleur_2)){
            echo $couleur_2;
        } else {
              echo "rgba(248, 112, 248, 0.51);";
              } ?>;
        }
        .rs-title-default{
            background:<?php
            $couleur_3 = get_field("couleur_3");
        if(isset($couleur_3)){
            echo $couleur_3;
        } else {
              echo "rgba(131, 46, 199, 0.51);";
              } ?>;
        }
        .rs-title-dark{
            background:<?php
            $couleur_4 = get_field("couleur_4");
        if(isset($couleur_4)){
            echo $couleur_4;
        } else {
              echo "rgba(25, 0, 255, 0.48);";
              } ?>;
        }
    </style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'radiosofa' ); ?></a>

    <div class="messagedefilant" onclick="openCity(event, 'page-ondes')">
        <?php
        $text_defilant = get_field("texte_defilant");
        ?>
        <div data-text="<?php echo $text_defilant; ?>" onclick="openCity(event, 'page-ondes')"><span><?php echo $text_defilant; ?></span></div>
    </div>

    <div class="page-body">

	<header id="masthead" class="site-header">
        <div class="site-header-first-part">
        <div class="site-player">
            <audio controls>
                <source src="https://www.radioking.com/play/radio-sofa" type="audio/mpeg" style="width:100px">
                Your browser does not support the audio element.
            </audio>
            <a class="play" href="#"></a>
            <div id="rk-current-track-widget" data-id="radio-sofa" data-buy="0"></div>
            <script type="text/javascript" src="https://widget.radioking.io/current-track/build/script.min.js"></script>
        </div>
		<div class="site-branding">
			<?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>
            <span class="custom-logo-link" onclick="openCity(event, 'page-ondes')">
                <img alt="Radio Sofa Logo" src="<?php echo $image[0];?>"/>
            </span>

            <?php
			/*the_custom_logo();*/
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;

			$radiosofa_description = get_bloginfo( 'description', 'display' );
			if ( $radiosofa_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $radiosofa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>

            <!--<iframe src="https://www.radioking.com/widgets/player/player.php?id=292531&c=%23FFFFFF&c2=%232F3542&f=h&i=0&ii=null&p=0&s=0&li=0&popup=0&plc=NaN&h=undefined&l=470&a=0&v=2" style="border-radius: 5px; width: 470px; height: 145px; min-width: 470px; min-height: 0; " frameBorder="0" ></iframe>-->
        </div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation tab">

<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php /*esc_html_e( '▽', 'radiosofa' ); */?>
            </button>-->
            <div id="menu-toggle">▽</div>

            <div id="primary-menu">
               <ul>
                   <!--<li class="tablinks" onclick="openCity(event, 'page-ondes')"><a href="#">Ondes</a></li>-->
                   <li class="tablinks" onclick="openCity(event, 'page-sofas')">Sofas</li>
                   <li class="tablinks" onclick="openCity(event, 'page-convives')">Convives</li>
                   <li class="tablinks" onclick="openCity(event, 'page-residence')">Residence</li>
                   <li class="tablinks" onclick="openCity(event, 'page-emissions')">Emissions</li>
                   <li class="tablinks" onclick="openCity(event, 'page-articles')">Journal</li>
                   <li class="tablinks">


                   </li>
               </ul>
            </div>
			<?php
/*			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			*/?>
		</nav><!-- #site-navigation -->

        <div class="header-bio">
            <p class="text-justify">
                <?php
                $texte_defilant_temps = get_field("texte_defilant_temps");
                if(isset($texte_defilant_temps)){
                    echo $texte_defilant_temps;
                } else {
                    echo "
Radio Sofa vous partage en continu de la musique universelle piochée avec soin par notre équipe 
de diggers de salon.
<br/><br/>
Eclectisme garanti avec chaque semaine des sélections thématiques et des DJ sets, à écouter assis et debout.
                    ";
                } ?>
            </p>
        </div>
        </div>
        <div class="site-header-second-part">
        <small>contact.radiosofa@gmail.com</small>

        <div style="display:flex;flex-direction:row";> <a target="_blank" href="https://facebook.com/radiosofa">
                <img src="<?php echo site_url();?>/wp-content/themes/radiosofa/img/fb.png" width="20" alt="Facebook logo">
            </a>
            &#160;&#160;

            <a target="_blank" href="https://www.instagram.com/radio.sofa/">
                <img src="<?php echo site_url();?>/wp-content/themes/radiosofa/img/insta.png" width="20" alt="Instagram logo">
            </a>
        </div>
        </div>
	</header><!-- #masthead -->
