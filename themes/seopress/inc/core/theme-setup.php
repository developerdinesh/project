<?php

/**
 * Assign the seopress version to a var
 */
$seopress_theme_arr		= wp_get_theme( 'seopress' );
$seopress_version		= $seopress_theme_arr['Version'];


if( ! function_exists( 'seopress_setup' ) )
{
	function seopress_setup()
	{

		global $content_width;
		if( !isset( $content_width ) )
		{
			$content_width = 730;
		}
		
		load_theme_textdomain( 'seopress', get_template_directory() . '/languages' );
		
		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );
		
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 730, 300, true );
		
		register_nav_menu( 'primary', __( 'Top Main Menu', 'seopress' ) );
		
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
		
		add_theme_support( 'post-formats', array( 'quote' ) );

		add_theme_support('woocommerce');

		add_theme_support( 'custom-background', array(
			'default-color'      => '#ffffff',
			'default-attachment' => 'fixed',
		) );


		add_theme_support( 'custom-header', array(
		'width'         => 1140,
		'height'        => 260,
		'flex-width'    => true,
		'flex-height'   => true,
		'uploads'       => true,
		) );

		
		add_theme_support( 'custom-logo', array(
			'height'		=> 100,
			'width'			=> 400,
			'flex-height'	=> true,
		) );
		
		
		add_editor_style( 'css/editor-style.css' );
	}
}
add_action( 'after_setup_theme', 'seopress_setup' );

