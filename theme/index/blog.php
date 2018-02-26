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
		<div class="blog__header row">
			<div class="col-12 col-sm-10">
				<div class="group group_inline">
					<h3 class="group__title" data-emergence="hidden" data-text="Blog">Blog</h3>
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
		<a class="btn btn_cross btn_cross-brand-1 btn_size-lg" href="#">
			<span class="fl"></span>
			<span class="sfl"></span>
			<span class="cross"></span>
			<i></i>
			<p>More articles</p>
		</a>
	</div>
</section>
<?php endif; ?>