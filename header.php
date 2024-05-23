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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Radio Sofa est un collectif parisien oscillant entre événements festifs et méditatifs, diffusion radiophonique, arts visuels, sapes et micro-label.">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/js/jquery_min_213.js"></script>
    <?php wp_head(); ?>
    <link rel="preload" href="<?php echo site_url(); ?>/wp-content/themes/radiosofa/fonts/ts_block/TS%20Block%20Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo site_url(); ?>/wp-content/themes/radiosofa/fonts/novaesium/Novaesium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo site_url(); ?>/wp-content/themes/radiosofa/fonts/novaesium/Novaesium%20Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="<?php echo site_url(); ?>/wp-content/themes/radiosofa/fonts/arial-rounded-mt-bold.ttf" as="font" type="font/ttf" crossorigin>

    <style>
        .messagedefilant-normal div span {
            animation: defilement <?php
             $texte_defilant_temps = get_field("texte_defilant_temps");
             if(isset($texte_defilant_temps)){
                 echo $texte_defilant_temps;
             } else {
                 echo "50";
             } ?>s infinite linear;
        }

        .messagedefilant-normal div:after {
            animation: defilement2 <?php
             if(isset($texte_defilant_temps)){
                 echo $texte_defilant_temps;
             } else {
                 echo "50";
             } ?>s infinite linear;
        }

        .messagedefilant div span, .messagedefilant div:after {
            color: <?php
            $couleur_4 = get_field("couleur_6");
        if(isset($couleur_4)){
            echo $couleur_4;
        } else {
              echo "#000";
              } ?>;
        }
    </style>
    <?php
    // Charger le script js
    wp_enqueue_script('rs-ajax', get_template_directory_uri() . '/js/ajax.js', array('jquery'), '1.0', true);
    wp_enqueue_script('rs-utils', get_template_directory_uri() . '/js/utils.js', array('jquery'), '1.0', true);
    wp_enqueue_script('rs-main', get_template_directory_uri() . '/js/main-script.js', array('jquery'), '1.0', true);

    // Envoyer une variable de PHP à JS proprement
    wp_localize_script('rs-ajax', 'ajaxUrl', admin_url('admin-ajax.php'));
    wp_localize_script('rs-ajax', 'isAdmin', is_admin());
    wp_localize_script('rs-main', 'url_visuel_mois', get_field("url_visuel_mois"));
    wp_localize_script('rs-main', 'description_visuel_mois', get_field("description_visuel_mois"));
    wp_localize_script('rs-main', 'description_complete_visuel_mois', get_field("description_complete_visuel_mois"));
    ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/animated_star.gif" alt="loader"
         class="img-loader" id="spin" width="100" height="100"/>
   <!-- <img src="<?php /*echo site_url(); */?>/wp-content/themes/radiosofa/img/loading-site.gif" alt="loader"
         class="img-loader" id="spin" width="96" height="96"/>
    <img src="<?php /*echo site_url(); */?>/wp-content/themes/radiosofa/img/loading-site.gif" alt="loader"
         class="small-img-loader" id="small-spin"/>-->
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'radiosofa'); ?></a>

    <a href="<?php
    $lien_banniere = get_field("lien_banniere");
    echo $lien_banniere ? $lien_banniere : 'https://www.facebook.com/webradio.sofa'
    ?>" target="_blank" aria-label="Lien vers Facebook">
    <div class="messagedefilant messagedefilant-normal">
        <?php
        $text_defilant = get_field("texte_defilant");
        ?>
        <div data-text="<?php echo $text_defilant; ?>"><span><?php echo $text_defilant; ?></span></div>
    </a>
    </div>
    <div class="site-player">
        <div class="header-container">
            <div class="player-section">
                <audio id="sidebar-player-audio" controls preload="none" onloadeddata="myOnLoadedData()">
                    <source src="" type="audio/mpeg" style="width:100px">
                    Your browser does not support the audio element.
                </audio>
                <div class="lds-dual-ring"></div>
                <a id="sidebar-player" class="play" href="#" style="display:none;"></a>
                <div id="rk-current-track-widget" data-id="radio-sofa" data-buy="0"></div>
                <script type="text/javascript"
                        src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/js/current-track/rk-current-track-min.js"></script>
            </div>
            <div class="title-section">
            <!-- <h1 class="ondes-title">
                    <span>R</span>
                    <span>A</span>
                    <span>D</span>
                    <span>I</span>
                    <span>O</span>
                    <span style="width: 5%"></span>
                    <span>S</span>
                    <span>O</span>
                    <span>F</span>
                    <span style="margin-left:-7%">A</span>
                </h1>-->
                <img
                        width="887"
                        src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/radio_sofa_title.svg"
                        alt="Radio Sofa en lettres majuscules"
                        class="img-radio-sofa-title"
                />
                <p hidden>RADIO SOFA</p>
                <img
                        width="100"
                        height="100"
                        src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/animated_star.gif"
                        alt="Etoile à 4 branches tournant sur elle-même"
                        class="img-title-star"
                />
            </div>
        </div>
    </div>


    <div class="page-body">
        <header id="masthead" class="site-header">
            <div class="site-header-first-part">
                <!--<div class="site-branding">
                    <?php
