<?php
function social($class_name){
	$return = '<ul class="social '.$class_name.' ">
					<li class="social__item">
						<a class="social__item-link" href="tel: +38 (063) 505 62 63">
							<i class="social__item-link-icon fas fa-mobile" aria-hidden="true"></i>
						</a>
					</li>
					<li class="social__item">
						<a class="social__item-link" href="mailto: seva.kurochka@gmail.com">
							<i class="social__item-link-icon fas fa-envelope" aria-hidden="true"></i>
						</a>
					</li>
					<li class="social__item">
						<a class="social__item-link" href="skype: mozilla20103">
							<i class="social__item-link-icon fab fa-skype" aria-hidden="true"></i>
						</a>
					</li>
					<li class="social__item">
						<a class="social__item-link" href="https://www.facebook.com/vsevolod.kurochka.1">
							<i class="social__item-link-icon fab fa-facebook" aria-hidden="true"></i>
						</a>
					</li>
					<li class="social__item">
						<a class="social__item-link" href="https://github.com/VsevolodKurochka">
							<i class="social__item-link-icon fab fa-github" aria-hidden="true"></i>
						</a>
					</li>
				</ul>';

	echo $return;
}

function project($type = null, $i = null, $value = null) {

	// Define variables
	if( $i != null && $value != null ){
		$size = ($i == $value) ? 'large' : 'small';
		$thumbnail_name = 'project-' . $size;
	}else{
		$thumbnail_name = 'project-default';
	}
	
	//$tags = get_tags();

	$link = ($type == 'blog') ? get_permalink() : get_field('link');
	//$btn_plus_text = ($type == 'blog') ? 'more' : 'visit';

?>
<div class="case">
	<div class="case__inner">
		<a class="case__bg" href="<?php echo $link; ?>" target="_blank"></a>
		<div class="case__header">
			<?php 
				if(has_post_thumbnail()) :
					the_post_thumbnail($thumbnail_name, array(
						'class'	=> 'case__header-image'
					));
				endif;
			?>
		</div>
		<div class="case__content">
			<div class="case__body">
				<?php if(get_field('type')) : ?>
					<p class="case__subtitle"><?php the_field('type'); ?></p>
				<?php endif; ?>
				<p class="case__title"><?php the_title(); ?></p>
				<div class="case__body-content">
					<?php has_excerpt() ? the_excerpt(): the_content(); ?>
				</div>
			</div>
			<!-- <div class="case__footer">
				<span class="case__link btn btn_plus"><i></i><p><?php //echo $btn_plus_text; ?></p></span>
			</div> -->
		</div>
	</div>
</div>
<?php
}
?>


<?php function testimonial_item(){ ?>
	<div class="testimonial__item">

		<?php if(has_post_thumbnail()) : ?>		
		<div class="testimonial__item-header">
			<div class="testimonial__item-image-wrapper">
				<?php
					the_post_thumbnail('testimonial-small', array(
						'class'	=> 'testimonial__item-image'
					)); 
				?>
			</div>
		</div>
		<?php endif; ?>
		
		<div class="testimonial__item-body">
			<div class="testimonial__item-body-content">
				<p><?php the_content(); ?></p>
			</div>
		</div>
		<div class="testimonial__item-footer">
			<p class="testimonial__item-title"><?php the_title(); ?></p>
			<p class="testimonial__item-subtitle"><?php the_field('position'); ?></p>
		</div>
	</div>
<?php } ?>

<?php function custom_header(){ ?>
	<section class="intro" id="section-intro">
		<div class="intro__container container">
			<div class="intro__row row">
				<div class="intro__column col-12 col-sm-6 col-lg-5">
					<h1 class="intro__title intro__title_small" data-emergence="hidden">
						<?php
							if( is_post_type_archive() ) :
								post_type_archive_title();

							elseif( is_search() ) :
								if( have_posts() ) :
									echo get_search_query();
								else:
									esc_html_e( 'Мы ничего не нашли', 'damir' );
								endif;

							elseif(is_category()) :
								single_cat_title();

							elseif( is_404() ) :
								esc_html_e( 'К сожалению! Эта страница не найдена.', 'damir' );

							elseif( is_tax() ) :
								single_term_title();

							else:
								the_title();

							endif;
						?>
					</h1>
			</div>
		</div>
	</section>
<?php } ?>