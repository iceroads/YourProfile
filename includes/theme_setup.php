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
    wp_enqueue_script( 'yourprofilescript', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery','tether','bootstrap_4.0.0_alpha_js' ), '1.0.0', true );

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

/**
* Thumbnails
**/
add_theme_support( 'post-thumbnails' );
add_image_size( 'testimonial-thumbnail', 60, 60, ['center','center']);
add_image_size( 'latest-article-thumbnail', 250, 140, ['center','center']);
add_image_size( 'article-thumbnail', 324, 324);
add_image_size( 'service-thumbnail', 400, 250);


/**
 * Front page query to take away portfolio category * This need to be fix to name instead of id number.
 */
function yourprofile_custom_query( $query ) {
if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 3 );
        $query->set( 'cat', -9 );
    }
}
add_action( 'pre_get_posts', 'yourprofile_custom_query' );

/**
 * add my custom post types to body class
 */
function yourprofile_add_body_classes( $classes ) {
    global $post;
    if( @$post->post_type === 'services') {
        $classes[] = 'service-page';
    }
    return $classes;
}
add_filter('body_class', 'yourprofile_add_body_classes');

/**
 * Excerpt changes
 */
function yourprofile_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'yourprofile_custom_excerpt_length' );

function yourprofile_excerpt_more( $more ) {
    return sprintf( '<p class="read-more"><a href="%1$s">%2$s</a></p>',
            get_permalink( get_the_ID() ),
            __( 'Read More &gt;', 'yourprofile' )
    );
}
add_filter( 'excerpt_more', 'yourprofile_excerpt_more' );

/**
 * Shortcode registration
 */
function yourprofile_shortcode_header_text($attr, $content) {
    if( $attr && array_key_exists('class', $attr) ) {
        $class = $attr["class"];
        return '<span class="'.$class.'">'.$content.'</span>';
    }
    return $content;
}
add_shortcode( 'headerText', 'yourprofile_shortcode_header_text' );

/**
 * Exclude pages from search
 */
function yourprofile_exclude_pages_from_search($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('pre_get_posts','yourprofile_exclude_pages_from_search');

/**
 * Activate shortcode in widgets
 */
add_filter('widget_text','do_shortcode');
