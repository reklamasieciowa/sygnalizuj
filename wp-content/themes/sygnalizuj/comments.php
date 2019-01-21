<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sygnalizuj
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

<div id="comments" class="comments-area mt-4">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h4 class="comments-title h5-responsive mb-4">
			<?php
			$sygnalizuj_comment_count = get_comments_number();
			if ( '1' === $sygnalizuj_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'sygnalizuj' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $sygnalizuj_comment_count, 'comments title', 'sygnalizuj' ) ),
					number_format_i18n( $sygnalizuj_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<div class="card comment-list px-3 pt-3 pb-1 mb-4">
			<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
			) );
			?>
		</div><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sygnalizuj' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$comments_args = array(
        // redefine your own textarea (the comment body)
        'class_submit'      => 'btn btn-sm btn-info',
        'comment_field' => '<div class="form-group mt-4"><label for="comment"><i class="fas fa-pencil-alt prefix mr-2"></i>' . _x( 'Comment', 'noun' ) . '</label><textarea type="text" id="comment" name="comment" class="form-control mb-2" rows="3" aria-required="true"></textarea>
        ',
	);

	comment_form($comments_args);
	?>

</div><!-- #comments -->
