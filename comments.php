<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package Bootstrap WordPress
 * @since Bootstrap WordPress 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;

require_once("comment-template.php");
?>

<div class="comments-area">
  <?php if ( have_comments() ) : ?>
	<div class="panel panel-default">
        <div class="panel-heading">
		    <h2 class="panel-title comments-title">
				<?php
					printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentythirteen' ),
						number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
				?>
			</h2>
        </div>
        <div class="panel-body">
			<ol class="media-list comment-list">
				<?php
					bswp_list_comments( array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 74,
					) );
				?>
			</ol><!-- .comment-list -->
        	
			<?php
				// Are there comments to navigate through?
				if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
			<nav class="navigation comment-navigation" role="navigation">
				<h1 class="sr-only"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
			</nav><!-- .comment-navigation -->
			<?php endif; // Check for comment navigation ?>
        </div>

	  <?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
	  <?php endif; ?>
    </div>
  <?php endif; // have_comments() ?>

    <div class="panel panel-primary">
	    <?php bswp_comment_form(); ?>
    </div>
</div><!-- .comments-area -->
