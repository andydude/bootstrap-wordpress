<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Bootstrap WordPress
 * @since Bootstrap WordPress 1.0
 */
?>

				</div><!-- .site-main -->
            </div><!-- .col -->
			<aside class="col-xs-2 site-sidebar" role="contentinfo">
				<?php get_sidebar( 'main' ); ?>
			</aside><!-- .site-sidebar -->
        </div><!-- .row -->
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body text-muted site-info">
					    <?php do_action( 'twentythirteen_credits' ); ?>
                        <span>Proudly powered by <a class="bswp-brand" href="http://getbootstrap.com/">Bootstrap</a>
					    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( '%s', 'twentythirteen' ), 'WordPress' ); ?></a></span>
                    </div><!-- .site-info -->
				</div><!-- .panel -->
            </div><!-- .col -->
        </div><!-- .row -->
	</div><!-- .site-container -->

	<?php wp_footer(); ?>
</body>
</html>
