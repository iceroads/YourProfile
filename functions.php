<?php
include_once('includes/bootstrap4-nav-walker.php');
include_once('includes/theme_setup.php');
include_once('includes/customize.php');

function my_theme_load_theme_textdomain() {
    load_theme_textdomain( 'yourprofile', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_load_theme_textdomain' );