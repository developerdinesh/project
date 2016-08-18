<?php

/**
 * Enqueue scripts and styles.
 */
if( !function_exists( 'seopress_scripts' ) )
{
	function seopress_scripts()
	{
		
		global $seopress_version;
		
		//wp_enqueue_style( $handle, $src, $deps, $ver, $media );
		
		//Load bootstrap css
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), $seopress_version, 'all' );
		
		//Load font-awesome file
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), $seopress_version, 'all' );
		
		// Load default css file
		wp_enqueue_style( 'seopress-style-default', get_stylesheet_uri(), array( 'bootstrap', 'font-awesome' ), $seopress_version, 'all' );
		
		
		//Load css/style.css file
		wp_enqueue_style( 'seopress-style-core', get_template_directory_uri() . '/css/style.css', array( 'bootstrap', 'font-awesome' ), $seopress_version, 'all' );
		
		//Load woo css file
		wp_enqueue_style( 'seopress-style-woo', get_template_directory_uri() . '/css/woo-css.css', array( 'bootstrap', 'font-awesome' ), $seopress_version, 'all' );
		
		/* Load scripts
		* @ https://codex.wordpress.org/Function_Reference/wp_enqueue_script
		* Usages wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
		*/
		
		// Load bootstrap js
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), $seopress_version, true );
		
		// Load seopress script file
		wp_enqueue_script( 'seopress-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), $seopress_version, true );

		// Load html5shiv
		wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), $seopress_version, false );
		wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

		// Load respond js
		wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.js', array(), $seopress_version, false );
		wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
		
		//load comment-reply js
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		{
			wp_enqueue_script( 'comment-reply' );
		}
		
		
		// Load stickymenu js depends on jquery and if enabled by customizer
		if( get_theme_mod( 'seopress_stickymenu_setting', '0' ) == 1 && !is_page_template( 'template-landing-page.php' ) )
		{
			wp_enqueue_script( 'seopress-stickymenu', get_template_directory_uri() . '/js/stickymenu.js', array( 'jquery' ), '', 'true' );
		}
		
	}
}
add_action( 'wp_enqueue_scripts', 'seopress_scripts' );


