<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Bootstrap WordPress
 * @subpackage Twenty_Thirteen
 * @since Bootstrap WordPress 1.0
 */
?>

				</div><!-- .site-main -->
            </div><!-- .col -->
			<footer class="col-lg-4 site-footer" role="contentinfo">
				<?php get_sidebar( 'main' ); ?>
        	
                <div class="panel panel-default">
                    <div class="panel-body site-info">
					    <?php do_action( 'bswp_credits' ); ?>
					    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bswp' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'bswp' ); ?>"><?php printf( __( 'Proudly powered by %s', 'bswp' ), 'WordPress' ); ?></a>
                    </div><!-- .site-info -->
				</div><!-- .panel -->
			</footer><!-- .site-footer -->
        </div><!-- .row -->
	</div><!-- .site-container -->

	<?php wp_footer(); ?>
</body>
</html>
