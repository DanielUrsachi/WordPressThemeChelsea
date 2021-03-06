<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package smart
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title pagenofoundtext"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'smart' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>
						<?php
						esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'smart' );
						?></p>

					<?php

						// Only show the widget if site has multiple categories.
						if ( smart_categorized_blog() ) :
					?>



					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'smart' ), convert_smilies( ':)' ) ) . '</p>';

					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
