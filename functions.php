<?php
/**
 * Changes Salon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Changes_Salon
 */

if ( ! function_exists( 'snow_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function snow_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Changes Salon, use a find and replace
	 * to change 'snow-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'snow-theme', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Primary', 'snow-theme' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'snow_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'snow_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function snow_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'snow_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'snow_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function snow_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'snow-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'snow-theme' ),
		'before_widget' => '<section id="%1$s" class="panel panel-default %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="panel-heading space-bottom-10"><h3 class="panel-title widget-title">',
		'after_title'   => '</h3></div>',
	) );
}
add_action( 'widgets_init', 'snow_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function snow_theme_scripts() {
	wp_enqueue_style( 'snow-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'snow-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'snow-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'snow_theme_scripts' );


/**
 * Custom walker to to update main nav output.
 */
class MainNav_Walker extends Walker_Nav_Menu {
	// Adds dropdown-menu class
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class='dropdown-menu'>\n";
	} // start_lvl
	
	function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    } // end_lvl

	// Add dropdowns after first <li>
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if($depth == 0) {
			// Check if item is a parent item.
			if ($args->walker->has_children) {
				// This is a parent item and I will add a caret.
				$output .= sprintf( '<li class="dropdown"><a href="' . $item->url . '" class="dropdown-toggle text-uppercase">' . $item->title . '<span class="caret"></span></a>',
					$item->url,
					( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
					$item->title
				); // $output
			} else {
				// Otherwise it's a single item with no child items.
				$output .= sprintf( '<li><a href="' . $item->url . '" class="text-uppercase">' . $item->title . '</a>',
					$item->url,
					( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
					$item->title
				); // $output
			} // if
		} else {
			$output .= sprintf( '<li><a href="' . $item->url . '">' . $item->title . '</a>',
				$item->url,
				( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
				$item->title
			); // $output
		} // outer if
    } // start_el()
} // MainNav_Walker


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
