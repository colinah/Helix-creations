<?php
get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content__single primary-content">
	<main id="primary">
		<div class="single-content__wrapper">
			<h2 class="title-tags">All Posts</h2>
		<div class="scroll-wrapper">
    <?php 
        $args = array (
            'post_type' => 'post',
            'category_name' => 'featured',
            'posts_per_page' => '6'
        );
        $featured_query = new WP_Query( $args );
        if ( $featured_query->have_posts() ) {
            while ( $featured_query->have_posts() ) {
                $featured_query->the_post(); 
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
