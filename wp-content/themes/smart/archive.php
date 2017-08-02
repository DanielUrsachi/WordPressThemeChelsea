<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart
 */

get_header(); ?>


	<div id="primary" class="content-area"> <div class="fw-container"> <div class="fw-col-sm-8">
			<main id="main" class="site-main" role="main">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>

						</header>
						<?php
					endif;
					?>
					<?php
					query_posts('showposts=8');
					while ( have_posts() ) : the_post();

						/*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */

						?><?php

						$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); //MUTIT!

							?><div class="jos numaijos"><div class="fw-col-sm-6"><div class="hoverpost">
									<?php
									$_SESSION['varname'] = '20';
									if($url){
										?><div class="" ><a href="<?php echo esc_url( get_permalink() ); ?>">
											<img src="<?php echo $url ?>" />
										</a></div> <?php
										//the_post_thumbnail();
									}
									else{
										?><a href="<?php echo esc_url( get_permalink() ); ?>">
											<img src="/UnderWordpress0/wp-content/themes/smart/img/question-marks.jpg" />
										</a><?php
									}
									?>
									<div class="categoria">
										<?php the_category();?>
									</div>
									<h2 class="entry-title">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</h2>

									<div class="excerpt">

										<?php the_excerpt();?>
										<div class="readmore"><a href="<?php echo get_permalink(); ?>"> <?php esc_html_e('continue reading','smart');?></a></div>
									</div>
									<?php

									get_template_part( 'template-parts/content', get_post_format() );
									?></div></div></div>
							<?php
						?>
						<?php
					endwhile;
					the_posts_navigation();
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<div class="fw-col-sm-4"><?php get_sidebar();?></div></div></div><?php
get_footer();
