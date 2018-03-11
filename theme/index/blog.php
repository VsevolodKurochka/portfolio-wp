<?php
	$args = array(
	  'post_type'   		=> 'post',
	  'post_status' 		=> 'publish',
	  'posts_per_page'	=> 4
 	);

 	$blog = new WP_Query( $args );

 	if($blog->have_posts()) :
?>
<section class="blog section-anchor" id="section-blog">
	<div class="container">
		<div class="blog__header">
			<div class="group group_center">
				<h3 class="group__title" data-emergence="hidden" data-text="Blog">Blog</h3>
				<div class="group__content">
					<p>I'll tell you a little secrets that I use when developing sites.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="blog__grid owl-carousel js-small-carousel" id="blog-grid">
		<?php
			$i = 0;
			while($blog->have_posts()) :
				$blog->the_post();
				project('blog', $i, 0);
				$i++;
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<div class="blog__footer">
		<a class="btn btn_brand-3 btn_lg effect effect_bounce-top" href="<?php echo site_url('/blog'); ?>">
			<span class="fl"></span>
			<span class="sfl"></span>
			<span class="cross"></span>
			<i></i>
			<p>More articles</p>
		</a>
	</div>
</section>
<?php endif; ?>