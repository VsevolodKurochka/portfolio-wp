<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seva-portfolio
 */

get_header(); 

get_template_part('theme/index/intro');
get_template_part('theme/index/skills');
get_template_part('theme/index/services');
get_template_part('theme/index/portfolio');
get_template_part('theme/index/catching');
get_template_part('theme/index/testimonial');
get_template_part('theme/index/blog');
get_template_part('theme/index/contacts');

get_footer();
?>