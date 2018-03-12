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
	<div class="container">
		<div class="row">
			<div class="services__column col-12 col-md-6">
				<div class="group services__group">
					<h3 class="group__title" data-emergence="hidden" data-text="Services">Services</h3>
				</div>
				<div class="flex">
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
			<div class="services__column col-12 col-md-6">
				<div class="group">
					<h3 class="group__title" data-emergence="hidden" data-text="Skills">Skills</h3>
				</div>
				<ul class="skills__items">
					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">HTML / HTML5
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:95%;"></span>
						</div>
					</li>
					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">CSS / CSS3
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:90%;"></span>
						</div>
					</li>
					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">Wordpress
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:85%;"></span>
						</div>
					</li>
					
					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">JS (ES6) / JQUERY
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:84%;"></span>
						</div>
					</li>
					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">PHP
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:60%;"></span>
						</div>
					</li>

					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">Adobe Photoshop
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:70%;"></span>
						</div>
					</li>

					<li class="skills__item" data-emergence="hidden">
						<p class="skills__item-header">Adobe Illustrator
						</p>
						<div class="skills__item-line"><span class="skills__item-line-slider" style="width:45%;"></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
		
		<div class="services__grid">
			
		</div>
	</div>
</section>