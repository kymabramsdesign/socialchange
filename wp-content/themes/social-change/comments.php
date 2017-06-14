<?php
/**
 * The template for displaying comments
 */
?>


<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) : ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->
		<?php

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'social-change' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->

<?php
/**

Customized a core file 'class-walker-comment.php' ... only the HTML5_comment section - as follows:

	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
?>
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?>>
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<p class="comment-author">
						<?php
							printf( __( '%s' ),
								sprintf( '<b class="fn">%s</b>', get_comment_author_link( $comment ) )
							);
						?>
					</p><!-- .comment-author -->

				<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
				<?php endif; ?>

				<div class="comment-content">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->

				<div class="date-reply"><span class="comment-metadata">
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php
									echo human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) );
								?>
							</time> |
					</span><!-- .comment-metadata -->

				<?php
				comment_reply_link( array_merge( $args, array(
					'add_below' => 'div-comment',
					'depth'     => $depth,
					'max_depth' => $args['max_depth'],
				) ) );
				?>
				</div>
			</article><!-- .comment-body -->
<?php
	}
}
*/

