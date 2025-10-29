<?php
/**
 * YesMoreBet Theme Functions
 *
 * @package YesMoreBet
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme setup
 */
function yesmorebet_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Menu principal', 'yesmorebet' ),
        'footer'  => esc_html__( 'Menu footer', 'yesmorebet' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 114,
        'width'       => 174,
        'flex-width'  => true,
        'flex-height' => true,
    ) );
}
add_action( 'after_setup_theme', 'yesmorebet_setup' );

/**
 * Enqueue scripts and styles
 */
function yesmorebet_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'yesmorebet-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue custom CSS
    wp_enqueue_style( 'yesmorebet-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0' );

    // Enqueue custom JavaScript
    wp_enqueue_script( 'yesmorebet-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );

    // Enqueue smooth scroll
    wp_enqueue_script( 'yesmorebet-smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'yesmorebet_scripts' );

/**
 * Register widget areas
 */
function yesmorebet_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'yesmorebet' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'yesmorebet' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'yesmorebet_widgets_init' );

/**
 * Add custom body classes
 */
function yesmorebet_body_classes( $classes ) {
    // Add page slug if it doesn't exist
    if ( is_singular() ) {
        global $post;
        if ( isset( $post ) ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }
    }

    return $classes;
}
add_filter( 'body_class', 'yesmorebet_body_classes' );

/**
 * Custom template tags
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * SVG Icons
 */
require get_template_directory() . '/inc/svg-icons.php';
