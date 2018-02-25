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
	<?php get_template_part('theme/components/nav'); ?>
	<main class="site">