<?php if(is_front_page()) : ?>
	<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url(); ?>">Home</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-portfolio">Portfolio</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-testimonial">Testimonials</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-blog">Blog</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" data-scroll="data-scroll" href="#section-contacts">Contacts</a></li>
	
<?php else: ?>
	<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url(); ?>">Home</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/projects'); ?>">Portfolio</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-testimonial') ?>">Testimonials</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/blog') ?>">Blog</a></li>
	<li class="nav__menu-item"><a class="nav__menu-item-link" href="<?php echo site_url('/#section-contacts') ?>">Contacts</a></li>
	
<?php endif; ?>