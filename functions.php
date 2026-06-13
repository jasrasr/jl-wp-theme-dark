<?php
/**
 * Theme functions for JL Dark Lab.
 */

if (!defined('ABSPATH')) {
    exit;
}

function jl_dark_lab_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 120,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'jl-dark-lab'),
        'footer'  => __('Footer Menu', 'jl-dark-lab'),
    ]);
}
add_action('after_setup_theme', 'jl_dark_lab_setup');

function jl_dark_lab_assets() {
    wp_enqueue_style('jl-dark-lab-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
    wp_enqueue_script('jl-dark-lab-script', get_template_directory_uri() . '/assets/js/theme.js', [], wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'jl_dark_lab_assets');

function jl_dark_lab_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar', 'jl-dark-lab'),
        'id'            => 'sidebar-1',
        'description'   => __('Main sidebar area.', 'jl-dark-lab'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'jl_dark_lab_widgets_init');

function jl_dark_lab_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'jl_dark_lab_excerpt_more');

function jl_dark_lab_fallback_menu() {
    echo '<ul>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'jl-dark-lab') . '</a></li>';
    echo '</ul>';
}


/**
 * Reduce obvious public WordPress fingerprints.
 *
 * This removes common source-level identifiers, but it does not make WordPress
 * invisible. Asset paths, admin URLs, REST endpoints, cookies, and behavior can
 * still reveal the platform to scanners or humans who know what to look for.
 */
function jl_dark_lab_reduce_wordpress_fingerprints() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('template_redirect', 'rest_output_link_header', 11);
}
add_action('init', 'jl_dark_lab_reduce_wordpress_fingerprints');

add_filter('the_generator', '__return_empty_string');

function jl_dark_lab_remove_version_from_assets($src) {
    if (is_string($src) && strpos($src, 'ver=') !== false) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}
add_filter('style_loader_src', 'jl_dark_lab_remove_version_from_assets', 9999);
add_filter('script_loader_src', 'jl_dark_lab_remove_version_from_assets', 9999);
