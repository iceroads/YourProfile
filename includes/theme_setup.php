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

function mytheme_customize_register( $wp_customize ) {
    //Header Showcase section
    $wp_customize->add_section('showcase', array(
        'title' => __('Frontpage Showcase', 'yourpofile'),
        'description' => __('Options for showcase', 'yourpofile'),
        'priority' => 130
    ));

    $wp_customize->add_setting('showcase_img', array(
        'default'   =>  get_bloginfo('template_directory').'/assets/images/header_bg.jpg',
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img', array(
        'label'     =>  __('Head showcase image','yourprofile'),
        'section'   =>  'showcase',
        'settings'  =>  'showcase_img',
        'priority'  =>  1
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default'   =>  __('Developer with an eye for Wordpress sites','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
        'label'     =>  __('Head title text','yourprofile'),
        'section'   =>  'showcase',
        'priority'  =>  2
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default'   =>  __('Do you seek an professional developer that can take care of your Wordpress site?','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
        'label'     =>  __('Under header title','yourprofile'),
        'section'   =>  'showcase',
        'priority'  =>  3
    ));

    $wp_customize->add_setting('btn_url', array(
        'default'   =>  __('http://wordpress.com','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
        'label'     =>  __('Button URL','yourprofile'),
        'section'   =>  'showcase',
        'priority'  =>  4
    ));

    $wp_customize->add_setting('btn_text', array(
        'default'   =>  __('View my services','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
        'label'     =>  __('Button text','yourprofile'),
        'section'   =>  'showcase',
        'priority'  =>  5
    ));
}
add_action( 'customize_register', 'mytheme_customize_register' );