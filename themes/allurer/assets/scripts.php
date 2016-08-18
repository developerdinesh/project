<?php

/**
 * Enqueue scripts and styles
 */
function allurer_font_url() {
	$fonts   = array();
	$subsets = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'allurer' ) ) {
		$fonts[] = 'Open Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Kaushan Script font: on or off', 'allurer' ) ) {
		$fonts[] = 'Kaushan Script:400italic,700italic,400,700';
	}
	
	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Allura Script font: on or off', 'allurer' ) ) {
		$fonts[] = 'Allura Script:400italic,700italic,400,700';
	}
	
	/* translators: To add an additional character subset specific to your language, translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language. */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'allurer' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = esc_url(add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), '//fonts.googleapis.com/css' ));
	}

	return $fonts_url;
}
 
function allurer_scripts() {
	global $wp_styles;
	// Bump this when changes are made to bust cache
    $allurer_theme = wp_get_theme();
    $version = $allurer_theme->get( 'Version' );
	// CSS Scripts
    // Add our fonts, used in the main stylesheet.
	wp_enqueue_style( 'allurer-fonts', allurer_font_url(), array(), null );
		
	wp_enqueue_style('allurer-style', get_template_directory_uri().'/assets/css/style.css', false ,$version, 'all' );
	wp_enqueue_style('allurer-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', false ,$version, 'all' );
	wp_enqueue_style('allurer-custom', get_template_directory_uri().'/assets/css/custom.css', false ,$version, 'all' );
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/font-awesome/css/font-awesome.css', false ,$version, 'all' );
		
	// Load style.css from child theme
    if (is_child_theme()) {
        wp_enqueue_style('allurer-child', get_stylesheet_uri(), false, $version, null);
    }
	
	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'allurer-ie', get_template_directory_uri() . '/assets/css/ie.css', array( 'allurer-style' ), $version );
	wp_style_add_data( 'allurer-ie', 'conditional', 'lt IE 8' );
		
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    	
	wp_enqueue_script('bootstrap.js', get_template_directory_uri().'/assets/js/bootstrap.js', array('jquery'),$version, true );
	
	wp_enqueue_script( 'allurer-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), false, true );
    
	wp_enqueue_script('modernizr.js', get_template_directory_uri().'/assets/js/modernizr.custom.79639.js', array('jquery'),$version, false );
	
	wp_enqueue_script( 'allurer-html5shiv', get_template_directory_uri() . '/js/html5.js', array(), '3.7.0', false );
		
}
add_action( 'wp_enqueue_scripts', 'allurer_scripts' );

/** 
 * Enclose html5shiv in a IE conditional 
 * 
 * @since Allurer 1.0.0 
 */ 
function allurer_html5shiv( $tag, $handle, $src ) { 
    if ( 'allurer-html5shiv' === $handle ) { 
        $tag = "<!--[if lt IE 9]>\n"; 
        $tag .= "<script type='text/javascript' src='$src'></script>\n"; 
        $tag .= "<![endif]-->\n"; 
 	} 
    return $tag; 
} 
add_filter( 'script_loader_tag', 'allurer_html5shiv', 10, 3 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since allurer 1.0.0
 *
 * @see wp_add_inline_style()
 */
function allurer_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'allurer-style', $css );
}
add_action( 'wp_enqueue_scripts', 'allurer_post_nav_background' );

function allurer_custom_css_adjust() {
	$css      = '';
	
	if ( is_front_page() ) {
		$section_header_top = get_theme_mod( 'allurer_front_header_top_padding' );
		$section_header_bottom = get_theme_mod( 'allurer_front_header_bottom_padding' );
		$css .= '
			#section-header { padding-top:' . $section_header_top . 'px; padding-bottom: ' . $section_header_bottom . 'px; }
		';
	}
	
	if ( get_theme_mod( 'allurer_feed_layout' ) === 'default' ) {
		$panel_height = get_theme_mod( 'allurer_default_panel_height' );
		$heading_height = get_theme_mod( 'allurer_default_header_height' );
		$heading_hover_height = get_theme_mod( 'allurer_header_hover_height' );
		$css .= '
			#post-cards .default .panel.panel-card { height: ' . $panel_height . 'px;}
			#post-cards .default .panel.panel-card .panel-heading { height:' . $heading_height . 'px;}
			#post-cards .default .panel.panel-card:hover .panel-heading { height:' . $heading_hover_height . 'px;}
		';
	}
	
	if ( get_theme_mod( 'allurer_feed_layout' ) === 'grid2' ) {
		$panel_height2 = get_theme_mod( 'allurer_grid_panel_height' );
		$heading_height2 = get_theme_mod( 'allurer_grid2_header_height' );
		$heading_hover_height2 = get_theme_mod( 'allurer_grid2_header_hover_height' );
		$css .= '
			#post-cards .col-md-6 .panel.panel-card { height: ' . $panel_height2 . 'px;}
			#post-cards .col-md-6 .panel.panel-card .panel-heading { height:' . $heading_height2 . 'px;}
			#post-cards .col-md-6 .panel.panel-card:hover .panel-heading { height:' . $heading_hover_height2 . 'px;}
		';
	}
	
	if ( get_theme_mod( 'allurer_feed_layout' ) === 'grid3' ) {
		$panel_height3 = get_theme_mod( 'allurer_grid3_panel_height' );
		$heading_height3 = get_theme_mod( 'allurer_grid3_header_height' );
		$heading_hover_height3 = get_theme_mod( 'allurer_grid3_header_hover_height' );
		$css .= '
			#post-cards .col-md-4 .panel.panel-card { height: ' . $panel_height3 . 'px;}
			#post-cards .col-md-4 .panel.panel-card .panel-heading { height:' . $heading_height3 . 'px;}
			#post-cards .col-md-4 .panel.panel-card:hover .panel-heading { height:' . $heading_hover_height3 . 'px;}
		';
	}	

	wp_add_inline_style( 'allurer-custom', $css );
}
add_action( 'wp_enqueue_scripts', 'allurer_custom_css_adjust' );