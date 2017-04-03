<?php

function yourprofile_customize ( $wp_customize ) {
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

    // Promo
    $wp_customize->add_panel( 'promo_panel', array(
        'title' => __('Frontpage Promo','yourpofile'),
        'description' => __('This is a description of this panel','yourprofile'),
        'priority' => 131,
    ) );
    // Section promo 1
    $wp_customize->add_section('promoblock1', array(
        'title' => __('Promo 1', 'yourpofile'),
        'description' => __('Options for Promo 1', 'yourpofile'),
        'priority' => 131,
        'panel' => 'promo_panel'
    ));
    // Section promo 2
    $wp_customize->add_section('promoblock2', array(
        'title' => __('Promo 2', 'yourpofile'),
        'description' => __('Options for Promo 2', 'yourpofile'),
        'priority' => 131,
        'panel' => 'promo_panel'
    ));
    // Section promo 3
    $wp_customize->add_section('promoblock3', array(
        'title' => __('Promo 3', 'yourpofile'),
        'description' => __('Options for Promo 3', 'yourpofile'),
        'priority' => 131,
        'panel' => 'promo_panel'
    ));

    /* Settings Promo 1 */
    $wp_customize->add_setting('promo_img1', array(
        'default'   =>  get_bloginfo('template_directory').'/assets/images/codeblock.png',
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promo_img1', array(
        'label'     =>  __('Promo image','yourprofile'),
        'section'   =>  'promoblock1',
        'settings'  =>  'promo_img1',
        'priority'  =>  1
    )));
    $wp_customize->add_setting('promo_title1', array(
        'default'   =>  __('Clean Code','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_title1', array(
        'label'     =>  __('Headline','yourprofile'),
        'section'   =>  'promoblock1',
        'priority'  =>  2
    ));
    $wp_customize->add_setting('promo_text1', array(
        'default'   =>  __('With more than 7 years of experience of coding I know how to make your website professional','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_text1', array(
        'label'     =>  __('Paragraph','yourprofile'),
        'section'   =>  'promoblock1',
        'priority'  =>  3
    ));
    $wp_customize->add_setting('promo_btn_url1', array(
        'default'   =>  __('http://wordpress.com','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_btn_url1', array(
        'label'     =>  __('Button URL','yourprofile'),
        'section'   =>  'promoblock1',
        'priority'  =>  4
    ));
    $wp_customize->add_setting('promo_btn_text1', array(
        'default'   =>  __('Services','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_btn_text1', array(
        'label'     =>  __('Button text','yourprofile'),
        'section'   =>  'promoblock1',
        'priority'  =>  5
    ));
    /* Settings Promo 2 */
    $wp_customize->add_setting('promo_img2', array(
        'default'   =>  get_bloginfo('template_directory').'/assets/images/wordpress.png',
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promo_img2', array(
        'label'     =>  __('Promo image','yourprofile'),
        'section'   =>  'promoblock2',
        'settings'  =>  'promo_img2',
        'priority'  =>  1
    )));
    $wp_customize->add_setting('promo_title2', array(
        'default'   =>  __('Functions & Plugins','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_title2', array(
        'label'     =>  __('Headline','yourprofile'),
        'section'   =>  'promoblock2',
        'priority'  =>  2
    ));
    $wp_customize->add_setting('promo_text2', array(
        'default'   =>  __('Do you miss a function or have an plugin stopped working for you? Contact me to solve it quick!','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_text2', array(
        'label'     =>  __('Paragraph','yourprofile'),
        'section'   =>  'promoblock2',
        'priority'  =>  3
    ));
    $wp_customize->add_setting('promo_btn_url2', array(
        'default'   =>  __('http://wordpress.com','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_btn_url2', array(
        'label'     =>  __('Button URL','yourprofile'),
        'section'   =>  'promoblock2',
        'priority'  =>  4
    ));
    $wp_customize->add_setting('promo_btn_text2', array(
        'default'   =>  __('Contact me','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_btn_text2', array(
        'label'     =>  __('Button text','yourprofile'),
        'section'   =>  'promoblock2',
        'priority'  =>  5
    ));
    /* Settings Promo 3 */
    $wp_customize->add_setting('promo_img3', array(
        'default'   =>  get_bloginfo('template_directory').'/assets/images/optimize.png',
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'promo_img3', array(
        'label'     =>  __('Promo image','yourprofile'),
        'section'   =>  'promoblock3',
        'settings'  =>  'promo_img3',
        'priority'  =>  1
    )));
    $wp_customize->add_setting('promo_title3', array(
        'default'   =>  __('Optimizing','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_title3', array(
        'label'     =>  __('Headline','yourprofile'),
        'section'   =>  'promoblock3',
        'priority'  =>  2
    ));
    $wp_customize->add_setting('promo_text3', array(
        'default'   =>  __('I know how to optimize your site and make it super fast! Read more about my optimizing','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_text3', array(
        'label'     =>  __('Paragraph','yourprofile'),
        'section'   =>  'promoblock3',
        'priority'  =>  3
    ));
    $wp_customize->add_setting('promo_btn_url3', array(
        'default'   =>  __('http://wordpress.com','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_btn_url3', array(
        'label'     =>  __('Button URL','yourprofile'),
        'section'   =>  'promoblock3',
        'priority'  =>  4
    ));
    $wp_customize->add_setting('promo_btn_text3', array(
        'default'   =>  __('Get a quicker site','yourprofile'),
        'type'      =>  'theme_mod'
    ));
    $wp_customize->add_control('promo_btn_text3', array(
        'label'     =>  __('Button text','yourprofile'),
        'section'   =>  'promoblock3',
        'priority'  =>  5
    ));

}
add_action( 'customize_register', 'yourprofile_customize' );