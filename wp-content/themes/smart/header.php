<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'smart' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
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

		</div><!-- .site-branding -->

		<!-- hardCodat -->
		<div class="logoarea">

			<div class="fw-col-xs-12 fw-col-sm-2 icons">
				<div>
					<ul>
						<li>
							<a href="#"> <i class="flaticon-facebook-logo"></i> </a>
						</li>
						<li>
							<a href="#"> <i class="flaticon-instagram-symbol"></i> </a>
						</li>
						<li>
							<a href="#"> <i class="flaticon-pinterest-logo"></i> </a>
						</li>
						<li>
							<a href="#"> <i class="flaticon-twitter-logo-silhouette"></i> </a>
						</li>
					</ul>
				</div>

			</div>
			
			<div class="fw-col-xs-12 fw-col-sm-2"></div>
			<div class="fw-col-xs-12 fw-col-sm-4">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo get_bloginfo( 'name' );?></a>
			</div>
			<div class="fw-col-xs-12 fw-col-sm-4 searchform">
				<?php
				//get_search_form();

				?>

				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<div class="insidesearch">
						<label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder=" Search ..." value="" name="s" title="Search for:" />
						</label>
						<input type="submit" class="search-submit" value=" go " />
					</div>

				</form>
			</div>

		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'smart' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

