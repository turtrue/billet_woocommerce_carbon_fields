<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('after_setup_theme', 'store_setup');
function store_setup()
{
    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'store_content_width', 0);
function store_content_width()
{
    $GLOBALS['content_width'] = apply_filters('store_content_width', 640);
}

add_action('after_setup_theme', 'store_woocommerce_setup');
function store_woocommerce_setup()
{
    add_theme_support(
        'woocommerce',
        array(
            'thumbnail_image_width' => 150,
            'single_image_width'    => 300,
            'product_grid'          => array(
                'default_rows'    => 3,
                'min_rows'        => 1,
                'default_columns' => 4,
                'min_columns'     => 1,
                'max_columns'     => 6,
            ),
        )
    );
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
