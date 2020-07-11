<?php 
 get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content">
    <h2>Featured Posts</h2>
    <div class="scroll-wrapper">
    <?php 
        $args = array (
            'post_type' => 'post',
            'category_name' => 'featured'
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
    <div class="show-more"><a href="#">More...</a></div>
    

    <h2>Most Recent Posts</h2>
    <div class="scroll-wrapper">
    <?php 
        $args=array(
            'posts_per_page' => 6, 
            'post_type' => 'post',
            'orderby' => array('date' => 'DESC')
        );
        $recent_query = new WP_Query( $args );
        if ( $recent_query->have_posts() ) {
            while ( $recent_query->have_posts() ) {
                $recent_query->the_post(); 
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
    </div> <!-- primary-content -->
    <!-- <div class="sidebar-wrapper">
        <h1>Side bar here</h1>
    </div> sidebar-wrapper -->
</div> <!-- front-page__wrapper -->
<div class="show-more"><a href="#">More...</a></div>

<?php
get_footer();
?>