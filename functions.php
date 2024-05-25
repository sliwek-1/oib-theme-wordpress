<?php 

function load_css() {
    wp_register_style('stylecss', get_template_directory_uri().'/style.css', array(), false, 'all');

    wp_enqueue_style('stylecss');
}

add_action('wp_enqueue_scripts', 'load_css');