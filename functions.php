<?php
/**
 * seva-portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seva-portfolio
 */

if ( ! function_exists( 'seva_portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function seva_portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on seva-portfolio, use a find and replace
		 * to change 'seva-portfolio' to the name of your theme in all the template files.
		 */
		//load_theme_textdomain( 'seva-portfolio', get_template_directory() . '/theme/languages' );

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
		// register_nav_menus( array(
		// 	'menu-1' => esc_html__( 'Primary', 'seva-portfolio' ),
		// ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'seva_portfolio_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'seva_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
// function seva_portfolio_content_width() {
// 	$GLOBALS['content_width'] = apply_filters( 'seva_portfolio_content_width', 640 );
// }
// add_action( 'after_setup_theme', 'seva_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function seva_portfolio_widgets_init() {
// 	register_sidebar( array(
// 		'name'          => esc_html__( 'Sidebar', 'seva-portfolio' ),
// 		'id'            => 'sidebar-1',
// 		'description'   => esc_html__( 'Add widgets here.', 'seva-portfolio' ),
// 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 		'after_widget'  => '</section>',
// 		'before_title'  => '<h2 class="widget-title">',
// 		'after_title'   => '</h2>',
// 	) );
// }
// add_action( 'widgets_init', 'seva_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function seva_portfolio_scripts() {
	wp_enqueue_style( 'seva-portfolio-style', get_stylesheet_uri() );

	wp_enqueue_style( 'seva-portfolio-fonts', 'https://fonts.googleapis.com/css?family=Lora|Oswald:200,700|Roboto:100,400,700&amp;amp;subset=cyrillic');

	wp_enqueue_style( 'seva-portfolio-fontawesome', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css');

	wp_enqueue_style( 'seva-portfolio-css', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script( 'seva-portfolio-libs', get_template_directory_uri() . '/assets/js/libs.min.js', array(), '20151215', true );

	wp_enqueue_script( 'seva-portfolio-jquery-scripts', get_template_directory_uri() . '/assets/js/jquery.main.js', array(), '20151215', true );

	wp_enqueue_script( 'seva-portfolio-vanilla-scripts', get_template_directory_uri() . '/assets/js/vanilla.main.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'seva_portfolio_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/theme/inc/template-tags.php';

/**
 * Custom functions for this theme.
 */
require get_template_directory() . '/theme/inc/functions.php';