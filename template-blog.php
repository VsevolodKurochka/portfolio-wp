<?php
/*
Template Name: Blog
*/

get_header();
$blog_args = array(
	'post_type'	=> 'post',
	'post_status'	=> 'publish',
	'posts_per_page'	=> '-1'
);

$blog_query = new WP_QUERY($blog_args);
if($blog_query->have_posts()) :


	echo '<div class="archive__grid">';
	while( $blog_query->have_posts() ) : $blog_query->the_post();
    project('blog');
	endwhile;
	echo '</div>';
endif;
get_footer();
?>