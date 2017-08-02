<?php
/*
Template Name Posts: singleWithSidebar
*/
get_header(); ?>
	<div id="primary" class="content-area ">
		<main id="main" class="site-main" role="main">
			<div class="fw-container">
				<div class="fw-col-sm-8 maincolumns">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
						the_post_navigation();
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile; // End of the loop.
					?>
				</div>
				<div class="fw-col-sm-4"><?php get_sidebar();?></div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
