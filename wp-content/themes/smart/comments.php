<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package smart
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<div class="comentarii fw-container">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<div class="entry-title">


			<h2 class="comments-title ">
				<?php
					printf( // WPCS: replaced
						esc_html( _n( '1 Comment', '%1$s Comments', 'smart', get_comments_number() ) ),
  						number_format_i18n( get_comments_number() ),
						'<span>' . get_the_title() . '</span>'
					);
				?>
			</h2>
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'smart' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'smart' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'smart' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ul',
					'short_ping' => true,
				) );
			?>
		</ul><!-- .comment-list -->
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'smart' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'smart' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'smart' ) ); ?></div>
			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.
	endif; // Check for have_comments().
	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'smart' ); ?></p>
	<?php
	endif;
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	?></div><div class="forms fw-container"><?php
		?><div class="entry-title">
			<h2 class="comments-title ">
				<?php comment_form_title();	///Leave a Replay
				?>
			</h2>
		</div>
		<?php
	 $comment_args = array(
		 'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="row"> <div class="fw-col-sm-4"> <p class="comment-form-author">' .
			//'<label for="author">' . __( 'Your Name' ) . '</label> ' .
			( $req ? '<span class="required">*</span>' : '' ) .
			'<input placeholder="Nume*" id="author" name="author" type="text" value="' .
			esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' .
			'</p></div><!-- #form-section-author .form-section -->',
		'email'  => '<div class="fw-col-sm-4"><p class="comment-form-email">' .
			//'<label for="email">' . __( 'Your Email' ) . '</label> ' .
			( $req ? '<span class="required">*</span>' : '' ) .
			'<input placeholder="Email*" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' .
			'</p></div><!-- #form-section-email .form-section -->',
		 'url' =>
			'<div class="fw-col-sm-4"><p class="comment-form-url"><label for="url">' . '</label>' .
			'<input placeholder="Website"  id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
			'" size="30" /></p></div></div>') ),
		'comment_field' => '<p class="comment-form-comment fw-col-sm-12">' .
			//'<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .
			'<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .
			'</p><!-- #form-section-comment .form-section -->',
		'comment_notes_after' => '',
	);

comment_form($comment_args);
	?>
	</div>
</div><!-- #comments -->
