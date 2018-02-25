<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seva-portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="true">
  <meta name="MobileOptimized" content="width">
  <meta name="format-detection" content="telephone=no">
  <meta name="format-detection" content="address=no">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="fixed fixed_md-top">
		<div class="nav nav_style" id="navigation">
			<div class="nav__container container">
				<div class="nav__row flex flex-y-center">
					<div class="nav__logo">
						<button class="hamburger hamburger_effect-2" type="button" id="js-nav-hamburger"><span class="hamburger__lines"><span></span><span></span><span></span><span></span></span>
						</button>
						<div class="nav__logo-content">
							<p class="nav__logo-content-text">Kurochka
							</p>
						</div>
					</div>
					<nav class="nav__menu" id="js-navigation-menu"><ul>
						<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-skills">My skills</a>
						</li>
						<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-portfolio">Portfolio</a>
						</li>
						<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-testimonial">Testimonial</a>
						</li>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<main class="site">