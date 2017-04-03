<?php
/*
*   Frontpage Showcase
*/
function yourprofile_customize_showcase ( $wp_customize ) {
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
add_action( 'customize_register', 'yourprofile_customize_showcase' );