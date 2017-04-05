<?php
function yourprofile_sidebar_registration() {
	register_sidebar( array(
	'name'          => __( 'Footer Sidebar', 'yourprofile' ),
	'id'            => 'footer-sidebar',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<p>',
	'after_title'   => '</p>',
	) );
}
add_action( 'widgets_init', 'yourprofile_sidebar_registration' );