<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart
 */

?>
<meta name="viewport" content="width=device-width">
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
	</header>
	<div class="entry-content fw-container post-content">
		<?php
		if ( get_post_gallery() ) :
            $gallery = get_post_gallery( get_the_ID(), false );
        ?>
        <div class="container">
        <div id="slides">
        <?php
            /* Loop through all the image and output them one by one */
            foreach( $gallery['src'] as $src ) : ?>
   					<img src="<?php echo $src; ?>" class="my-custom-class" alt="Gallery image" />
                <?php
            endforeach;
           ?> 
           <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
     	   <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
		</div>
		</div>
           <?php
        endif;
        ?>
  <!-- End SlidesJS Required -->
  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false,
        start: 1,
        play: {
          auto: true
        }
      });
    });
  </script>
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
		?>
		<?php
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