/*                    $custom_logo_id = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    */?>
                    <span class="custom-logo-link">
                <img class="tablinks currenttab pageTemplateSelector" pageSelector="page-radio-ondes"
                     alt="Radio Sofa Logo" src="<?php /*echo $image[0]; */?>"/>
            </span>

                    <?php
/*                    if (is_front_page() && is_home()) :
                        */?>
                        <h1 class="site-title"><a href="<?php /*echo esc_url(home_url('/')); */?>"
                                                  rel="home"><?php /*bloginfo('name'); */?></a></h1>
                    <?php
/*                    else :
                        */?>
                        <p class="site-title"><a href="<?php /*echo esc_url(home_url('/')); */?>"
                                                 rel="home"><?php /*bloginfo('name'); */?></a></p>
                    <?php
/*                    endif;

                    $radiosofa_description = get_bloginfo('description', 'display');
                    if ($radiosofa_description || is_customize_preview()) :
                        */?>
                        <p class="site-description"><?php /*echo $radiosofa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            */?></p>
                    <?php /*endif; */?>

                </div>-->

                <nav id="site-navigation" class="main-navigation tab">
                    <div id="menu-toggle">▽</div>
                    <div id="primary-menu">
                        <ul>
                            <li class="tablinks currenttab pageTemplateSelector" pageSelector="page-radio-ondes">
                                <h2><a href="/#">Salon</a></h2></li>
                            <li class="tablinks pageSelector" pageSelector="page-sofas">
                                <h2><a href="/#page-sofas">Sofas</a></h2></li>
                            <li class="tablinks pageTemplateSelector" pageSelector="page-radio-convives">
                                <h2><a href="/#radio-convives">Convives</a></h2></li>
                            <li class="tablinks pageTemplateSelector big-phone-only"
                                pageSelector="page-radio-residence">
                                <h2><a href="/#radio-residence">Residences</a></h2></li>
                            <li class="tablinks pageSelector desktop-only" pageSelector="page-collection">
                                <h2><a href="/#page-collection">Collection</a></h2></li>
                            <li class="tablinks pageTemplateSelector desktop-only" pageSelector="page-radio-journal">
                                <h2><a href="/#radio-journal">Journal</a></h2></li>
                        </ul>
                    </div>

                    <nav class="mobile-only">
                        <div class="hamburger-menu">
                            <input id="menu__toggle" type="checkbox"/>
                            <label class="menu__btn" for="menu__toggle">
                                <span></span>
                            </label>

                            <ul class="menu__box">
                                <li class="tablinks" id="menu__close" mobileMenu="true">╳</li>
                                <li class="tablinks currenttab pageTemplateSelector" mobileMenu="true"
                                    pageSelector="page-radio-ondes">
                                    <h2><a href="/#">Salon</a></h2></li>
                                <li class="tablinks pageSelector" mobileMenu="true" pageSelector="page-sofas">
                                    <h2><a href="/#page-sofas">Sofas</a></h2></li>
                                <li class="tablinks pageTemplateSelector" mobileMenu="true"
                                    pageSelector="page-radio-convives">
                                    <h2><a href="/#radio-convives">Convives</a></h2></li>
                                <li class="tablinks pageTemplateSelector" mobileMenu="true"
                                    pageSelector="page-radio-residence">
                                    <h2><a href="/#radio-residence">Residences</a></h2></li>
                                <li class="tablinks pageSelector" mobileMenu="true" pageSelector="page-collection">
                                    <h2><a href="/#page-collection">Collection</a></h2></li>
                                <li class="tablinks pageTemplateSelector" mobileMenu="true"
                                    pageSelector="page-radio-journal">
                                    <h2><a href="/#radio-journal">Journal</a></h2></li>

                            </ul>
                        </div>
                    </nav>

                </nav>
            </div>
            <div class="site-header-second-part">

                <div style="display:flex;flex-direction:row;">
                    <a href="https://www.facebook.com/webradio.sofa" target="_blank">
                        <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/fb_icon.png" alt="Accéder au facebook radio sofa"/>
                    </a>
                    <a href="https://www.instagram.com/radio.sofa/" target="_blank">
                        <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/insta_icon.png" alt="Accéder à l'insta radio sofa "/>
                    </a>
                    <a href="https://soundcloud.com/radio-sofa" target="_blank">
                        <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/soundcloud_icon_dark.png" alt="Accéder au Soundcloud de Radio Sofa "/></a>
                    <a href="mailto:contact.radiosofa@gmail.com" target="_blank">
                        <img width="20" src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/mail_icon.png" alt="Ecrire un mail à Radio Sofa "/></a>
                </div>
            </div>
        </header><!-- #masthead -->
