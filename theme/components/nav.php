<div class="fixed fixed_md-top">
	<div class="nav nav_style" id="navigation">
		<div class="nav__container container">
			<div class="nav__row row">
				<div class="col-4 nav__logo">
					<button class="hamburger hamburger_effect-2" type="button" id="js-nav-hamburger"><span class="hamburger__lines"><span></span><span></span><span></span><span></span></span>
					</button>
				</div>
				<nav class="col-md-8 nav__menu" id="js-navigation-menu">
					<ul>
						<?php if(is_front_page()) : ?>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-portfolio">Portfolio</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-testimonial">Testimonials</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-blog">Blog</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-contacts">Contacts</a></li>
							
						<?php else: ?>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/projects'); ?>">Portfolio</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-testimonial') ?>">Testimonials</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/blog') ?>">Blog</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-contacts') ?>">Contacts</a></li>
							
						<?php endif; ?>
					</ul>
				</nav>
				<div class="col-8 col-md-4 nav__button-wrapper">
					<button class="btn btn_brand-3 effect effect_bounce-bottom nav__button">Let's talk</button>
				</div>
			</div>
		</div>
	</div>
</div>