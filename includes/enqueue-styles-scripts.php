<?php if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('wp_enqueue_scripts', 'store_styles');
function store_styles()
{
    wp_enqueue_style('store-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('store-style', 'rtl', 'replace');
}

add_action('wp_enqueue_scripts', 'store_scripts');
function store_scripts()
{
    wp_enqueue_script('store-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
