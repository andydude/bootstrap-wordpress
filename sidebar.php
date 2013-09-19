<?php
/**
 * The sidebar containing the secondary widget area, displays on posts and pages.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package Bootstrap WordPress
 * @since Bootstrap WordPress 1.0
 */

if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div class="sidebar-container" role="complementary">
		<div class="panel panel-default">
			<div class="panel-body">
			    <div class="widget-area">
				    <?php dynamic_sidebar( 'sidebar-2' ); ?>
			    </div><!-- .widget-area -->
		    </div><!-- .panel-body -->
        </div><!-- .panel -->
	</div><!-- .sidebar-container -->
<?php endif; ?>
