<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<?php echo do_shortcode( '[uwl_instagram id="3"]' );?>

			<div class="fw-row logoarea2">
				<div class="fw-col-xs-3">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo get_bloginfo( 'name' );?></a>

					<p class="copyright"><?php esc_html_e( 'MADE WITH LOVE IN NYC BY FADE', 'smart' ); ?></p>

					<div class="icons">
						<div>
							<ul>
								<li>
									<a href="#"> <i class="flaticon-facebook-logo"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="flaticon-instagram-symbol"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="flaticon-pinterest-logo"></i> </a>
								</li>
								<li>
									<a href="#"> <i class="flaticon-twitter-logo-silhouette"></i> </a>
								</li>
							</ul>
						</div>
				</div>

			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
