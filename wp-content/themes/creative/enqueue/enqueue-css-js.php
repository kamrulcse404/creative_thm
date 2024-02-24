<?php 

function enqueue_custom_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Enqueue your custom stylesheets
    wp_enqueue_style('style-motiure', get_template_directory_uri() . '/css/style-motiure.css');
    wp_enqueue_style('style-kamrul', get_template_directory_uri() . '/css/style-kamrul.css');
    wp_enqueue_style('style-tanvir', get_template_directory_uri() . '/css/style-tanvir.css');

    // Enqueue responsive stylesheets
    wp_enqueue_style('responsive-tanvir', get_template_directory_uri() . '/css/responsive-tanvir.css');
    wp_enqueue_style('responsive-kamrul', get_template_directory_uri() . '/css/responsive-kamrul.css');
    wp_enqueue_style('responsive-motiur', get_template_directory_uri() . '/css/responsive-motiur.css');

    // Enqueue Remixicon CSS
    wp_enqueue_style('remixicon', 'https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css');
}

// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


function enqueue_custom_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue Bootstrap
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);

    // Enqueue script-kamrul.js
    wp_enqueue_script('script-kamrul', get_template_directory_uri() . '/js/script-kamrul.js', array('jquery'), null, true);

    // Enqueue script-motiure.js
    wp_enqueue_script('script-motiure', get_template_directory_uri() . '/js/script-motiure.js', array('jquery'), null, true);

    // Enqueue srcipt-tanvir.js
    wp_enqueue_script('script-tanvir', get_template_directory_uri() . '/js/srcipt-tanvir.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

