<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');

function load_custom_css_js() {

    wp_enqueue_style('tailwind_output', get_template_directory_uri(). '/assets/css/output.css', [], '1.0');

    wp_enqueue_script('custom', get_template_directory_uri(). '/assets/js/scripts.js',  ['jquery'], '1.0', true);

 }
 add_action('wp_enqueue_scripts', 'load_custom_css_js');


