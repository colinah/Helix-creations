<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Helix_Creations
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="whitespace"></div>
<?php wp_body_open(); ?>
<div class="page">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'helix-creations' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header__wrapper" id="navbar">
			<div class="site-branding">
				<div class="nav-logo">
					<div class="nav-logo__icon">
						<?php the_custom_logo(); ?>
					</div> <!-- nav-logo -->
					<div class="nav-logo__title">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</div> <!-- nav-logo__title -->
				</div> <!-- nav-logo__container -->	
			</div><!-- .site-branding -->

			<div class="mobile-nav__wrapper" >
				<nav id="site-navigation" class="main-navigation">
					<div onclick="updateId('mobile-nav1','mobile-nav2')" class="menuToggle"><span></span><span></span><span></span></div>
						<div id="mobile-nav1">
							<div class="nav-backdrop"></div>
							<div onclick="updateId('mobile-nav1','mobile-nav2')" class="nav-close">X</div>
								<div id="primary-menu" class="menu">
									<ul>
										<li class="page_item" ><a href="<?php  echo site_url('/') ?>">Home</a></li>
										<!-- <li class="page_item" ><a href="<?php  echo site_url('/vlog') ?>">Vlog</a></li> -->
										<li class="page_item" ><a href="<?php  echo site_url('/blog') ?>">Blog</a></li>
										<li class="page_item" ><a href="<?php  echo site_url('/community') ?>">Community</a></li>
										<!-- <li class="page_item" ><a href="<?php  echo site_url('/contact') ?>">Contact</a></li> -->
										<li><?php get_search_form(); ?></li>
									</ul>
								</div>
						</div> <!-- .mobile-nav -->
				</nav><!-- #site-navigation -->
			</div><!-- .mobile-nav__wrapper -->
				<div class="nav-menu">
					<span class="nav-menu__item" ><a href="<?php  echo site_url('/') ?>">Home</a></span>
					<span class="nav-menu__item" ><a href="<?php  echo site_url('/blog') ?>">Blog</a></span>
					<span class="nav-menu__item" ><a href="<?php  echo site_url('/contact') ?>">Contact</a></span>
					<!-- <span class="nav-menu__item" id="nav-search__title" onclick="toggleVisibility('nav-search__form')">Search ></span> -->
					<span class="nav-menu__item" id="nav-search__form"><?php get_search_form(); ?></span>
				</div>
		</div> <!-- .site-header -->
	</header><!-- #masthead -->
	<div class="content">


