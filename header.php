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
    <link rel="stylesheet" href="<?php echo site_url();?>/wp-content/themes/radiosofa/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'radiosofa' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
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

            <audio controls>
                <source src="https://www.radioking.com/play/radio-sofa" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation tab">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'radiosofa' ); ?></button>

               <ul>
                   <li class="tablinks" onclick="openCity(event, 'page-ondes')"><a href="#">Ondes</a></li>
                   <li class="tablinks" onclick="openCity(event, 'page-sofas')"><a href="#">Sofas</a></li>
                   <li class="tablinks" onclick="openCity(event, 'page-convives')"><a href="#">Convives</a></li>
                   <li class="tablinks" onclick="openCity(event, 'page-emissions')"><a href="#">Emissions</a></li>
               </ul>
			<?php
			/*wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);*/
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
