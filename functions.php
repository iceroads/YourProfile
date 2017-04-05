<?php
include_once('includes/bootstrap4-nav-walker.php');
include_once('includes/theme_setup.php');
include_once('includes/customize.php');
include_once('includes/post-types.php');
include_once('includes/theme_sidebars.php');

/**
 * Load translation for theme
 */
function yourprofile_load_theme_textdomain() {
    load_theme_textdomain( 'yourprofile', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'yourprofile_load_theme_textdomain' );