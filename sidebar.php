<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Flexopotamus
 * @since Flexopotamus 1.0
 */
?>
<aside id="aside">
	<div id="aside-widget-area-1">
	<div class="aside-widget-area">		
		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

			<li id="meta" class="widget-container">
				<h3 class="widget-title"><?php _e( 'Meta', 'flexopotamus' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>
		</div><!-- #primary .widget-area -->
	</div><!-- .aside-widget-area -->			
	</div><!-- #aside-widget-area-1 -->	
		
		<?php get_sidebar( 'widgets' ); ?>		
	
</aside>