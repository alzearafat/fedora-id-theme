<?php
/**
 * fedoraid functions and definitions
 *
 * @package fedoraid
 */

if ( ! function_exists( 'fedora_id_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fedora_id_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fedoraid, use a find and replace
	 * to change 'fedora-id' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'fedora-id', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'fedora-id' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fedora_id_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // fedora_id_setup
add_action( 'after_setup_theme', 'fedora_id_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fedora_id_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fedora_id_content_width', 640 );
}
add_action( 'after_setup_theme', 'fedora_id_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fedora_id_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fedora-id' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'fedora_id_widgets_init' );

// Automatic Excerpt
function get_the_fedoraid_excerpt(){
	$excerpt = get_the_content();
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$the_str = substr($excerpt, 0, 100);
	return $the_str;
}

// Some Security Hardening
add_filter('login_errors', create_function('$a', "return null;"));

/**
 * Enqueue scripts and styles.
 */
function fedora_id_scripts() {

	// LOAD FEDORAID THEME STYLE
	wp_enqueue_style( 'fedora-id-style', get_stylesheet_uri() );


	// ================ // CSS // ================ //

	// MATERIALIZE CORE
	wp_register_style('materializeCSS', get_template_directory_uri() . '/assets/css/materialize.min.css');    
    wp_enqueue_style('materializeCSS');

    // MATERIALIZE ICON
	wp_register_style('materializeIcon', 'https://fonts.googleapis.com/icon?family=Material+Icons');    
    wp_enqueue_style('materializeIcon');

    // ANIMATE
	wp_register_style('animateCSS', get_template_directory_uri() . '/assets/css/animate.css'); 
    wp_enqueue_style('animateCSS');

    // CUSTOM
	wp_register_style('custom-style', get_template_directory_uri() . '/assets/css/rara.css');    
    wp_enqueue_style('custom-style');

    // GOOGLE FONT
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Raleway');
    wp_enqueue_style( 'googleFonts');

    // GOOGLE FONT 2
    wp_register_style('googleFonts2', 'http://fonts.googleapis.com/css?family=Bree+Serif');
    wp_enqueue_style( 'googleFonts2');


    // ================ // JAVASCRIPT // ================ //

    // JQUERY
    wp_enqueue_script("jquery");

    // MATERIALIZE JS
    wp_enqueue_script( 'materializeJS', get_template_directory_uri() . '/js/materialize.js', array(), '20120207', true );

    // _S NAVIGATION JS
	wp_enqueue_script( 'fedora-id-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	// _S ???
	wp_enqueue_script( 'fedora-id-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fedora_id_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
