<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package WordPress
 * @subpackage flexopotamus
 * 
 */
?>

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php do_action( 'flexopotamus_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'flexopotamus' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'flexopotamus' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'flexopotamus' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>