<?php
/**
 * The sidebar containing the footer widget area.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div class="sidebar-container" role="complementary">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="widget-area">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
			    </div><!-- .widget-area -->
		    </div><!-- .panel-body -->
        </div><!-- .panel -->
	</div><!-- .sidebar-container -->
<?php endif; ?>
