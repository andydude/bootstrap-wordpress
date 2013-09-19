<?php
/**
 * The sidebar containing the footer widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package Bootstrap WordPress
 * @since Bootstrap WordPress 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="sidebar-container widget-area" role="complementary">
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	</div><!-- .sidebar-container -->
<?php endif; ?>
