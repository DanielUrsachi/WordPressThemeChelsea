<?php
/**
 * smart functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package smart
 */

//add_filter( 'image_send_to_editor', 'wp_image_wrap_init', 10, 8 );


if ( ! function_exists( 'smart_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function smart_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on smart, use a find and replace
	 * to change 'smart' to the name of your theme in all the template files.
	 */

	///

	load_theme_textdomain( 'smart', get_template_directory() . '/languages' );

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

	add_theme_support( 'post-formats', array(
		'standard',
		'image',
		'gallery',
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'smart' ),
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
	add_theme_support( 'custom-background', apply_filters( 'smart_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'smart_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function smart_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'smart_content_width', 640 );
}
add_action( 'after_setup_theme', 'smart_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function smart_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'smart' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'smart' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'smart_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function smart_scripts() {
	wp_enqueue_style( 'smart-style', get_stylesheet_uri() );

	//introducerea CSS-ului meu
	wp_enqueue_style( 'smart-main', get_template_directory_uri() . '/css/main.css' );

	//introducerea CSS-ului slider
	wp_enqueue_style( 'smart-sheet', get_template_directory_uri() . '/css/style2slider.css' );

	//indroducerea CSS-ului pentru flaticons
	wp_enqueue_style( 'smart-sheet', get_template_directory_uri() . '/icons/font/flaticon.css' );

	//introducerea CSS-ului slider	
	wp_enqueue_style( 'smart-fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

	wp_enqueue_script( 'smart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//script for slider
	wp_enqueue_script( 'smart-slides', get_template_directory_uri() . '/js/jquery.slides.min.js', array(), '20151215', true );

	//jquery for slider
	wp_enqueue_script( 'smart-jquery','http://code.jquery.com/jquery-1.9.1.min.js' );

	wp_enqueue_script( 'smart-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'smart_scripts' );

//scris de mine pentru schimbarea ordinei forms-urilor de la comentarii
function wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


//functia de modificare a stringului dupa excerpt
function smart_excerpt_more( $more ) {
	return ' ...';
}
add_filter( 'excerpt_more', 'smart_excerpt_more' );


//functia de modificare a lungimii sirului excerpt
function smart_custom_excerpt_length(  $lenght ) {
	return intval($_SESSION['varname']);
}
add_filter( 'excerpt_length', 'smart_custom_excerpt_length', 999 );





// remove default paragraph from images
function smart_img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'smart_img_unautop', 30 );

///


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

/**
 * Load TGM compatibility file.
 */
require get_template_directory() . '/tgm/smart.php';


