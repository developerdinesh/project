<?php

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
include_once('includes/installs.php');
include_once('includes/core/core.php');
	require get_template_directory() . '/includes/customizer.php';
	require get_template_directory() . '/includes/custom-header.php';
include_once('baztro.php');

function effect_scripts() {
	wp_enqueue_style( 'effect-style', get_stylesheet_uri() );
	wp_enqueue_style('sc', get_template_directory_uri(). '/css/sc.css' );
	wp_enqueue_style( 'effect-font-awesome', get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_script( 'effect-nivo-slider', get_template_directory_uri() . '/js/nivo.slider.js', array('jquery') );
	wp_enqueue_style( 'effect-nivo-slider-style', get_template_directory_uri()."/css/nivo.css" );
	if ( ( of_get_option('slider_enabled') != 0 ) && ( is_front_page() ||  is_home() ) )  {
	wp_enqueue_script( 'effect-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery','effect-nivo-slider') );
	}
	
 echo '<style type="text/css">';	if (of_get_option('effect_sharebut' ) =='0' ) {echo'#pronav-inner{width:100% !important;'; }  echo '</style>';
//Custom css output	
		$custom_css = html_entity_decode(of_get_option('effect_customcss'));
		
		wp_add_inline_style( 'effect-style', $custom_css );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	}
add_action( 'wp_enqueue_scripts', 'effect_scripts' );
/**
 * Enqueue script for custom customize control.
 */
function effect_custom_customize_enqueue() {
	wp_enqueue_style( 'customizer-css', get_stylesheet_directory_uri() . '/css/customizer-css.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'effect_custom_customize_enqueue' );


// Home Icon for Menu
	function effect_hdmenu() {	
		echo '<ul>';
		if ('page' != get_option('show_on_front')) {
		if (is_front_page())
		$class = 'class="current_page_item home-icon"';
	else
		$class = 'class="home-icon"';
			echo '<li ' . $class . ' ><a href="'.esc_url(home_url()) . '/"><img src="'. get_template_directory_uri() . '/images/home.jpg" width="26" height="24" alt="Home"/></a></li>';
	}
		wp_list_pages('title_li=');
		echo '</ul>';
	}

add_filter( 'wp_nav_menu_items', 'effect_home_link', 10, 2 );

	function effect_home_link($items, $args) {
		if (is_front_page())
		$class = 'class="current_page_item home-icon"';
		else
		$class = 'class="home-icon"';
		$homeMenuItem =
		'<li ' . $class . '>' .
		$args->before .
		'<a href="' .esc_url(home_url( '/' )) . '" title="Home">' .
		$args->link_before . '<img src="'. get_template_directory_uri() . '/images/home.jpg" width="26" height="24" alt="Home"/>' . $args->link_after .
		'</a>' .
		$args->after .
		'</li>';
		$items = $homeMenuItem . $items;
		return $items;
	}

//function to call first uploaded image in functions file
function effect_main_image() {
$files = get_children('post_parent='.get_the_ID().'&post_type=attachment
&post_mime_type=image&order=desc');
  if($files) :
    $keys = array_reverse(array_keys($files));
    $j=0;
    $num = $keys[$j];
    $image=wp_get_attachment_image($num, 'large', true);
    $imagepieces = explode('"', $image);
    $imagepath = $imagepieces[1];
    $main=wp_get_attachment_url($num);
		$template=get_template_directory();
		$the_title=get_the_title();
    print "<img src='$main' alt='$the_title' class='frame' />";
  endif;
}

function effect_post_meta_data() {
	printf( __( '%2$s  %4$s', 'effect' ),
	'meta-prep meta-prep-author posted', 
	sprintf( '<span itemprop="datePublished" class="timestamp updated">%3$s</span>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_html( get_the_date() )
	),
	'byline',
	sprintf( '<span class="author vcard" itemprop="author" itemtype="http://schema.org/Person"><span class="fn">%3$s</span></span>',
		get_author_posts_url( get_the_author_meta( 'ID' ) ),
		sprintf( esc_attr__( 'View all posts by %s', 'effect' ), get_the_author() ),
		esc_attr( get_the_author() )
		)
	);
}

/* Enable support for post-thumbnails ********************************************/
		
	// If we want to ensure that we only call this function if
	// the user is working with WP 2.9 or higher,
	// let's instead make sure that the function exists first
	
function effect_theme_setup() { 
	 
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'defaultthumb', 300, 200, true);
		add_image_size( 'popularpost', 75, 75 , true );
		add_image_size( 'latestpost', 150, 150 , true );
	    load_theme_textdomain('effect', get_template_directory() . '/languages');
		add_editor_style();

		
		// Setup the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'effect_custom_background_args', array(
		'default-color' => '',
		'default-image' => get_template_directory_uri() . '/images/bg.png',
		) ) );
	
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		
		register_nav_menus(
			array(
 				'effect-navigation' => __('Navigation', 'effect'),
 				'primary' => __('Primary', 'effect'),
 				'footer-menu' => __('Footer Menu', 'effect'),
				)		
		);
		
		global $content_width;
		if ( ! isset( $content_width ) ) {
		$content_width = 770;
		}
	//woocommerce plugin support
		add_theme_support( 'woocommerce' );
	}
