<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package seva-portfolio
 */

get_header(); ?>
<div class="site-content">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-9">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'theme/template-parts/content', get_post_type() );

				endwhile; // End of the loop.
				?>
			</div>
			<div class="col-12 col-sm-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); ?>