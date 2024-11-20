<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');

function load_custom_css_js() {
    wp_enqueue_style('tailwind_output', get_template_directory_uri(). '/assets/css/output.css', [], '1.1');
    wp_enqueue_script('custom', get_template_directory_uri(). '/assets/js/scripts.js',  ['jquery'], '1.0', true);

 }
 add_action('wp_enqueue_scripts', 'load_custom_css_js');

 function register_menus() { 
    register_nav_menus(
        array(
            'main-menu'   => 'Main Menu',
            'footer-menu' => 'Footer Menu',
        )
    ); 
}
add_action('init', 'register_menus');



