<?php 

function load_css() {
    wp_register_style('stylecss', get_template_directory_uri().'/style.css', array(), false, 'all');

    wp_enqueue_style('stylecss');
}

function load_js() {
    // Enqueue a custom script
    wp_enqueue_script('my-custom-script', get_template_directory_uri() . '/scripts/responsive-menu.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'load_js');


add_action('wp_enqueue_scripts', 'load_css');