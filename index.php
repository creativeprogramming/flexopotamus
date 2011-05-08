<?php
/**
 * The main template file.
 * @package WordPress
 */

get_header(); ?>
<div id="content-wrap">
		<section id="wrap">
			<section id="content" role="main">

			<?php get_template_part( 'loop', 'index' ); ?>
			
			</section><!-- #content -->
		</section><!-- #wrap -->
<?php get_sidebar(); ?>
</div><!-- #content-wrap -->
<?php get_footer(); ?>