<?php

/**
 * city girl blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package finley
 */

if ( !defined( 'FINLEY_VERSION' ) ) {
    define( 'FINLEY_VERSION', '1.0.0' );
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function finley_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on city girl, use a find and replace
     * to change 'finley' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'finley', get_template_directory() . '/languages' );
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
        'menu-1' => esc_html__( 'Primary', 'finley' ),
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
        'style',
        'script'
    ) );
    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'finley_custom_background_args', array(
        'default-image' => '',
        'default-color' => finley_get_default_background_color(),
    ) ) );
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );
    // Add support for block styles.
    add_theme_support( 'wp-block-styles' );
    add_editor_style( get_stylesheet_uri() );
    add_theme_support( "responsive-embeds" );
}

add_action( 'after_setup_theme', 'finley_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function finley_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'finley_content_width', 640 );
}

add_action( 'after_setup_theme', 'finley_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function finley_widgets_init()
{
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'finley' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'finley' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}

add_action( 'widgets_init', 'finley_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function finley_scripts()
{
    wp_enqueue_style(
        'finley',
        get_stylesheet_uri(),
        array(),
        FINLEY_VERSION
    );
    wp_style_add_data( 'finley', 'rtl', 'replace' );
    wp_enqueue_script(
        'finley-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        array(),
        FINLEY_VERSION,
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script(
        'finley-script',
        get_template_directory_uri() . '/js/scripts.js',
        array( 'jquery' ),
        'FINLEY_VERSION',
        true
    );
}

add_action( 'wp_enqueue_scripts', 'finley_scripts' );
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
/**
 * Breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs/breadcrumbs.php';
function finley_free_pro()
{
    $package = "free";
    return $package;
}

require get_template_directory() . '/inc/blocks/blocks.php';
require get_template_directory() . '/inc/graphthemes-widgets/graphthemes-widgets.php';
require get_template_directory() . '/inc/getting-started/getting-started.php';
require get_template_directory() . '/inc/pagination.php';
add_filter(
    'post_class',
    'finley_remove_default_post_classes',
    10,
    3
);
function finley_remove_default_post_classes( $classes, $class, $post_id )
{
    $show_hide_image = get_theme_mod( 'post_snippet_hide_show_featured_image', finley_get_default_post_snippet_featured_image() );
    if ( $show_hide_image == false || !has_post_thumbnail() ) {
        $classes = array_diff( $classes, array( 'has-post-thumbnail' ) );
    }
    return $classes;
}
