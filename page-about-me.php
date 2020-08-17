<?php
get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content__single">
	<main id="primary">
		<div class="single-content__wrapper">
			<h2 class="section-title">Brycen Hale</h2>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="bio-content">
					<div class="bio-portrait">  
						<img class="image" src="<?the_post_thumbnail_url('portrait')?>" >
					</div>
					<div>
						<? the_content(); ?>
					</div>
				</div>
		<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
        </div>
	</main><!-- #main -->
	<div class="single-sidebar__wrapper">
		<?php get_sidebar(); ?>
	</div> <!-- .single-sidebar__wrapper -->

    </div> <!-- primary-content -->
</div> <!-- front-page__wrapper -->

<?php
get_footer();
?>
