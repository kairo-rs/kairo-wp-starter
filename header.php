<?php 
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kairo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kairo' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
<<<<<<< HEAD
		<?php if ( get_header_image() && ('blank' == get_header_textcolor())) : ?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</a>
			</div>
			
			<?php endif; // End header image check. ?>
			<?php if ( get_header_image() && !('blank' == get_header_textcolor())) : ?>
				<div class="site-branding header-background-image" style="background-image : url(<?php header_image(); ?>);">
			<?php else : ?>
				<div class="site-branding">
			<?php endif ?>
			<div class="title-box">
=======
		<div class="site-branding">
>>>>>>> 0bea866274f44ba065a3344ea1605e5916f45d96
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
<<<<<<< HEAD
			</div>  <!-- end title box -->
=======
>>>>>>> 0bea866274f44ba065a3344ea1605e5916f45d96
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kairo' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<<<<<<< HEAD
			<div class="search-toggle">
					<i class="fa fa-search" aria-hidden="true"></i>
					<a href="#search-container" class="screen-reader-text">
						<?php _e('Search', 'kairo'); ?>
					</a>
			</div>
			<?php kairo_social_menu(); ?>
		</nav><!-- #site-navigation -->
		<div id="search-container" class="search-box-wrapper clear">
			<div class="search-box clear">
				<?php get_search_form(); ?>

			</div>
		</div> <!-- end search container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	
=======
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
>>>>>>> 0bea866274f44ba065a3344ea1605e5916f45d96
