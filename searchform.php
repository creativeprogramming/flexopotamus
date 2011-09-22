<?php
/**
 * The template for displaying search forms in flexopotamus
 *
 * @package WordPress
 * @subpackage flexopotamus
 * @since flexopotamus 1.0
 */
?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label for="s" class="assistive-text"><?php _e( 'Search', 'flexopotamus' ); ?></label>
		<input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'flexopotamus' ); ?>" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'flexopotamus' ); ?>" />
	</form>