add_action( 'after_setup_theme', 'effect_theme_setup' );
	
/* Excerpt ********************************************/

    function effect_excerptlength_teaser($length) {
    return 10;
    }
    function effect_excerptlength_index($length) {
    return 22;
    }
    function effect_excerptmore($more) {
    return '...';
    }
    
    
    function effect_excerpt($length_callback='', $more_callback='') {
    global $post;
    add_filter('excerpt_length', $length_callback);
 
    add_filter('excerpt_more', $more_callback);
   
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = ''.$output.'';
    echo $output;
    }

		 function effect_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( 'Search for:','effect' ) . '</label>
	<input type="text" placeholder="'.__('Search','effect').'" value="' . get_search_query() . '" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="'. esc_attr__( 'Go','effect' ) .'" />
	</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'effect_search_form' );


/* Widgets ********************************************/

    function effect_widgets_init() {

	register_sidebar(array(
		'name' => __( 'Sidebar Right', 'effect' ),
		'id' => 'effectsr',
	    'before_widget' => '<div class="box clearfloat"><div class="boxinside clearfloat">',
	    'after_widget' => '</div></div>',
	    'before_title' => '<h4 class="widgettitle">',
	    'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name' => __( 'Bottom Menu 1', 'effect' ),
		'id' => 'effectbm1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));

	register_sidebar(array(
		'name' => __( 'Bottom Menu 2', 'effect' ),
		'id' => 'effectbm2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));	

	register_sidebar(array(
		'name' => __( 'Bottom Menu 3', 'effect' ),
		'id' => 'effectbm3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h4>',
	    'after_title' => '</h4>',
	));	

	
}
add_action('widgets_init', 'effect_widgets_init');
//---------------------------- [ Pagenavi Function ] ------------------------------//
 
 
function effect_pagenavi() {
	global $wp_query;
	$big = 123456789;
	$page_format = paginate_links( array(
	    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format' => '?paged=%#%',
	    'current' => max( 1, get_query_var('paged') ),
	    'total' => $wp_query->max_num_pages,
	    'type'  => 'array'
	) );
	if( is_array($page_format) ) {
	            $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	            echo '<div class="wp-pagenavi">';
	            echo '<span class="pages">'. $paged . ' of ' . $wp_query->max_num_pages .'</span>';
	            foreach ( $page_format as $page ) {
	                    echo "$page";
	            }
	           echo '</div>';
	 }
}


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'wrockmetro_register_required_plugins' );

function wrockmetro_register_required_plugins() {

   $plugins = array(

	
		
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Regenerate Thumbnails',
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),
		array(
			'name'      => 'Menu Icons',
			'slug'      => 'menu-icons',
			'required'  => false,
		),		

	);


	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.


);	tgmpa( $plugins, $config );

}

/* ----------------------------------------------------------------------------------- */
/* Customize Comment Form
/*----------------------------------------------------------------------------------- */
add_filter( 'comment_form_default_fields', 'effect_comment_form_fields' );
function effect_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="large-6 columns"><div class="row collapse prefix-radius"><div class="small-2 columns">' . '<span class="prefix"><i class="fa fa-user"></i>' . ( $req ? ' <span class="required">*</span>' : '' ) . '</span> </div>' .
                    '<div class="small-10 columns"><input class="form-control" placeholder="'. __( 'Name','effect' ).'"  id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="20"' . $aria_req . ' /></div></div></div>',
        'email'  => '<div class="large-6 columns"><div class="row collapse prefix-radius"><div class="small-2 columns">' . '<span class="prefix"><i class="fa fa-envelope-o"></i>' . ( $req ? ' <span class="required">*</span>' : '' ) . '</span></div> ' .
                    '<div class="small-10 columns"><input class="form-control" placeholder="'. __( 'Email','effect' ).'" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="20"' . $aria_req . ' /></div></div></div>',
        'url'    => '<div class="large-6 columns"><div class="row collapse prefix-radius"><div class="small-2 columns">' . '<span class="prefix"><i class="fa fa-external-link"></i></span> </div>' .
                    '<div class="small-10 columns"><input class="form-control" placeholder="'. __( 'Website','effect' ).'"  id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div></div></div>'        
    );
    
    return $fields;
    
    
}

add_filter( 'comment_form_defaults', 'effect_comment_form' );
function effect_comment_form( $argsbutton ) {
        $argsbutton['class_submit'] = 'button'; 
    
    return $argsbutton;
}
?>