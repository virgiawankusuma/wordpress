<?php
 
function themes()
{
  
    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() .'/assets/css/bootstrap.min.css'
    );
 
    wp_enqueue_style('style', get_stylesheet_uri());
    
    wp_enqueue_script(
        'jquery-cdn',
        get_template_directory_uri() . '/assets/js/jquery.min.js',
        array(), '', true
    );
 
    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array(), '', true
    );
}
 
add_action('wp_enqueue_scripts', 'themes');