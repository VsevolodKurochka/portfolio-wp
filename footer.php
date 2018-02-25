<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seva-portfolio
 */

?>

	</main><!-- #content -->

	<footer class="footer">
		<div class="footer__container container">
			<div class="footer__row row">
				<div class="col-12 col-sm-8">
					<ul class="footer__menu">
						<li><a href="#section-skills">My skills</a></li>
						<li><a href="#section-portfolio">Portfolio</a></li>
						<li><a href="#section-testimonial">Testimonial</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-4">
					<ul class="social footer__social">
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
					</ul>
				</div>
			</div>
		</div>
		<div class="footer__container container">
			<div class="footer__copyright">
				<p>© 2014-<?php echo date('Y'); ?>. VSEVOLOD KUROCHKA. ALL RIGHTS RESERVED</p>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
