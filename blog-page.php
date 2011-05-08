<?php
/**
 * Template Name: Blog Page
 * @package WordPress
 */

get_header(); ?>
<div id="content-wrap">
		<div id="wrap">
			<div id="content" role="main">

			<?php get_template_part( 'loop', 'index' ); ?>
			
			</div><!-- #content -->
		</div><!-- #wrap -->

<?php get_sidebar(); ?>
</div><!-- #content-wrap -->
<?php get_footer(); ?>