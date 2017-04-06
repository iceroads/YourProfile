<?php
function yourprofile_sidebar_registration() {
	register_sidebar( array(
	'name'          => __( 'Portfolio Sidebar', 'yourprofile' ),
	'id'            => 'portfolio-sidebar',
	'before_widget' => '<div id="%1$s" class="col-md-6 widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
	) );

	register_sidebar( array(
	'name'          => __( 'Contact Footer Map', 'yourprofile' ),
	'id'            => 'contact-footer',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h4>',
	'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'yourprofile_sidebar_registration' );