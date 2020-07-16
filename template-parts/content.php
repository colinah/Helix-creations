<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Helix_Creations
 */

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-wrapper">
		<a href="<?php the_permalink(); ?>" >
			<div class="image-wrapper">
				<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
			</div>
			<div class="title-wrapper">
				<h3><?php the_title(); ?><h3>
			</div>
			<div class="excerpt-wrapper"><?php the_excerpt(); ?></div>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->