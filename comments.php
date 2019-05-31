<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bootatrap_template
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


	<?php
	
	comment_form();

	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title mb-5">
			<?php
			$bootatrap_template_comment_count = get_comments_number();
			if ( '1' === $bootatrap_template_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'bootatrap_template' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $bootatrap_template_comment_count, 'comments title', 'bootatrap_template' ) ),
					number_format_i18n( $bootatrap_template_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?> 
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<div class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'div',
				'short_ping' => true,
				'callback'   => 'mytheme_comment'
			) );
			?>
		</div><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bootatrap_template' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>

</div><!-- #comments -->
