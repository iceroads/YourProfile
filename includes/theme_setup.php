<?php
/**
* Scripts and CSS 
**/
function yourprofile_scripts_and_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/site.css', array(), '1.0.0' );

    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/lib/jquery-3.2.0.min.js', array( ), '3.2.0', true);
    wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/lib/tether.min.js', array('jquery'), '1.3.3', true);
    wp_enqueue_script( 'bootstrap_4.0.0_alpha_js', get_template_directory_uri() . '/assets/js/lib/bootstrap.min.js', array('jquery','tether'), '4.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'yourprofile_scripts_and_styles' );


/**
* Theme Setup
**/
function yourprofile_theme_setup() {
    /* Menu registration */
    register_nav_menu('headmenu', __('Primary Header Menu', 'yourprofile'));
}
add_action( 'after_setup_theme', 'yourprofile_theme_setup' );

