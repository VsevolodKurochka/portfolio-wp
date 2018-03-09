<?php
	$args = array(
	  'post_type'   => 'projects',
	  'post_status' => 'publish'
 	);

 	$projects = new WP_Query( $args );

 	if($projects->have_posts()) :
?>
<section class="portfolio section-anchor" id="section-portfolio">
	<div class="container">
		<div class="portfolio__header row">
			<div class="col-12 col-sm-10">
				<div class="group group_inline">
					<h3 class="group__title" data-emergence="hidden" data-text="Case Projects">Case<br>
						<span class="color-brand-1">Projects</span>
					</h3>
					<div class="group__content">
						<p>For <span class="highlight highlight_brand-2">4 years of work </span>, I have collected many projects that I can share with you. For each project, I made considerable efforts to ensure that everyone was happy!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio__grid owl-carousel small-carousel" id="portfolio-grid">
		<?php
			$i = 0;
			while($projects->have_posts()) :
				$projects->the_post();
				project('portfolio', $i, 3);
				$i++;
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<div class="portfolio__footer">
		<a class="btn btn_brand-3 btn_lg effect effect_bounce-top" href="<?php echo site_url('/projects'); ?>">
			<span class="fl"></span>
			<span class="sfl"></span>
			<span class="cross"></span>
			<i></i>
			<p>See full portfolio</p>
		</a>
	</div>
</section>
<?php endif; ?>