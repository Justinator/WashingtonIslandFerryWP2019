<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WashingtonIslandResponsive
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="/wp-content/uploads/2019/05/favicon-2.png" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/washingtonislandresponsive/fonts/MyFontsWebfontsKit.css">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/washingtonislandresponsive/css/css.fadeshow.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
	<?php wp_head(); ?>
	<!-- Preconnect to Google Analytics -->
	<link rel="dns-prefetch" href="https://www.google-analytics.com">
	<link rel="dns-prefetch" href="https://www.googletagmanager.com">
	<link href="https://www.google-analytics.com" rel="preconnect" crossorigin>
	<link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-13074741-51"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-13074741-51');
	</script>
</head>
<body <?php body_class(); ?>>
<a class="screenReaderSkipToContent" href="#primary" tabindex="1">Skip to main content</a>
<nav role="navigation" aria-label="mobile navigation">
	<div class = "mobile-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'mobileNav', 'menu_id' => 'mobile-menu' ) ); ?>
	</div>
</nav>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div id="site-navigation" class="main-navigation">
			<nav role="navigation" aria-label="primary navigation">
				<div class="navWidth menuLinkWrap">
						<a href="<?=site_url()?>" role="link">
							<img src="/wp-content/uploads/2019/03/WIFL-Logo-F.png" class="siteLogo" alt="Washington Island Logo"><span class="screen-reader-text">Go back to the homepage</span>
							<img src="/wp-content/uploads/2019/03/WashingtonIslandFerryCondensedLogo.png" class="hiddenScrollLogo" alt="Washington Island Logo"><span class="screen-reader-text">Go back to the homepage</span>
						</a>
						<?php wp_nav_menu( array( 'theme_location' => 'Primary', 'menu_id' => 'primary-menu' ) ); ?>
						<div class = "menuButtonWrap" aria-label="mobile menu toggle button" tabindex="0">
							<div class = "menuTextWrap">
								<span class = "menuText">MENU</span>
								<button class="hamburger hamburger--slider" type="button">
								  <span class="hamburger-box">
								    <span class="hamburger-inner"></span>
								  </span>
								</button>
							</div>
						</div>
				</div>
			</nav>
		</div><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
