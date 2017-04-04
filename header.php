<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title><?php bloginfo('name'); ?></title>
    <?php
    wp_head();
    ?>
    <style>
        .home .first-section.header {
            background-image: url(<?php echo get_theme_mod('showcase_img', get_bloginfo('template_url').'/assets/images/header_bg.jpg'); ?>);
        }
    </style>
</head>
<body <?php body_class(); ?> >

<nav class="navbar navbar-toggleable-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <hr class="hidden-lg-up">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'headmenu',
            'container'      => false,
            'menu_class'     => 'nav navbar-nav',
            'fallback_cb'    => '__return_false',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'          => 2,
            'walker'         => new bootstrap_4_walker_nav_menu()
        ) );
        ?>
        <?php get_template_part('navbar-search'); ?>
    </div>
</nav>
<div id="wrap">