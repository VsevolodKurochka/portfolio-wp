<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seva-portfolio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php seva_portfolio_post_thumbnail(); ?>

	<header class="post-header">
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="post-meta">
			<?php
				seva_portfolio_posted_on();
			?>
		</div><!-- .post-meta -->
		<?php
		endif; ?>
	</header><!-- .post-header -->

	<div class="post-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'seva-portfolio' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seva-portfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->

	<footer class="post-footer">
		<?php seva_portfolio_entry_footer(); ?>
	</footer><!-- .post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
