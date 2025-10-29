<?php
/**
 * YesMoreBet Theme Functions
 *
 * @package YesMoreBet
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function yesmorebet_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'yesmorebet'),
        'footer' => __('Footer Menu', 'yesmorebet'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 114,
        'width'       => 174,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'yesmorebet_setup');

/**
 * Enqueue scripts and styles
 */
function yesmorebet_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'yesmorebet-google-fonts',
        'https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'yesmorebet-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Custom CSS from build
    wp_enqueue_style(
        'yesmorebet-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );

    // Main JavaScript
    wp_enqueue_script(
        'yesmorebet-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );

    // Lucide icons (for mobile menu)
    wp_enqueue_script(
        'lucide-icons',
        'https://unpkg.com/lucide@latest',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'yesmorebet_scripts');

/**
 * Register widget areas
 */
function yesmorebet_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer', 'yesmorebet'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'yesmorebet'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'yesmorebet_widgets_init');

/**
 * Custom Nav Walker for styling menu items
 */
class YesMoreBet_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $is_current = in_array('current-menu-item', $classes) || in_array('current_page_item', $classes);

        $class_names = 'relative font-quicksand text-base tracking-tight transition-colors';
        if ($is_current) {
            $class_names .= ' font-semibold bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600';
            $style = ' style="WebkitTextFillColor: transparent;"';
        } else {
            $class_names .= ' text-white hover:text-yellow-400';
            $style = '';
        }

        $output .= '<a href="' . esc_url($item->url) . '" class="' . $class_names . '"' . $style . '>';
        $output .= esc_html($item->title);
        $output .= '</a>';
    }
}

/**
 * Add body classes for current page
 */
function yesmorebet_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'page-home';
    } elseif (is_page('prestations')) {
        $classes[] = 'page-prestations';
    } elseif (is_page('galerie')) {
        $classes[] = 'page-galerie';
    } elseif (is_page('contact')) {
        $classes[] = 'page-contact';
    } elseif (is_page('faq')) {
        $classes[] = 'page-faq';
    }
    return $classes;
}
add_filter('body_class', 'yesmorebet_body_classes');

/**
 * Disable WordPress admin bar for logged-in users
 * (Optional - can be removed if you want the admin bar)
 */
// add_filter('show_admin_bar', '__return_false');
