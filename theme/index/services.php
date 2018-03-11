<?php
	$items = [
		[
			'icon'	=> 'theme/components/icons/service-1',
			'title'	=> 'Turnkey website'
		],
		[
			'icon'	=> 'theme/components/icons/service-2',
			'title'	=> 'Selling landing pages'
		],
		[
			'icon'	=> 'theme/components/icons/service-3',
			'title'	=> 'Quality and adaptive design'
		],
		[
			'icon'	=> 'theme/components/icons/service-4',
			'title'	=> 'Programming'
		],
		[
			'icon'	=> 'theme/components/icons/service-5',
			'title'	=> 'Copywriting'
		],
		[
			'icon'	=> 'theme/components/icons/service-6',
			'title'	=> 'Technical Support'
		]
	];
?>
<section class="services" id="section-services">
	<div class="container services__container">
		<div class="group group_center services__group">
			<h3 class="group__title" data-emergence="hidden" data-text="My Services">My <span>Services</span></h3>
		</div>
		<div class="services__grid">
			<?php foreach ($items as $item) : ?>
				<div class="services__item" data-emergence="hidden">
					<div class="services__item-header">
						<?php get_template_part($item['icon']); ?>
					</div>
					<p class="services__item-title"><?php echo $item['title']; ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>