<?php

class allurer_Sidebars {

private function __construct() {}

public static function setup_sidebars() {
	add_action( 'after_setup_theme', array( __CLASS__, 'after_setup_theme' ) );
	do_action( 'allurer_sidebars' );
}
public static function after_setup_theme() {
   add_action( 'widgets_init', array( __CLASS__, 'widgets_init' ) );
   do_action( 'allurer_sidebars_after_setup_theme' );
   add_filter('widget_text', 'do_shortcode');
}

/**
 * Register widgetized area and update sidebar with default widgets
 */
//function allurer_widgets_init() 

public static function widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'allurer' ),
		'id'            => 'sidebar-1',
		'description' => __( 'Appears on front page & blog feed view only!', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'allurer' ),
		'id'            => 'page',
		'description' => __( 'Appears on page view only!', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Post Sidebar', 'allurer' ),
		'id'            => 'single',
		'description' => __( 'Appears on single post view only!', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Portfolio Sidebar', 'allurer' ),
		'id'            => 'portfolio',
		'description' => __( 'Appears on single portfolio view only!', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	
	register_sidebar( array(
		'name' => __( 'Footer Widget One.', 'allurer' ),
		'id' => 'footer-1',
		'description' => __( 'One of four footer widget areas - sitewide', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Widget Two.', 'allurer' ),
		'id' => 'footer-2',
		'description' => __( 'One of four footer widget areas - sitewide', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Widget Three', 'allurer' ),
		'id' => 'footer-3',
		'description' => __( 'One of four footer widget areas - sitewide', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Four', 'allurer' ),
		'id' => 'footer-4',
		'description' => __( 'One of four footer widget areas - sitewide', 'allurer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

}
allurer_Sidebars::setup_sidebars();