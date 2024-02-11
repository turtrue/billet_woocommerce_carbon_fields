<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('wp_enqueue_scripts', 'store_styles');
function store_styles()
{
    wp_enqueue_style('store-style', get_stylesheet_uri(), array('bootstrap-reboot', 'bootstrap-grid'), _S_VERSION);
    wp_enqueue_style('store-media-style', get_template_directory_uri() . '/assets/css/media.css', array('bootstrap-reboot', 'bootstrap-grid'));

    wp_enqueue_style('bootstrap-reboot', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap-reboot.min.css');
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap-grid.min.css');
}

add_action('wp_enqueue_scripts', 'store_scripts');
function store_scripts()
{
    wp_enqueue_script('store-navigation', get_template_directory_uri() . '/assets/js/common.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
