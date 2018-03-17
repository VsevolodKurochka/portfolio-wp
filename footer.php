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
					<div class="footer__menu">
						<?php get_template_part('theme/components/menu'); ?>
					</div>
				</div>
				<div class="col-12 col-sm-4">
					<?php social('footer__social'); ?>
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
