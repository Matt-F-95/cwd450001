<?php
/**
 * honeycakes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package honeycakes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'honey_cakes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function honey_cakes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on honeycakes, use a find and replace
		 * to change 'honey-cakes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'honey-cakes', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'honey-cakes' ),
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
				'honey_cakes_custom_background_args',
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
add_action( 'after_setup_theme', 'honey_cakes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function honey_cakes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'honey_cakes_content_width', 640 );
}
add_action( 'after_setup_theme', 'honey_cakes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

 //example of conditional tag
// if ( is_user_logged_in() ):
//     echo 'Welcome, registered user!';
// else:
//     echo 'Welcome, visitor!';
// endif;	




function honey_cakes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'honey-cakes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'honey-cakes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'honey_cakes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function honey_cakes_scripts() {
	wp_enqueue_style( 'honey-cakes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'honey-cakes-style', 'rtl', 'replace' );
	wp_enqueue_style( 'tailwind-style', get_template_directory_uri() . '/assets/css/tailwind.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom.css' );
	wp_enqueue_script( 'honey-cakes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'honey_cakes_scripts' );

function honeycakes_widgets_init() {
	
	register_sidebar( array(
		'name' => 'Footer Widget Area 1',
		'id' => 'footer_widget_area',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title">',
		'after_title' => '</h3>',
	));

}

add_action( 'widgets_init', 'honeycakes_widgets_init' );

function honeycakes_widgets_footer_init() {
	
	register_sidebar( array(
		'name' => 'Footer Widget Area 2',
		'id' => 'footer_widget_area_2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title-2">',
		'after_title' => '</h3>',
	));

}

add_action( 'widgets_init', 'honeycakes_widgets_footer_init' );

function honeycakes_widgets_footer_product_init() {
	
	register_sidebar( array(
		'name' => 'Footer Widget Area 3',
		'id' => 'footer_widget_area_3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="footer-widget-title-3">',
		'after_title' => '</h3>',
	));

}

add_action( 'widgets_init', 'honeycakes_widgets_footer_product_init' );

function honeycakes_widgets_top_bar_init() {
	
	register_sidebar( array(
		'name' => 'Top Bar Widget Area 1',
		'id' => 'top_bar_widget_area',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	));

}

add_action( 'widgets_init', 'honeycakes_widgets_top_bar_init' );

function honeycakes_widgets_top_bar_social_init() {
	
	register_sidebar( array(
		'name' => 'Top Bar Widget Area 2',
		'id' => 'top_bar_widget_area_2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
	));

}

add_action( 'widgets_init', 'honeycakes_widgets_top_bar_social_init' );


function honeycakes_enqueue_block_assets() {
	wp_enqueue_style(
	'blocks-style',
	get_template_directory_uri() . '/assets/css/blocks.css'
);
}

add_action( 'enqueue_block_assets', 'honeycakes_enqueue_block_assets' );


function honeycakes_register_menu() {
	register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action('init', ('honeycakes_register_menu'));

function example_add_post_class_to_single_post( $classes ) {

	if ( is_single() ) {
		array_push( $classes, 'single-post' );
	} // end if

	return $classes;

}
add_filter( 'post_class', 'example_add_post_class_to_single_post' );

// increases wp excerpt length
function wpdocs_custom_excerpt_length( $length ) {
	return 75;
 }
 add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
  

// adds a subscribe to newsletter optional checkbox
add_action( 'woocommerce_after_order_notes', 'honeycakes_subscribe_checkout' );

function honeycakes_subscribe_checkout( $checkout ) {
woocommerce_form_field( 'subscriber', array(
'type' => 'checkbox',
//'required' => true,
'class' => array('custom-field form-row-wide'),
'label' => ' Subscribe to our newsletter?'
), $checkout->get_value( 'subscriber' ) );
}

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
 * Custom post types.
 */
require get_template_directory() . '/inc/post-types.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
