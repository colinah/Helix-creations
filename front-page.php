<?php 
 get_header();
?>
<div class="front-page__wrapper">
    <div class="primary-content">
    <div id="banner-wrapper" style="
        background-image:url(http://helix-creations.local/wp-content/uploads/2020/08/HelixBanner.jpg);
        background-repeat: no-repeat;
                background-position: center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;">
        <div class="banner-overlay">
            <div class="banner-title__wrapper">
                <h1 class="banner-title">DIY: Ropes Course and Home Construction Projects</h1>
                <div> by <span style="text-decoration:bold;">Brycen Hale</span></div>
            </div>
        </div>
    </div>
    <h2 class="section-title section-title__margin"><a href="/category/featured">Featured Posts</a></h2>
    <div class="scroll-wrapper">
    <?php 
        $args = array (
            'post_type' => 'post',
            'category_name' => 'featured',
            'posts_per_page' => '-1'
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
    <div class="show-more"><a href="/category/featured">More...</a></div>
    

    <h2 class="section-title section-title__margin"><a href="/blog">Most Recent Posts</a></h2>
    <div class="scroll-wrapper">
    <?php 
        $args=array(
            'posts_per_page' => 6, 
            'post_type' => 'post',
            'orderby' => array('date' => 'DESC'),
            'posts_per_page' => '6'
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
    <div class="show-more"><a href="/blog">More...</a></div>
    </div> <!-- primary-content -->
    <!-- <div class="sidebar-wrapper">
        <h1>Side bar here</h1>
    </div> sidebar-wrapper -->
</div> <!-- front-page__wrapper -->



<?php
get_footer();
?>