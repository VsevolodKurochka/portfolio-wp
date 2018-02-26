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

function project($i) {
	$size = ($i == 3) ? 'large' : 'small';
?>
<div class="case">
	<div class="case__inner">
		<a class="case__bg" href="<?php the_field('link'); ?>" target="_blank"></a>
		<div class="case__header">
			<?php if(has_post_thumbnail()) : ?>
				<?php

				$thumbnail_name = 'project-' . $size;

				the_post_thumbnail($thumbnail_name, array(
					'class'	=> 'case__header-image'
				)); 

				?>
			<?php endif; ?>
		</div>
		<div class="case__content">
			<div class="case__body">
				<p class="case__subtitle"><?php the_field('type'); ?></p>
				<p class="case__title"><?php the_title(); ?></p>
				<div class="case__skills">
					<?php
						$tags = get_tags();
				    foreach($tags as $tag) { ?>
						<span class="case__skills-item"><?php echo $tag->name; ?></span>
				  <?php
				   	}
					?>
				</div>
				<div class="case__body-content">
					<p>Forget about reviewing hundreds of questionn aires every day, wasting money on meaningless correspondence!</p>
				</div>
			</div>
			<div class="case__footer"><span class="case__link btn btn_plus"><i></i>
				<p>more</p></span>
			</div>
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