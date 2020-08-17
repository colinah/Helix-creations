<?php
/**
 * Helix Creations functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Helix_Creations
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'helix_creations_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function helix_creations_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Helix Creations, use a find and replace
		 * to change 'helix-creations' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'helix-creations', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		// Image Sizes
		add_image_size('banner', 1900, 600 ,true);
		add_image_size('post-thumbnail-large', 1280, 720 ,true);
		add_image_size('post-thumbnail-medium', 640, 360 ,true);
		add_image_size('portrait',360 ,640 ,true);
		add_image_size('post-thumbnail-small', 320, 180 ,true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'helix-creations' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'helix_creations_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'helix_creations_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function helix_creations_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'helix_creations_content_width', 640 );
}
add_action( 'after_setup_theme', 'helix_creations_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function helix_creations_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'helix-creations' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'helix-creations' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'helix_creations_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function helix_creations_scripts() {
	wp_enqueue_style( 'helix-creations-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'helix-creations-style', 'rtl', 'replace' );

	wp_enqueue_script( 'helix-creations-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'helix_creations_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
This is taken directly from here and modified to fit our needs: https://developer.wordpress.org/themes/basics/including-css-javascript/
*/

function add_that_css_and_js() {
 
	wp_enqueue_style( 'enqueue-that-css', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
   
	wp_enqueue_script( 'enqueue-that-js', get_template_directory_uri() . '/js/min/main.min.js', array ( 'jquery' ), 1.0, true);
  
  }
  add_action( 'wp_enqueue_scripts', 'add_that_css_and_js' );


  // Excerpt length
  add_filter( 'excerpt_length', function($length) {
    return 20;
} );



  //SEARCH BAR
//   function wpbsearchform( $form ) {
 
//     $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
//     <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
//     <input type="text" value="' . get_search_query() . '" name="s" id="s" />
//     <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
//     </div>
//     </form>';
 
//     return $form;
// }
 
// add_shortcode('wpbsearch', 'wpbsearchform');