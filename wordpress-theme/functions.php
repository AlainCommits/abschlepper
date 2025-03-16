<?php
/**
 * Abschleppdienst Theme Functions
 */

// Importiere Firmendaten-Sync
require_once get_template_directory() . '/includes/company-data.php';

// Theme Setup
function abschleppdienst_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    // Register menus
    register_nav_menus(array(
        'primary' => 'Hauptmenü',
        'footer' => 'Footer-Menü'
    ));

    // Register Custom Post Type für Services
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Leistungen',
            'singular_name' => 'Leistung'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-car',
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('after_setup_theme', 'abschleppdienst_setup');

// Enqueue Scripts and Styles
function abschleppdienst_scripts() {
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');
    
    // Theme CSS
    wp_enqueue_style('abschleppdienst-style', get_stylesheet_uri());
    
    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), null, true);
    
    // Theme JS
    wp_enqueue_script('abschleppdienst-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'abschleppdienst_scripts');

// ACF Options Page
if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Einstellungen',
        'menu_title' => 'Theme Einstellungen',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

// Contact Form 7 Bootstrap Styling
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});

function abschleppdienst_cf7_bootstrap() {
    wp_enqueue_style('cf7-bootstrap', get_template_directory_uri() . '/assets/css/cf7-bootstrap.css');
}
add_action('wp_enqueue_scripts', 'abschleppdienst_cf7_bootstrap');
