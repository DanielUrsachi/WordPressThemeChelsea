<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :?>

		<div class="fw-container white">
				<div class="fw-col-xs-3">
					<div class="entry-category">
						<?php the_category();
								?>
					</div>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

					</h2>
				</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content fw-container post-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'smart' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'smart' ),
				'after'  => '</div>',
			) );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
			
				<div class="fw-container white">
					<div class="separator"></div>

					<div class="fw-col-sm-4 bara primul">
						<p>
							<?php the_time('F j , Y') ;?>
						</p>
					</div>
					<div class="fw-col-sm-4 bara">
						<p>
							<a href="#" >Share</a>
						</p>
					</div>
					<div class="fw-col-sm-4 bara">
						<p>
							<a href="<?php echo get_comments_link( $post->ID );?>">
								<?php echo comments_number() ;?>
							</a>
						</p>
					</div>
				</div>
			</div>
			<?php
		endif;
		?>
	<footer class="entry-footer"><!-- .entry-footer -->
		<?php smart_entry_footer(); ?>
	</footer>
</article><!-- #post-## -->
