<?php 

function load_stylesheets() {
    wp_register_style('bootstrap-stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap-stylesheet');

    wp_register_style('custom-stylesheet', get_template_directory_uri() . './style.css', array(), false, 'all');
    wp_enqueue_style('custom-stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',  get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function load_js(){
    wp_register_script('custom-js',  get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('custom-js');
}

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme')
    )
);

add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);