<?php
/**
 * root-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package root-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'root_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function root_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on root-theme, use a find and replace
		 * to change 'root-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'root-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'root-theme' ),
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
				'root_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'root_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function root_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'root_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'root_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function root_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'root-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'root-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'root_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function root_theme_scripts() {
	/// Header Scripts
	wp_enqueue_style( 'bootstrap-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/bootstrap.min.css", array(), _S_VERSION );

	wp_enqueue_style( 'fonts-style', "https://fonts.googleapis.com/css?family=Nunito:400,700%7CRoboto:300,400,500%7CMuli:300,400", array(), _S_VERSION );

	wp_enqueue_style( 'animate-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/animate.css", array(), _S_VERSION );

	wp_enqueue_style( 'owl-carousel-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/owl.carousel.css", array(), _S_VERSION );

	wp_enqueue_style( 'owl-theme-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/owl.theme.css", array(), _S_VERSION );

	wp_enqueue_style( 'magnific-popup-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/magnific-popup.css", array(), _S_VERSION );

	wp_enqueue_style( 'ionicons-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/ionicons.min.css", array(), _S_VERSION );

	wp_enqueue_style( 'root-theme-style', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/css/style.css", array(), _S_VERSION );

	// Fotter Scripts

	wp_enqueue_script( 'jquery-script', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/js/jquery-2.1.1.js", array(), _S_VERSION, true );

	wp_enqueue_script( 'bootstrap-script', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/js/bootstrap.min.js", array(), _S_VERSION, true );

	wp_enqueue_script( 'jquery-validate-script', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/js/jquery.validate.min.js", array(), _S_VERSION, true );

	wp_enqueue_script( 'plugins-script', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/js/plugins.js", array(), _S_VERSION, true );

	wp_enqueue_script( 'validator-script', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/js/validator.js", array(), _S_VERSION, true );

	wp_enqueue_script( 'custom-script', get_home_url() . "/wp-content/themes/root-theme/root-html/assets/js/custom.js", array(), _S_VERSION, true );
	

}
add_action( 'wp_enqueue_scripts', 'root_theme_scripts' );

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



// Skip to Checkout function

add_filter('woocommerce_add_to_cart_redirect', 'themeprefix_add_to_cart_redirect');

function themeprefix_add_to_cart_redirect() {
 global $woocommerce;
 $checkout_url = wc_get_checkout_url();
 return $checkout_url;
}

//Add New Pay Button Text
add_filter( 'woocommerce_product_single_add_to_cart_text', 'themeprefix_cart_button_text' ); 
add_filter( 'woocommerce_product_add_to_cart_text', 'themeprefix_cart_button_text' ); 
 
function themeprefix_cart_button_text() {
 return __( 'But Now', 'woocommerce' );
}

// Reviews Custom Post Type

function cptui_register_my_cpts_reviews() {

	/**
	 * Post Type: Reviews.
	 */

	$labels = [
		"name" => __( "Reviews", "root-theme" ),
		"singular_name" => __( "Review", "root-theme" ),
		"menu_name" => __( "Reviews", "root-theme" ),
		"all_items" => __( "All Reviews", "root-theme" ),
		"add_new" => __( "Add Review", "root-theme" ),
		"add_new_item" => __( "Add new Review", "root-theme" ),
		"edit_item" => __( "Edit Review", "root-theme" ),
		"new_item" => __( "New Review", "root-theme" ),
		"view_item" => __( "View Review", "root-theme" ),
		"view_items" => __( "View Reviews", "root-theme" ),
		"search_items" => __( "Search Reviews", "root-theme" ),
		"not_found" => __( "No Reviews found", "root-theme" ),
	];

	$args = [
		"label" => __( "Reviews", "root-theme" ),
		"labels" => $labels,
		"description" => "Product Rewiews",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "reviews", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "reviews", $args );
}

add_action( 'init', 'cptui_register_my_cpts_reviews' );


