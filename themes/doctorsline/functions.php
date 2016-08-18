<?php
add_action( 'wp_enqueue_scripts', 'doctorsline_child_enqueue_styles',99);
function doctorsline_child_enqueue_styles() {
    $parent_style = 'doctorsline-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'doctorsline-child-style',get_stylesheet_directory_uri() . '/doctorsline.css', array( $parent_style ));
}
require_once (get_stylesheet_directory() . '/inc/customizer.php'); 
?>