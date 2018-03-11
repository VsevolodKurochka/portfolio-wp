<?php
	$args = array(
	  'post_type'   => 'testimonials',
	  'post_status' => 'publish'
 	);

 	$testimonials = new WP_Query( $args );

 	if($testimonials->have_posts()) :
?>
<section class="testimonial" id="section-testimonial">
	<div class="testimonial__shape testimonial__shape_right shape shape_brand-1 shape_transparent" data-emergence="hidden">
		<div class="shape__inner">
			<div class="shape__inner-shape shape__inner-shape_brand-1">
			</div>
		</div>
	</div>
	<div class="testimonial__container container">
		<div class="testimonial__row row">
			<div class="col-12 col-sm-6 col-md-7">
				<div class="testimonial__group group">
					<h3 class="group__title" data-emergence="hidden" data-text="Customer Testimonials">Customer <span class="color-brand-1">Testimonials</span>
					</h3>
					<div class="group__content">
						<p>Customers are always happy with <span class="highlight highlight_brand-3">me</span></p>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-5">
				<div class="testimonial__content owl-carousel" id="owl-testimonial">
					<?php
						while($testimonials->have_posts()) :
							$testimonials->the_post();
							testimonial_item();
						endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
	<!-- +e.P.letters-bg.letters-bg(data-emergence="hidden") testimonials-->
</section>
<?php endif; ?>