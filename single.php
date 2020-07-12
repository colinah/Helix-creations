<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Helix_Creations
 */

get_header();
?>
<div class="single-container">
	<main id="primary" class="single-content__wrapper">
		<!-- <div class="single-content__wrapper"> -->
		<?php
		while ( have_posts() ) :
			the_post();
			?>

				<div>
					<h2><?php the_title(); ?></h2>
				</div>
				<div>
					<?php the_field('video_url'); ?>
				</div>
			<?php



			// get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'helix-creations' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'helix-creations' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		<!-- </div> .single-content__wrapper -->

	</main><!-- #main -->

	<div class="single-sidebar__wrapper">
		<?php get_sidebar(); ?>
	</div> <!-- .single-sidebar__wrapper -->
</div> <!-- .single-container -->
<?php
get_footer();
