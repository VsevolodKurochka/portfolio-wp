<div class="fixed fixed_md-top">
	<div class="nav nav_style" id="navigation">
		<div class="nav__container container">
			<div class="nav__row flex flex-y-center">
				<div class="nav__logo">
					<button class="hamburger hamburger_effect-2" type="button" id="js-nav-hamburger"><span class="hamburger__lines"><span></span><span></span><span></span><span></span></span>
					</button>
					<div class="nav__logo-content">
						<a class="nav__logo-content-text" href="<?php echo site_url(); ?>" target="_blank">Kurochka</a>
					</div>
				</div>
				<nav class="nav__menu" id="js-navigation-menu">
					<ul>
						<?php if(is_front_page()) : ?>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-skills">My skills</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-portfolio">Portfolio</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-testimonial">Testimonial</a></li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-contacts">Contacts</a></li>
						<?php else: ?>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-skills') ?>">My skills</a>
							</li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/projects'); ?>">Portfolio</a>
							</li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-testimonial') ?>">Testimonial</a>
							</li>
							<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-contacts') ?>">Contacts</a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>