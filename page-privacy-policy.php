<?php
get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content__single primary-content">
	<main id="primary">
		<div class="single-content__wrapper">
			<h2 class="title-tags">Privacy Policy</h2>
			<div class="privacy-content">
				<?php 
				while(have_posts()){
					the_post();
					the_content();
				}
				?>
			</div>
		</div> <!-- .single-content__wrapper -->
	</main><!-- #main -->

	<div class="single-sidebar__wrapper">
		<?php get_sidebar(); ?>
	</div> <!-- .single-sidebar__wrapper -->

    </div> <!-- primary-content -->
</div> <!-- front-page__wrapper -->

<?php
get_footer();
?>

