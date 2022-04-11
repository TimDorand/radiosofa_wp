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
          content="Radio Sofa, la webradio à écouter assis et debout. Partage continuel de sons universels et confortables par nos diggers de salon.">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/js/jquery_min_213.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/radiosofa/css/style.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/radiosofa/css/fa.css">

    <style>
        html {
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

        /*
                .rs-title-light{
                    background:
        <?php
                    $couleur_2 = get_field("couleur_2");
                if(isset($couleur_2)){
                    echo $couleur_2;
                } else {
                      echo "rgba(248, 112, 248, 0.51);";
                      } ?>
        ;
                }
                .rs-title-default{
                    background:
        <?php
                    $couleur_3 = get_field("couleur_3");
                if(isset($couleur_3)){
                    echo $couleur_3;
                } else {
                      echo "rgba(131, 46, 199, 0.51);";
                      } ?>
        ;
                }
                .rs-title-dark{
                    background:
        <?php
                    $couleur_4 = get_field("couleur_4");
                if(isset($couleur_4)){
                    echo $couleur_4;
                } else {
                      echo "rgba(25, 0, 255, 0.48);";
                      } ?>
        ;
                }*/
        .page-body {
            background: <?php
            $couleur_4 = get_field("couleur_5");
        if(isset($couleur_4)){
            echo $couleur_4;
        } else {
              echo "#fff";
              } ?>;
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
    <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/loading-site.gif" alt="loader"
         class="img-loader" id="spin" width="96" height="96"/>
    <img src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/img/loading-site.gif" alt="loader"
         class="small-img-loader" id="small-spin"/>

    <!--<div class="music-loader-container" id="spin">
        <div class="music-loader-item"></div>
        <div class="music-loader-item"></div>
        <div class="music-loader-item"></div>
        <div class="music-loader-item"></div>
        <div class="music-loader-item"></div>
    </div>-->
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'radiosofa'); ?></a>

    <div class="page-body">

        <header id="masthead" class="site-header">
            <div class="site-header-first-part">
                <div class="site-player">

                    <audio id="sidebar-player-audio" controls preload="none"
                           onloadeddata="myOnLoadedData()">
                        <source src="" type="audio/mpeg" style="width:100px">
                        Your browser does not support the audio element.
                    </audio>
                    <div class="lds-dual-ring"></div>
                    <a id="sidebar-player" class="play" href="#" style="display:none;"></a>
                    <div id="rk-current-track-widget" data-id="radio-sofa" data-buy="0"></div>
                    <!-- <script type="text/javascript" src="https://widget.radioking.io/current-track/build/script.min.js"></script> -->
                    <script type="text/javascript"
                            src="<?php echo site_url(); ?>/wp-content/themes/radiosofa/js/current-track/rk-current-track-min.js"></script>
                    <!-- <script type="text/javascript" src="<?php /*echo site_url();*/ ?>/wp-content/themes/radiosofa/js/lazyframe/lazyframe.js"></script>
            <link rel="stylesheet" href="<?php /*echo site_url();*/ ?>/wp-content/themes/radiosofa/js/lazyframe/lazyframe.css" />
-->
                </div>
                <div class="site-branding">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    ?>
                    <span class="custom-logo-link">
                <!--<svg height="96" width="96" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1090 1090"><defs><style>.cls-1{fill:#1a1c19;}.cls-2{fill:#fff;}</style></defs><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><polygon class="cls-1" points="229.75 0 0 229.75 0 1090 861.91 1090 1090 860.14 1090 0 229.75 0"/><rect class="cls-2" x="251.31" y="42.84" width="796.25" height="796.25"/><path class="cls-1" d="M299.68,97.77q0-4,3.84-4h50.3a44.85,44.85,0,0,1,17.47,3.38,45.3,45.3,0,0,1,14,9.14,42.23,42.23,0,0,1,9.34,13.44A39.81,39.81,0,0,1,398.06,136v8.18a37.32,37.32,0,0,1-1.71,11.22,46.12,46.12,0,0,1-4.75,10.35,47.4,47.4,0,0,1-7.22,9,48.19,48.19,0,0,1-9.15,7l3.94,6,20.11,46a3.37,3.37,0,0,1,0,2.78,2.31,2.31,0,0,1-2.33,1.36H371.8a3.73,3.73,0,0,1-2.47-.71,6.76,6.76,0,0,1-1.67-2.72L349,187.77H327.25v46.06a4.85,4.85,0,0,1-.75,2.93,3.14,3.14,0,0,1-2.68,1h-20.3q-3.84,0-3.84-3.94Zm27.57,22.93v40.91h23.64a19.75,19.75,0,0,0,7.53-1.42,18.24,18.24,0,0,0,10.05-9.74,17.85,17.85,0,0,0,1.41-7.12v-3.94a18.88,18.88,0,0,0-1.41-7.33,18.49,18.49,0,0,0-3.94-5.91,18.79,18.79,0,0,0-6-4,19.65,19.65,0,0,0-7.63-1.46Z"/><path class="cls-1" d="M568.81,233.63q1.52,4.14-2.52,4.14H543.86a5.48,5.48,0,0,1-2.93-.81,4.76,4.76,0,0,1-1.92-2.82l-6.56-21.62H480.53L474,234.14a4.34,4.34,0,0,1-1.82,2.82,5.45,5.45,0,0,1-2.93.81H446.69a2.83,2.83,0,0,1-2.48-1.06,3.34,3.34,0,0,1,0-3.08L490.33,97.26c.8-2.49,2.39-3.73,4.74-3.73H517.9c2.36,0,4,1.24,4.85,3.73Zm-80.3-47.48h35.86l-15.26-50.4-2.72-14.34-2.63,14.34Z"/><path class="cls-1" d="M622,97.77q0-4,3.84-4h48a64,64,0,0,1,23.69,4.49,56.54,56.54,0,0,1,18.74,12.18,55.41,55.41,0,0,1,12.32,18.53A61.51,61.51,0,0,1,733,152.62v26.57a60.92,60.92,0,0,1-4.49,23.68,55.34,55.34,0,0,1-12.42,18.49,56,56,0,0,1-18.89,12,66,66,0,0,1-23.79,4.39H625.82q-3.84,0-3.84-3.94Zm50.1,113.13a36.86,36.86,0,0,0,13.39-2.32,29.26,29.26,0,0,0,10.3-6.62,29.85,29.85,0,0,0,6.67-10.3,36.22,36.22,0,0,0,2.37-13.38V153.33a37.73,37.73,0,0,0-2.27-13.39A28.35,28.35,0,0,0,686,123.12a37,37,0,0,0-13.13-2.42H649.76v90.2Z"/><path class="cls-1" d="M792.53,97.77q0-4,3.84-4h21.21a2.8,2.8,0,0,1,2.58,1.06,5.75,5.75,0,0,1,.65,3V233.83a5.46,5.46,0,0,1-.65,2.93,2.85,2.85,0,0,1-2.58,1H796.37q-3.84,0-3.84-3.94Z"/><path class="cls-1" d="M880.35,146.05a53.24,53.24,0,0,1,17.12-39.85,56.34,56.34,0,0,1,18.74-11.36,68.81,68.81,0,0,1,46.46,0,56.87,56.87,0,0,1,18.79,11.36,53,53,0,0,1,17.17,39.85v39.7a52.6,52.6,0,0,1-17.17,39.7,57.44,57.44,0,0,1-18.74,11.31,68.66,68.66,0,0,1-46.41,0,57.26,57.26,0,0,1-18.79-11.31,52.6,52.6,0,0,1-17.17-39.7Zm28.28,37.58A32.72,32.72,0,0,0,911,196.1a29.79,29.79,0,0,0,6.42,9.85,28.79,28.79,0,0,0,9.8,6.47,34.14,34.14,0,0,0,24.74,0,28.7,28.7,0,0,0,9.8-6.47,29.94,29.94,0,0,0,6.42-9.79,32.44,32.44,0,0,0,2.32-12.43V147.87a32.46,32.46,0,0,0-2.32-12.37,29.79,29.79,0,0,0-6.42-9.85,28.84,28.84,0,0,0-9.8-6.47,34.14,34.14,0,0,0-24.74,0,28.94,28.94,0,0,0-9.8,6.47A29.79,29.79,0,0,0,911,135.5a32.46,32.46,0,0,0-2.32,12.37Z"/><path class="cls-1" d="M301.43,454.84a24.53,24.53,0,0,1-2.8-7.63c-.34-2.21.88-3.93,3.67-5.18l32.25-17.57a5.66,5.66,0,0,1,4.75-.21q2.31.93,4.32,4.68a30.77,30.77,0,0,0,5.11,6.76,41.59,41.59,0,0,0,7.42,6,42.09,42.09,0,0,0,8.93,4.32,29.16,29.16,0,0,0,9.64,1.65q9.22,0,15-3.52a11.5,11.5,0,0,0,5.76-10.44,12.36,12.36,0,0,0-2.95-8.14,34.46,34.46,0,0,0-8.71-7,148,148,0,0,0-14.26-7.35q-8.49-3.88-19.44-9.35a114.1,114.1,0,0,1-22-13.47,64.48,64.48,0,0,1-13.6-14.54,49,49,0,0,1-6.92-15.91,78.28,78.28,0,0,1-1.94-17.71,54.06,54.06,0,0,1,19.44-42.33,66.66,66.66,0,0,1,22-12.1,87.88,87.88,0,0,1,28.22-4.32,110.54,110.54,0,0,1,19.73,1.8,77.61,77.61,0,0,1,19.15,6.12,72.92,72.92,0,0,1,17.35,11.52,70.61,70.61,0,0,1,14.32,18,19.32,19.32,0,0,1,2.74,7.77q.29,3.46-3.6,5l-28.22,14.11a9.51,9.51,0,0,1-6.12.94q-2.52-.64-5.26-4.39a26.52,26.52,0,0,0-11.3-9.07,37.77,37.77,0,0,0-15.19-3,46.24,46.24,0,0,0-8,.65,22.39,22.39,0,0,0-6.34,2,11.92,11.92,0,0,0-4.24,3.52,8.27,8.27,0,0,0-1.59,5,11.22,11.22,0,0,0,1,4.68,14.64,14.64,0,0,0,3.6,4.61,38.55,38.55,0,0,0,7,4.9,108.86,108.86,0,0,0,11.38,5.4,266.59,266.59,0,0,1,28.08,13.39,99.43,99.43,0,0,1,21,15.33,56.53,56.53,0,0,1,17.71,42.84,61,61,0,0,1-5.4,25.84A58.47,58.47,0,0,1,428,478.67a70.71,70.71,0,0,1-23.33,13.11,94.89,94.89,0,0,1-53.49,1.58,86,86,0,0,1-20.8-8.64,77,77,0,0,1-16.85-13.17A72.59,72.59,0,0,1,301.43,454.84Z"/><path class="cls-1" d="M513.73,361.54A78.34,78.34,0,0,1,520.35,329a76.26,76.26,0,0,1,18.22-25.27,82.36,82.36,0,0,1,27.36-16.42,101.5,101.5,0,0,1,67.81,0,83.29,83.29,0,0,1,27.43,16.42,75.53,75.53,0,0,1,18.29,25.34,78.48,78.48,0,0,1,6.62,32.47v55.15a78,78,0,0,1-6.62,32.39,75,75,0,0,1-18.29,25.2,83.94,83.94,0,0,1-27.35,16.34,101.57,101.57,0,0,1-67.89,0,82.85,82.85,0,0,1-27.36-16.34,75.47,75.47,0,0,1-18.22-25.2,78,78,0,0,1-6.62-32.39Zm53.13,51.4a39.35,39.35,0,0,0,2.38,14,31.59,31.59,0,0,0,6.69,10.87,30.9,30.9,0,0,0,10.44,7.13A34.54,34.54,0,0,0,600,447.5a34,34,0,0,0,13.53-2.59,31.11,31.11,0,0,0,10.37-7.13,31.77,31.77,0,0,0,6.7-10.87,39.57,39.57,0,0,0,2.37-14V365a40.32,40.32,0,0,0-2.3-13.82A31.63,31.63,0,0,0,624,340.23a30.43,30.43,0,0,0-10.43-7.2,37.05,37.05,0,0,0-27.22,0,30.37,30.37,0,0,0-10.44,7.2,32.38,32.38,0,0,0-6.69,10.94A39,39,0,0,0,566.86,365Z"/><path class="cls-1" d="M299.86,570.29q0-6.85,6.7-6.86H440.49q6.22,0,6.23,6.86v42.63q0,6.71-6.23,6.7H358.92V652.5h61a7.48,7.48,0,0,1,5.11,1.68q1.9,1.68,1.91,5.35v42.3q0,6.7-7,6.71h-61v75.82q0,6.71-6.71,6.71H306.56q-6.71,0-6.7-6.71Z"/><path class="cls-1" d="M685.43,784.36c1.6,4.47.26,6.71-4,6.71H632a10.13,10.13,0,0,1-5.74-1.6,8.53,8.53,0,0,1-3.36-5.11L617,761.05H550.54l-5.75,23.31a8.48,8.48,0,0,1-3.35,5.11,9.86,9.86,0,0,1-5.59,1.6H486.21q-6.39,0-4-6.71l67.52-214.07q2.24-6.85,8.94-6.86H609c4.47,0,7.44,2.29,8.94,6.86ZM564.11,706.3h39.27l-14.69-58.9-5-27.78-5.1,27.78Z"/><path class="cls-1" d="M797.46,452.88c-2.45,13.85-4,25.89,18,28.62,52.35,6.51,79.33,42,77,95.89-1.26,29,2.64,33.24,31.27,33.26q37.42,0,74.84,0V282.28c-39.2,8.4-77,22.06-112.52,44.31C838.79,356.2,807.34,397.19,797.46,452.88Z"/><path class="cls-1" d="M998.53,634.86q-49.1,0-98.19,0c-29.13,0-32-3.26-32.25-32.87-.14-16,.52-32.16-1.54-47.94-3.9-29.85-30-51.21-61-51.8-32-.62-62.55,20.54-65.37,49.41-5.64,57.78-1.23,114.79,25,168,16.28,33,42.7,49.1,80.49,48.86v10.22c0,20.76,32.3,20.76,32.3,0V768.49H998.13l-2-.4h2.36Z"/></g></g></svg>-->
                <img class="tablinks currenttab pageTemplateSelector" pageSelector="page-radio-ondes"
                     alt="Radio Sofa Logo" src="<?php echo $image[0]; ?>"/>
            </span>

                    <?php
                    /*the_custom_logo();*/
                    if (is_front_page() && is_home()) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                  rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                 rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif;

                    $radiosofa_description = get_bloginfo('description', 'display');
                    if ($radiosofa_description || is_customize_preview()) :
                        ?>
                        <p class="site-description"><?php echo $radiosofa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                            ?></p>
                    <?php endif; ?>

                    <!--<iframe src="https://www.radioking.com/widgets/player/player.php?id=292531&c=%23FFFFFF&c2=%232F3542&f=h&i=0&ii=null&p=0&s=0&li=0&popup=0&plc=NaN&h=undefined&l=470&a=0&v=2" style="border-radius: 5px; width: 470px; height: 145px; min-width: 470px; min-height: 0; " frameBorder="0" ></iframe>-->
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation tab">

                    <!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php /*esc_html_e( '▽', 'radiosofa' ); */ ?>
            </button>-->
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
                                <h2><a href="/#radio-residence">Residence</a></h2></li>
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
                                    <h2><a href="/#radio-residence">Residence</a></h2></li>
                                <li class="tablinks pageSelector" mobileMenu="true" pageSelector="page-collection">
                                    <h2><a href="/#page-collection">Collection</a></h2></li>
                                <li class="tablinks pageTemplateSelector" mobileMenu="true"
                                    pageSelector="page-radio-journal">
                                    <h2><a href="/#radio-journal">Journal</a></h2></li>

                            </ul>
                        </div>
                    </nav>

                    <?php
                    /*			wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'menu_id'        => 'primary-menu',
                                    )
                                );
                                */ ?>
                </nav><!-- #site-navigation -->

                <!--<div class="header-bio">
            <p class="text-justify">
                <?php
                /*                $texte_bio = get_field("texte_bio");
                                if(isset($texte_bio)){
                                    echo $texte_bio;
                                } else {
                                    echo "
                Radio Sofa vous partage en continu de la musique universelle piochée avec soin par notre équipe
                de diggers de salon.
                <br/><br/>
                Eclectisme garanti avec chaque semaine des sélections thématiques et des DJ sets, à écouter assis et debout.
                                    ";
                                } */ ?>
            </p>
        </div>-->
            </div>
            <div class="site-header-second-part">

                <div style="display:flex;flex-direction:row;">
                    <a href="https://www.facebook.com/webradio.sofa" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/radio.sofa/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://soundcloud.com/radio-sofa" target="_blank"><i class="fab fa-soundcloud"></i></a>
                    <!--<a rel="noreferrer" target="_blank" href="https://facebook.com/webradio.sofa">
                <img src="<?php /*echo site_url();*/ ?>/wp-content/themes/radiosofa/img/logo_facebook.png" width="15" height="15" alt="Facebook logo">
            </a>
            <a rel="noreferrer" target="_blank" href="https://www.instagram.com/radio.sofa/">
                <img src="<?php /*echo site_url();*/ ?>/wp-content/themes/radiosofa/img/logo_insta.png" width="15" height="15" alt="Instagram logo">
            </a>

            <a rel="noreferrer" target="_blank" href="https://soundcloud.com/radio-sofa">
                <img src="<?php /*echo site_url();*/ ?>/wp-content/themes/radiosofa/img/logo_soundcloud.png" width="15" height="15" alt="Soundcloud logo">
            </a>-->
                    <!-- <a rel="noreferrer" target="_blank" href="https://open.spotify.com/user/jackhadagroove/">
                <img src="<?php /* echo site_url(); */ ?>/wp-content/themes/radiosofa/img/logo_spotify.png" width="15" height="15" alt="Spotify logo">
            </a>-->
                </div>
                <small>contact.radiosofa@gmail.com</small>

            </div>
        </header><!-- #masthead -->
