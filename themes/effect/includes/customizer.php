<?php
/**
 * effect Theme Customizer
 *
 * @package effect
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function effect_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

	
	$wp_customize->add_section( 'effect_responsive' , 
        array(
				'title'       => __( 'Theme Options & Settings', 'effect' ),
				'priority'    => 30,
				'description'	=> __('Upload Logo and Change Theme Settings Please Go to Theme options.', 'effect'). '<a href="' . esc_url(__(admin_url( 'admin.php?page=options-framework' ).'','effect')) . '" target="_blank">' . esc_attr__( ' Change Theme Options', 'effect' ) . '</a>'
					
		));
		
         //Show or Hide woo product
         $wp_customize->add_setting('reponsive',
	
		array(
			'default'			=> 'Go To effect Options',
			'type'				=> 'theme_mod',
			'capability'		=> 'edit_theme_options',
			'sanitize_callback'	=> 'effect_sanitize_text'
		)
	);
                 $wp_customize->add_control(new WP_customize_control ($wp_customize,'reponsive',
                         array (
                             
                             'settings'		=> 'reponsive',
                             'section'		=> 'effect_responsive',
                             'type'		=> 'text',    	 
                            'label'		=> __( 'Dashboard > Appearance > effect options', 'effect' )
			
                             
                         )  ));

}
add_action("customize_register","effect_customize_register");


function effect_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
function effect_sanitize_nohtml( $nohtml ) {
	return wp_filter_nohtml_kses( $nohtml );
}
function effect_sanitize_select( $input, $setting ) {
	
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}


function effect_registers() {
    wp_register_script( 'effect_jquery_ui', '//code.jquery.com/ui/1.10.4/jquery-ui.js', array("jquery"), '20120206', true  );
	wp_enqueue_script( 'effect_jquery_ui' );
	wp_register_script( 'effect_customizer_script', get_template_directory_uri() . '/js/effect_customizer.js', array("jquery","effect_jquery_ui"), '20120206', true  );
	wp_enqueue_script( 'effect_customizer_script' );
	
	wp_localize_script( 'effect_customizer_script', 'scatmanjhon', array(
		'documentation' => __( 'Documentation', 'effect' ),
		'pro' => __('Upgrade to Pro','effect'),
		'support' => __('Support','effect')
		
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'effect_registers' );


function effect_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}
function effect_sanitize_css( $css ) {
	return wp_strip_all_tags( $css );
}

function effect_sanitize_html( $html ) {
	return stripslashes(wp_filter_post_kses( $html ));
        
}

 