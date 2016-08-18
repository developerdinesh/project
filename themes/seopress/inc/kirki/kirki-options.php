<?php
//set Kirki config
seopress_option::add_config( 'seopress_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );



//set logo in customizer header
if ( ! function_exists( 'seopress_configuration_sample_styling' ) )
{
	function seopress_configuration_sample_styling( $config )
	{
		return wp_parse_args( array(
			'logo_image'   => get_template_directory_uri() . '/images/logo_for_kirki.png',
			'description'  => __( 'SEOPRESS Theme by <a target="_blank" href="http://ewptheme.com/">EWP Theme</a>.', 'seopress' ),
		), $config );
	}
}
add_filter( 'kirki/config', 'seopress_configuration_sample_styling' );




//the main panel
seopress_option::add_panel( 'seopress_options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'SEOPRESS Options', 'seopress' ),
    'description' => esc_attr__( 'All options of seopress theme', 'seopress' ),
) );
//the main panel END


//seopress pro info section
seopress_option::add_section( 'seopress_pro_sec', array(
	'title'          => esc_attr__( 'Try SEOPress Pro', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'my_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_pro_custom_fld',
	'label'       => __( 'SEOPress Pro is Available', 'seopress' ),
	'section'     => 'seopress_pro_sec',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">SEOPress Pro version includes many advance features such as Visual Composer Page Builder, Massive Addons for Visual Composer, Revolution Slider, Advance Mega Menu etc. so let <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">Try SEOPress Pro</a> Version.</div>',
	'priority'    => 10,
) );

//seopress pro info section END


//typography
seopress_option::add_section( 'typography_options', array(
	'title'          => esc_attr__( 'Typography', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_typog',
	'label'       => esc_attr__( 'Body Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Lora',
		'variant'        => 'regular'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h1_typog',
	'label'       => esc_attr__( 'H1 / Headline 1 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h1, .h1',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h2_typog',
	'label'       => esc_attr__( 'H2 / Headline 2 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h2, .h2',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h3_typog',
	'label'       => esc_attr__( 'H3 / Headline 3 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h3, .h3',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h4_typog',
	'label'       => esc_attr__( 'H4 / Headline 4 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h4, .h4',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h5_typog',
	'label'       => esc_attr__( 'H5 / Headline 5 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h5, .h5',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h6_typog',
	'label'       => esc_attr__( 'H6 / Headline 6 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h6, .h6',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_p_typog',
	'label'       => esc_attr__( 'Paragraph Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Droid Sans',
		'variant'        => 'regular',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#maincontainer p',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_top_bar_typog',
	'label'       => esc_attr__( 'Top Bar Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '22px',
		'letter-spacing' => '0px',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.bgtoph',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_top_menu_typog',
	'label'       => esc_attr__( 'Main Menu Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Rajdhani',
		'variant'        => '500',
		'font-size'      => '22px'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'ul.navbar-nav li a',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_widget_ul_ol_typog',
	'label'       => esc_attr__( 'Widgets UL/OL Typography', 'seopress' ),
	'description' => esc_attr__( 'Widgets Unordered List / Ordered List Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.1px',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.widget_sidebar_main ul li, .widget_sidebar_main ol li',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_mn_footer_typog',
	'label'       => esc_attr__( 'Footer Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.footer',
		),
	),
	'transport' => 'auto',
) );

//typography END

//top bar
seopress_option::add_section( 'top_bar', array(
	'title'          => esc_attr__( 'Top Bar above Header', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_display_top_bar',
	'label'       => esc_attr__( 'Enable/Disable Top Bar', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
) );
	
seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_top_bar_color',
	'label'       => esc_attr__( 'Top Bar Color', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.bgtoph',
			'property' => 'color',
		),
		array(
			'element'  => '.bgtoph-icon-clr',
			'property' => 'color',
		),
		array(
			'element'  => '.bgtoph-icon-clr',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_top_bar_bg_color',
	'label'       => esc_attr__( 'Top Bar Background Color', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.bgtoph',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_top_bar_link_color',
	'label'       => esc_attr__( 'Top Bar Links Color', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.bgtoph a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'select',
	'settings'    => 'seopress_tpbr_left_view',
	'label'       => esc_attr__( 'Top Bar Left Content View', 'seopress' ),
	'description' => esc_attr__( 'Simply phone, email or Text/HTML or Disable ?', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'1' => esc_attr__( 'Text / HTML', 'seopress' ),
		'2' => esc_attr__( 'Phone and Email', 'seopress' ),
		'3' => esc_attr__( 'Disable', 'seopress' ),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_tpbr_lft_phne',
	'label'			=> esc_attr__( 'Phone Number', 'seopress' ),
	'description' 	=> esc_attr__( 'Leave empty for disable.', 'seopress' ),
	'section'		=> 'top_bar',
	'default'		=> '0123456789',
	'priority'		=> 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'seopress_tpbr_left_view',
			'operator' => '==',
			'value'    => 2,
		),
	)
) );


seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_tpbr_lft_email',
	'label'			=> esc_attr__( 'Email Address', 'seopress' ),
	'description' 	=> esc_attr__( 'Leave empty for disable.', 'seopress' ),
	'section'		=> 'top_bar',
	'default'		=> 'info@example.com',
	'priority'		=> 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'seopress_tpbr_left_view',
			'operator' => '==',
			'value'    => 2,
		),
	)
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'editor',
	'settings'    => 'seopress_top_bar_left_content',
	'label'       => esc_attr__( 'Top Bar Left Content', 'seopress' ),
	'description' => esc_attr__( 'Content/HTML of Top Bar Left Side. Leave empty for disable.', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '<p><span class="fa fa-phone"></span> Call: <a href="tel:0123456789">0123456789</a> | <span class="fa fa-at"></span> Email: <a href="mailto:info@example.com">info@example.com</a></p>',
	'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.topbar_ctmzr',
			'function' => 'html',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'seopress_tpbr_left_view',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

	
//top bar END

//color options
seopress_option::add_section( 'color_options', array(
	'title'          => esc_attr__( 'Color Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_default_a_color',
	'label'       => esc_attr__( 'Default Color of Links', 'seopress' ),
	'section'     => 'color_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => 'body a, .woocommerce .woocommerce-breadcrumb a, .woocommerce .star-rating span',
			'property' => 'color',
		),
		array(
			'element'  => '.widget_sidebar_main ul li::before',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_pro_clr',
	'label'       => esc_attr__( 'More color options', 'seopress' ),
	'section'     => 'color_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">More color options like Title / Headline Color, Button Color, Menu Color, Breadcrumb Color, Header color etc are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro</a> Version.</div>',
	'priority'    => 10,
) );



//color options END


//social profile
seopress_option::add_section( 'social_options', array(
	'title'          => esc_attr__( 'Social Profile', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_facebook',
	'label'			=> esc_attr__( 'Facebook Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> 'http://facebook.com',
	'priority'		=> 10,
) );


seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_twitter',
	'label'			=> esc_attr__( 'Twitter Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> 'http://twitter.com',
	'priority'		=> 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_youtube',
	'label'			=> esc_attr__( 'YouTube Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> 'http://youtube.com',
	'priority'		=> 10,
) );


seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_googleplus',
	'label'			=> esc_attr__( 'Google Plus Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_linkedin',
	'label'			=> esc_attr__( 'Linkedin Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_pinterest',
	'label'			=> esc_attr__( 'Pinterest Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_skype',
	'label'			=> esc_attr__( 'Skype Id', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );


//social profile END


// Blog
seopress_option::add_section( 'blog_options', array(
	'title'          => esc_attr__( 'Blog Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );
	
seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_breadcrumbx_setting',
	'label'       => esc_attr__( 'Breadcrumb', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Breadcrumb', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );


seopress_option::add_field( 'seopress_config', array(
	'type'			=> 'toggle',
	'settings'		=> 'seopress_archive_post_thumbnail',
	'label'			=> esc_attr__( 'Thumbnail on Archive Post', 'seopress' ),
	'description'	=> esc_attr__( 'Enable/Disable Thumbnail on Archive/Loop Page', 'seopress' ),
	'section'		=> 'blog_options',
	'default'		=> '1',
	'priority'		=> 10,
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_single_post_thumbnail',
	'label'       => esc_attr__( 'Thumbnail on Single Post', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Thumbnail on Single Post', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_cmnts_on_page',
	'label'       => esc_attr__( 'Allow Comments on All Pages', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Comment on Pages. This is global option and will apply on all pages only. if you want to disable Comment on individual page, then Enable this options and disable Allow Comments on individual page ( Follow: Dashboard > Pages > All Pages > Quick Edit > Allow Comments ).', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_cmnts_on_post',
	'label'       => esc_attr__( 'Allow Comments on All Posts', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Comment on All Posts. This is global option and will apply on all posts only. if you want to disable Comment on individual post, then Enable this options and disable Allow Comments on individual post ( Follow: Dashboard > Posts > All Posts > Quick Edit > Allow Comments ).', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'select',
	'settings'    => 'seopress_post_date_view',
	'label'       => esc_attr__( 'Post Date View', 'seopress' ),
	'description' => esc_attr__( 'Which date do you want to display for single post?', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'1' => esc_attr__( 'Display Updated Date', 'seopress' ),
		'2' => esc_attr__( 'Display Publish Date', 'seopress' ),
	),
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'number',
	'settings'    => 'seopress_excerpt_length',
	'label'       => esc_attr__( 'Excerpt Length', 'seopress' ),
	'description' => esc_attr__( 'How much words you want to display on Archive page?', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 40,
	'choices'     => array(
		'min'  => 1,
		'step' => 1,
	),
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'radio-image',
	'settings'    => 'seopress_blog_archive_layout',
	'label'       => esc_attr__( 'Archive / Loop Layout', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 'rights',
	'priority'    => 10,
	'choices'     => array(
		'fullw'	  => get_template_directory_uri() . '/images/fullw.png',
		'rights'  => get_template_directory_uri() . '/images/rights.png',
	),
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'radio-image',
	'settings'    => 'seopress_blog_single_layout',
	'label'       => esc_attr__( 'Single Post Layout', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 'rights',
	'priority'    => 10,
	'choices'     => array(
		'fullw'	  => get_template_directory_uri() . '/images/fullw.png',
		'rights'  => get_template_directory_uri() . '/images/rights.png',
	),
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_cmnt',
	'section'     => 'blog_options',
	'default'     => '<hr /><div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">' . esc_html__( 'Comments display in Even Odd order like Even, Odd, Even, Odd as so on. here we can set color and background color for both Even and Odd comment.', 'seopress' ) . '</div>',
	'priority'    => 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_cmnt_even_color',
	'label'       => esc_attr__( 'Even Comment Color', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '#000000',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.even',
			'property' => 'color',
		),
		array(
			'element'  => '#comments .pingback.even',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_cmnt_even_bg_color',
	'label'       => esc_attr__( 'Even Comment Background Color', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '#f8f8f8',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.even',
			'property' => 'background-color',
		),
		array(
			'element'  => '#comments .pingback.even',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_cmnt_odd_color',
	'label'       => esc_attr__( 'Odd Comment Color', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '#000000',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.odd',
			'property' => 'color',
		),
		array(
			'element'  => '#comments .pingback.odd',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_cmnt_odd_bg_color',
	'label'       => esc_attr__( 'Odd Comment Background Color', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '#eeeeee',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '#comments .comment.odd',
			'property' => 'background-color',
		),
		array(
			'element'  => '#comments .pingback.odd',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_pro_blg',
	'label'       => esc_attr__( 'More Options', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">More blog options are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro</a> Version.</div>',
	'priority'    => 10,
) );
// Blog END


//woocommerce section
if( class_exists( 'WooCommerce' ) )
{
	seopress_option::add_section( 'woocommerce_options', array(
		'title'          => esc_attr__( 'Woocommerce Options', 'seopress' ),
		'panel'          => 'seopress_options', // Not typically needed.
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_shop_link_top_bar',
		'label'       => esc_attr__( 'Display shop icon in Top Bar?', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable shop icon in Top Bar', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_cart_link_top_bar',
		'label'       => esc_attr__( 'Display cart icon in Top Bar?', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable cart icon in Top Bar', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_myaccount_link_top_bar',
		'label'       => esc_attr__( 'Display My Account icon in Top Bar?', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable My Account icon in Top Bar', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_wc_breadcrumbs',
		'label'       => esc_attr__( 'WC Breadcrumbs', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable WooCommerce Breadcrumbs (Please save and reload)', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'number',
		'settings'    => 'seopress_product_per_page',
		'label'       => esc_attr__( 'Number of products display on loop page', 'seopress' ),
		'description' => esc_attr__( 'How much products you want to display on loop page? (Please save and reload)', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => 12,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'slider',
		'settings'    => 'seopress_product_per_column',
		'label'       => esc_attr__( 'Number of products display per column', 'seopress' ),
		'description' => esc_attr__( 'How much products you want to display in single line?', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => 4,
		'priority'    => 10,
		'choices'     => array(
			'min'  => '2',
			'max'  => '5',
			'step' => '1',
			),
	) );
	
	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'custom',
		'settings'    => 'seopress_info_woo_layout',
		'section'     => 'woocommerce_options',
		'default'     => '<hr /><div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">' . esc_html__( 'This layout will apply on Shop, Single Product and Product Search Pages. If you want to set full width for Cart, Checkout and My Account pages, then edit these pages and select Full Width No Sidebar Template.', 'seopress' ) . '</div>',
		'priority'    => 10,
	) );

	seopress_option::add_field( 'seopress_config', array(
		'type'        => 'radio-image',
		'settings'    => 'seopress_woo_layout',
		'label'       => esc_attr__( 'WooCommerce Page Layout', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => 'fullw',
		'priority'    => 10,
		'choices'     => array(
			'fullw'	  => get_template_directory_uri() . '/images/fullw.png',
			'rights'  => get_template_directory_uri() . '/images/rights.png',
		),
	) );
}
//woocommerce section END

//footer section
seopress_option::add_section( 'footer_options', array(
    'title'          => esc_attr__( 'Footer Options', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_footer_color',
	'label'       => esc_attr__( 'Footer Text Color', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_footer_wdget_headline_color',
	'label'       => esc_attr__( 'Footer Widgets Headline Color', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer .widgets_footer_title',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_footer_link_color',
	'label'       => esc_attr__( 'Footer Link Color', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer a, .widgets_footer ul li::before',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_footer_bg_color',
	'label'       => esc_attr__( 'Footer Background Color', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '#111111',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_footer_border_color',
	'label'       => esc_attr__( 'Footer Top Border Color', 'seopress' ),
	'description' => esc_attr__( 'This will also color of line below footer widgets (if footer widgets enabled).', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '#337ab7',
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => '.footer',
			'property' => 'border-color',
		),
		array(
			'element'  => '.footerwdgthr',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'slider',
	'settings'    => 'seopress_number_of_footer_widgets',
	'label'       => esc_attr__( 'Footer Widgets', 'seopress' ),
	'description' => esc_attr__( 'How much Widgets you want? (please save and go to Widgets page to add.)', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'min'  => '0',
		'max'  => '4',
		'step' => '1',
	),
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'editor',
	'settings'    => 'seopress_left_footer_setting',
	'label'       => esc_attr__( 'Footer Left Content', 'seopress' ),
	'description' => esc_attr__( 'Content of Footer Left Side', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '<p>All right reserved.</p>',
	'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.cprtlft_ctmzr',
			'function' => 'html',
		),
	),
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'editor',
	'settings'    => 'seopress_center_footer_setting',
	'label'       => esc_attr__( 'Footer Center Content', 'seopress' ),
	'description' => esc_attr__( 'Content of Footer Center Side', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '<p><a href="#">Terms of Use - Privacy Policy</a></p>',
	'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.cprtcntr_ctmzr',
			'function' => 'html',
		),
	),
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_footer_right',
	'label'       => esc_attr__( 'Footer Right Content', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">This option is available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro</a> Version.</div>',
	'priority'    => 10,
) );



//footer section END


//misc section
seopress_option::add_section( 'misc_options', array(
    'title'          => esc_attr__( 'MISC Options', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_stickymenu_setting',
	'label'       => esc_attr__( 'Sticky Menu', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Sticky Menu (This will not work for small devices)', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '0',
	'priority'    => 10,
) );


seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_back_to_top',
	'label'       => esc_attr__( 'Back To Top Button', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Back To Top Button', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '1',
	'priority'    => 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_loading_icon',
	'label'       => esc_attr__( 'Page Loading Icon', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Page Loading Icon', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '0',
	'priority'    => 10,
) );

seopress_option::add_field( 'seopress_config', array(
	'type'        => 'image',
	'settings'    => 'seopress_loading_icon_img',
	'label'       => __( 'Upload Custom Loading Icon', 'seopress' ),
	'description' => __( 'It will replace default loading icon.', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_loading_icon',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

seopress_option::add_field( 'seopress_config', array(
	'type'     => 'editor',
	'settings' => 'seopress_comment_panel_title',
	'label'    => esc_attr__( 'Comment Box Headline', 'seopress' ),
	'section'  => 'misc_options',
	'default'  => 'Have any Question or Comment?',
	'priority' => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.cmnthdlne_ctmzr',
			'function' => 'html',
		),
	),
) );

//misc section END


//Theme Info section
seopress_option::add_section( 'seopress_theme_info', array(
    'title'          => esc_attr__( 'Theme Info', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

seopress_option::add_field( 'my_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_sprt',
	'label'       => __( 'SEOPress Support', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">Are you facing any problem in this theme? Please <a target="_blank" href="https://wordpress.org/support/theme/seopress">Create a support ticket</a>.</div>',
	'priority'    => 10,
) );


seopress_option::add_field( 'my_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_rting',
	'label'       => __( 'SEOPress Rating', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">Do you like this theme? Please <a target="_blank" href="https://wordpress.org/support/view/theme-reviews/seopress?filter=5">Rate 5 Stars</a>.</div>',
	'priority'    => 10,
) );

seopress_option::add_field( 'my_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_dmo',
	'label'       => __( 'SEOPress Demo', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">Do you want to visit demo pages? Please <a target="_blank" href="http://seopress.ewptheme.com/">Click for demo</a>.</div>',
	'priority'    => 10,
) );


seopress_option::add_field( 'my_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_crddit',
	'label'       => __( 'SEOPress PRO Version', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">Do you want missing options and premium plugins? Please <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">Install SEOPress Pro version</a>.</div>',
	'priority'    => 10,
) );

//Theme Info section END

?>