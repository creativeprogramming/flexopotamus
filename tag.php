<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Flexopotamus
 * @since Flexopotamus 1.0
 */

get_header(); ?>
<div id="content-wrap">
		<section id="wrap">
			<section id="content" role="main">

				<h1 class="page-title"><?php
					printf( __( 'Tag Archives: %s', 'flexopotamus' ), '<span>' . single_tag_title( '', false ) . '</span>' );
				?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 get_template_part( 'loop', 'tag' );
?>
			</section><!-- #content -->
		</section><!-- #wrap -->

<?php get_sidebar(); ?>
</div><!-- #content-wrap -->
<?php get_footer(); ?>
