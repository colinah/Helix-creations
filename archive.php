<?php
get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content__single primary-content">
	<main id="primary">
		<div class="single-content__wrapper">
			<h2 class="title-tags">
				<?php
					the_archive_title();
				?>
			</h2>
		<div class="scroll-wrapper">
			<?php
        if (have_posts() ) {
            while (have_posts() ) {
               the_post(); 
                ?>
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
                <?php
            } // end while
        } wp_reset_query(); // end if
        ?>
    </div> <!-- scroll-wrapper -->
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
