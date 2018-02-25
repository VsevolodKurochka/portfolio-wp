<?php
	$items = [
		[
			'icon'	=> 'theme/components/icons/service-1',
			'title'	=> 'Creating a turnkey website'
		],
		[
			'icon'	=> 'theme/components/icons/service-2',
			'title'	=> 'Creation of selling landings'
		],
		[
			'icon'	=> 'theme/components/icons/service-3',
			'title'	=> 'Quality and adaptive design'
		],
		[
			'icon'	=> 'theme/components/icons/service-4',
			'title'	=> 'Programming (WordPress, Opencart)'
		],
		[
			'icon'	=> 'theme/components/icons/service-5',
			'title'	=> 'Copywriting'
		],
		[
			'icon'	=> 'theme/components/icons/service-6',
			'title'	=> 'Support for existing projects'
		]
	];
?>
<section class="services" id="section-services">
	<div class="container">
		<div class="group group_inline">
			<h3 class="group__title" data-emergence="hidden" data-text="My Services">My<br><span>Services</span>
			</h3>
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