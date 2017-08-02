<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Social_Change
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- Load Font from Typekit -->
<script src="https://use.typekit.net/hlk7rqm.js"></script>
<script>try{Typekit.load({ async: false });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page-overlay"></div>
<div class="search-top"></div>
<div class="watermark">
	<img src="/wp-content/themes/social-change/img/adler-logo-2.png" alt="Adler University Logo" />
</div>

<?php if ( is_front_page() || is_home() ) : ?>
<div class="link-overlay"></div>
<?php endif; ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'social-change' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() || is_home() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="/wp-content/themes/social-change/img/social-change-white.png" alt="Social Change" /></a>
				<h5 class="site-description">For Alumni and Friends of Adler University</h5>
				<h1 class="issue-title"><?php echo get_field(issue_title); ?></h1>
      	<p class="issue-date"><?php echo get_field(issue_date); ?></p>
      	<div class="more"></div>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="../../wp-content/themes/social-change/img/social-change-orange.png" alt="Social Change" /></a>
				<hr />
			<?php
			endif; ?>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'social-change' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
