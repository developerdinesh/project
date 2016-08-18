<?php
/**
 * Allurer Theme Customizer
 *
 * @package Allurer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function allurer_customize_register( $wp_customize ) {
	// Add custom description to Colors and Background sections.
	$wp_customize->get_section( 'colors' )->description         = __( 'Background color is only visible on transparent section(s) in the absence of background image.', 'allurer' );
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	// Rename the label to "Site Title & Tagline" To be extra clear of the options.
	$wp_customize->get_section( 'title_tagline' )->title = __( 'Site Title & Tagline', 'allurer' );
	// Rename the label to "Site Title Color" because this only affects the site title in this theme.
	$wp_customize->get_control( 'blogdescription' )->label = __( 'Site Description - Tagline', 'allurer' );

	// Rename the label to "Display Site Title & Tagline" in order to make this option extra clear.
	$wp_customize->get_control( 'display_header_text' )->label = __( 'Display Site Title', 'allurer' );

	// Setting group for social icons
    $wp_customize->add_section( 'allurer_theme_notes' , array(
		'title'       => __('Allurer Theme Notes','allurer'),
		'description' => sprintf( __( 'Welcome & thank you for choosing allurer as your site theme. In this section you\'ll find some helpful hints and tips to help you configure your site quickly and easily.
		<br/><br/> <b>Social Icons</b> are configurable via a custom menu. To set up your social profile visit the Appearance >><a href="%1$s"> Menu section</a>, enter your profile urls and add them to the "Social" Menu Location.
		<br/><br/><a href="%2$s" target="_blank" />View Theme Demo</a> | <a href="%3$s" target="_blank" />Get Theme Support</a> ', 'allurer' ), admin_url( '/nav-menus.php' ), esc_url('http://www.wpstrapcode.com/blog/allurer/'), esc_url('http://wordpress.org/support/theme/allurer') ),
		'priority'    => 30,
    ) );
	
	$wp_customize->add_section( 'allurer_intro_options' , array(
       'title'       => __('Allurer CTA Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to control the Intro section.', 'allurer' )),
       'priority'    => 33,
    ) );
	
	$wp_customize->add_section( 'allurer_services_options' , array(
       'title'       => __('Allurer Services Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to control the Service Boxes section.', 'allurer' )),
       'priority'    => 35,
    ) );
	
	$wp_customize->add_panel( 'feed_settings', 
	    array( 
		    'title'       => __( 'Allurer Feed Settings', 'allurer' ),
            'priority'    => 38,
            'capability'  => 'edit_theme_options',			
	        'description' => __( 'Settings panel for blog feed', 'allurer' ) 
		) 
	);
	
	$wp_customize->add_section( 'allurer_blogfeed_options' , array(
       'title'       => __('Allurer Blog Feed Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to set Frontpage/Blog home feed layout.', 'allurer' )),
       'priority'    => 1,
	   'panel' => 'feed_settings'
    ) );
	
	$wp_customize->add_section( 'allurer_default_options' , array(
       'title'       => __('Default layout Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to set Frontpage/Blog home feed layout.', 'allurer' )),
       'priority'    => 2,
	   'panel' => 'feed_settings'
    ) );
	
	$wp_customize->add_section( 'allurer_grid2_options' , array(
       'title'       => __('2 Grid layout Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to set Frontpage/Blog home feed layout.', 'allurer' )),
       'priority'    => 3,
	   'panel' => 'feed_settings'
    ) );
	
	$wp_customize->add_section( 'allurer_grid3_options' , array(
       'title'       => __('3 Grid layout Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to set Frontpage/Blog home feed layout.', 'allurer' )),
       'priority'    => 4,
	   'panel' => 'feed_settings'
    ) );
	
	$wp_customize->add_section( 'allurer_single_options' , array(
       'title'       => __('Allurer Single Post Options','allurer'),
	   'description' => sprintf( __( 'Use the following settings to set single post options. Check one or the other not both options!', 'allurer' )),
       'priority'    => 39,
    ) );
	
	$wp_customize->add_panel( 'team_members', 
	    array( 
		    'title'       => __( 'Team Member\'s Settings', 'allurer' ),
            'priority'    => 40,
            'capability'  => 'edit_theme_options',			
	        'description' => __( 'Settings panel for the Team', 'allurer' ) 
		) 
	);
	
	$wp_customize->add_section( 'allurer_team_options' , array(
       'title'       => __('Team Section Options','allurer'),
	   'description' => sprintf( __( 'Team section settings.', 'allurer' )),
       'priority'    => 1,
	   'panel' => 'team_members'
    ) );
	
	$wp_customize->add_section( 'allurer_team_one' , array(
       'title'       => __('Team Member One','allurer'),
	   'description' => sprintf( __( 'Add the first team member\'s details.', 'allurer' )),
       'priority'    => 2,
	   'panel' => 'team_members'
    ) );
	
	$wp_customize->add_section( 'allurer_team_two' , array(
       'title'       => __('Team Member Two','allurer'),
	   'description' => sprintf( __( 'Add the second team member\'s details.', 'allurer' )),
       'priority'    => 3,
	   'panel' => 'team_members'
    ) );
	
	$wp_customize->add_section( 'allurer_team_three' , array(
       'title'       => __('Team Member Three','allurer'),
	   'description' => sprintf( __( 'Add the third team member\'s details.', 'allurer' )),
       'priority'    => 4,
	   'panel' => 'team_members'
    ) );
	
	$wp_customize->add_section( 'allurer_team_four' , array(
       'title'       => __('Team Member Four','allurer'),
	   'description' => sprintf( __( 'Add the fourth team member\'s details.', 'allurer' )),
       'priority'    => 5,
	   'panel' => 'team_members'
    ) );
		
	/**
       * Adds textarea support to the theme customizer
    */
    class allurer_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
 
            public function render_content() {
        ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
        <?php
        }
    }
	
    // Intro Section Settings
	$wp_customize->add_setting(
        'allurer_front_header_top_padding', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_front_header_top_padding',
    array(
        'type' => 'text',
		'default' => '100',
        'label' => __('Add header section top padding - default: 100px', 'allurer'),
        'section' => 'allurer_intro_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_front_header_bottom_padding', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_front_header_bottom_padding',
    array(
        'type' => 'text',
		'default' => '120',
        'label' => __('Add header section top padding - default: 120px', 'allurer'),
        'section' => 'allurer_intro_options',
		'priority' => 2,
        )
    );	
	
	$wp_customize->add_setting(
        'allurer_intro_visibility', array (
		'sanitize_callback' => 'allurer_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        'allurer_intro_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide the entire home page intro section?', 'allurer'),
        'section'  => 'allurer_intro_options',
		'priority' => 3,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_intro_title',
    array(
        'default' => __('Subtly Attract, Allurer!', 'allurer'),
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
        'allurer_intro_title',
    array(
        'label'     => __('Intro Section Title!', 'allurer'),
        'section'   => 'allurer_intro_options',
		'priority'  => 4,
        'type'      => 'text',
    ));
	
	$wp_customize->add_setting(
        'allurer_intro_text_visibility', array (
		'sanitize_callback' => 'allurer_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        'allurer_intro_text_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide just the home page intro text?', 'allurer'),
        'section'  => 'allurer_intro_options',
		'priority' => 5,
        )
    );
			
	$wp_customize->add_setting( 
	    'allurer_intro_text',
    array(
        'default' => '',
		'sanitize_callback' => 'allurer_sanitize_textarea',
		'capability' => 'edit_theme_options',
    ));		

    $wp_customize->add_control(
        new allurer_Customize_Textarea_Control(
            $wp_customize,
            'allurer_intro_text',
        array(
            'label'    => __('Home Intro Text', 'allurer'),
            'section'  => 'allurer_intro_options',
			'priority' => 6,
            'settings' => 'allurer_intro_text',
        )
        )
    );
			
	$wp_customize->add_setting(
        'allurer_intro_button_visibility', array (
		'sanitize_callback' => 'allurer_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        'allurer_intro_button_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide CTA Button?', 'allurer'),
        'section'  => 'allurer_intro_options',
		'priority' => 7,
        )
    );
		
	$wp_customize->add_setting(
        'allurer_cta_text',
    array(
        'default' => __('Get Full Details!', 'allurer'),
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
        'allurer_cta_text',
    array(
        'label'     => __('Home Intro Button Text', 'allurer'),
        'section'   => 'allurer_intro_options',
		'priority'  => 8,
        'type'      => 'text',
    ));
	
	$wp_customize->add_setting(
        'allurer_cta_url',
    array(
        'default' => '#',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
        'allurer_cta_url',
    array(
        'label'    => __('Home Intro Learn Button Link', 'allurer'),
        'section'  => 'allurer_intro_options',
		'priority' => 9,
        'type'     => 'text',
    ));
	
	$wp_customize->add_setting( 'allurer_cta_target', array(
		'default' => '_self',
		'sanitize_callback' => 'allurer_sanitize_target_url',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'allurer_cta_target', array(
        'label'   => __( 'Call To Action Url Window Target', 'allurer' ),
        'section' => 'allurer_intro_options',
	    'priority' => 10,
        'type'    => 'radio',
        'choices' => array(
             '_self'   => __( 'Open Link In Same Tab', 'allurer' ),
			 '_blank'  => __( 'Open Link In New Tab', 'allurer' ),
        ),
    ));
		
	// End of intro section

    // Start Team Member\'s Section
	$wp_customize->add_setting(
        'allurer_team_visibility', array (
		'sanitize_callback' => 'allurer_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        'allurer_team_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide the entire team section?', 'allurer'),
        'section'  => 'allurer_team_options',
		'priority' => 1,
        )
    );
	
	// Member One
	$wp_customize->add_setting('allurer_team_cover1', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_cover',
            array(
               'label'    => __( 'Upload Profile Cover', 'allurer' ),
               'section'  => 'allurer_team_one',
			   'priority' => 1,
               'settings' => 'allurer_team_cover1',
            )
        )
    );
	
	$wp_customize->add_setting('allurer_team_avatar1', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_avatar',
            array(
               'label'    => __( 'Upload Profile Avatar', 'allurer' ),
               'section'  => 'allurer_team_one',
			   'priority' => 2,
               'settings' => 'allurer_team_avatar1',
            )
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_name1', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_name1',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Team Member\'s name', 'allurer'),
        'section' => 'allurer_team_one',
		'priority' => 3,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_desc1', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_desc1',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s short description', 'allurer'),
        'section' => 'allurer_team_one',
		'priority' => 4,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_url1', array (
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_url1',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s follow url', 'allurer'),
        'section' => 'allurer_team_one',
		'priority' => 5,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_button1', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_button1',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Button Text', 'allurer'),
        'section' => 'allurer_team_one',
		'priority' => 6,
        )
    );
	
	// Member Two
	$wp_customize->add_setting('allurer_team_cover2', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_cover2',
            array(
               'label'    => __( 'Upload Profile Cover', 'allurer' ),
               'section'  => 'allurer_team_two',
			   'priority' => 1,
               'settings' => 'allurer_team_cover2',
            )
        )
    );
	
	$wp_customize->add_setting('allurer_team_avatar2', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_avatar2',
            array(
               'label'    => __( 'Upload Profile Avatar', 'allurer' ),
               'section'  => 'allurer_team_two',
			   'priority' => 2,
               'settings' => 'allurer_team_avatar2',
            )
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_name2', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_name2',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Team Member\'s name', 'allurer'),
        'section' => 'allurer_team_two',
		'priority' => 3,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_desc2', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_desc2',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s short description', 'allurer'),
        'section' => 'allurer_team_two',
		'priority' => 4,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_url2', array (
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_url2',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s follow url', 'allurer'),
        'section' => 'allurer_team_two',
		'priority' => 5,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_button2', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_button2',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Button Text', 'allurer'),
        'section' => 'allurer_team_two',
		'priority' => 6,
        )
    );
	
	// Member Three
	$wp_customize->add_setting('allurer_team_cover3', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_cover3',
            array(
               'label'    => __( 'Upload Profile Cover', 'allurer' ),
               'section'  => 'allurer_team_three',
			   'priority' => 1,
               'settings' => 'allurer_team_cover3',
            )
        )
    );
	
	$wp_customize->add_setting('allurer_team_avatar3', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_avatar3',
            array(
               'label'    => __( 'Upload Profile Avatar', 'allurer' ),
               'section'  => 'allurer_team_three',
			   'priority' => 2,
               'settings' => 'allurer_team_avatar3',
            )
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_name3', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_name3',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Team Member\'s name', 'allurer'),
        'section' => 'allurer_team_three',
		'priority' => 3,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_desc3', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_desc3',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s short description', 'allurer'),
        'section' => 'allurer_team_three',
		'priority' => 4,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_url3', array (
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_url3',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s follow url', 'allurer'),
        'section' => 'allurer_team_three',
		'priority' => 5,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_button3', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_button3',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Button Text', 'allurer'),
        'section' => 'allurer_team_three',
		'priority' => 6,
        )
    );
	
	// Member Four
	$wp_customize->add_setting('allurer_team_cover4', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_cover4',
            array(
               'label'    => __( 'Upload Profile Cover', 'allurer' ),
               'section'  => 'allurer_team_four',
			   'priority' => 1,
               'settings' => 'allurer_team_cover4',
            )
        )
    );
	
	$wp_customize->add_setting('allurer_team_avatar4', array(
        'default-image'  => '',
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'allurer_team_avatar4',
            array(
               'label'    => __( 'Upload Profile Avatar', 'allurer' ),
               'section'  => 'allurer_team_four',
			   'priority' => 2,
               'settings' => 'allurer_team_avatar4',
            )
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_name4', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_name4',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Team Member\'s name', 'allurer'),
        'section' => 'allurer_team_four',
		'priority' => 3,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_desc4', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_desc4',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s short description', 'allurer'),
        'section' => 'allurer_team_four',
		'priority' => 4,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_url4', array (
		'sanitize_callback' => 'esc_url_raw',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_url4',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Member\'s follow url', 'allurer'),
        'section' => 'allurer_team_four',
		'priority' => 5,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_member_button4', array (
		'sanitize_callback' => 'sanitize_text_field',
		'capability' => 'edit_theme_options',
    ));
	
	$wp_customize->add_control(
    'allurer_member_button4',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Enter Button Text', 'allurer'),
        'section' => 'allurer_team_four',
		'priority' => 6,
        )
    );

    // End of Member\'s Section	
		
	// Begin Blog Feed section
	$wp_customize->add_setting( 'allurer_feed_layout', array(
		'default' => 'default',
		'sanitize_callback' => 'allurer_sanitize_feed_layout',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'allurer_feed_layout', array(
        'label'    => __( 'Blog Feed Layout', 'allurer' ),
        'section'  => 'allurer_blogfeed_options',
	    'priority' => 1,
        'type'     => 'radio',
        'choices'  => array(
            'default' => __( 'Default - Content/Sidebar', 'allurer' ),
			'grid2'   => __( 'Grid - 2 Columns', 'allurer' ),
			'grid3'   => __( 'Grid - 3 Columns', 'allurer' ),
        ),
    ));
		
	$wp_customize->add_setting(
        'allurer_homefeed_excerpt_length', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_homefeed_excerpt_length',
    array(
        'type' => 'text',
		'default' => '10',
        'label' => __('Blog Feed Excerpt Length', 'allurer'),
        'section' => 'allurer_blogfeed_options',
		'priority' => 2,
        )
    );
	// Default layout
	$wp_customize->add_setting(
        'allurer_default_panel_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_default_panel_height',
    array(
        'type' => 'text',
		'default' => '300',
        'label' => __('Change the default post height - default: 300', 'allurer'),
        'section' => 'allurer_default_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_default_header_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_default_header_height',
    array(
        'type' => 'text',
		'default' => '220',
        'label' => __('Change the default image height - default: 220', 'allurer'),
        'section' => 'allurer_default_options',
		'priority' => 2,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_header_hover_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_header_hover_height',
    array(
        'type' => 'text',
		'default' => '155',
        'label' => __('Change the default image height on hover - default: 155', 'allurer'),
        'section' => 'allurer_default_options',
		'priority' => 3,
        )
    );
	// 2 Post Grid layout
	$wp_customize->add_setting(
        'allurer_grid2_panel_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_grid2_panel_height',
    array(
        'type' => 'text',
		'default' => '261',
        'label' => __('Change the default post height - default: 261', 'allurer'),
        'section' => 'allurer_grid2_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_grid2_header_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_grid2_header_height',
    array(
        'type' => 'text',
		'default' => '180',
        'label' => __('Change the default image height - default: 180', 'allurer'),
        'section' => 'allurer_grid2_options',
		'priority' => 2,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_grid2_header_hover_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_grid2_header_hover_height',
    array(
        'type' => 'text',
		'default' => '105',
        'label' => __('Change the default image height on hover - default: 105', 'allurer'),
        'section' => 'allurer_grid2_options',
		'priority' => 3,
        )
    );
	// 3 Post Grid layout
	$wp_customize->add_setting(
        'allurer_grid3_panel_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_grid3_panel_height',
    array(
        'type' => 'text',
		'default' => '241',
        'label' => __('Change the default post height - default: 241', 'allurer'),
        'section' => 'allurer_grid3_options',
		'priority' => 1,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_grid3_header_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_grid3_header_height',
    array(
        'type' => 'text',
		'default' => '140',
        'label' => __('Change the default image height - default: 140', 'allurer'),
        'section' => 'allurer_grid3_options',
		'priority' => 2,
        )
    );
	
	$wp_customize->add_setting(
        'allurer_grid3_header_hover_height', array(
		'sanitize_callback' => 'allurer_sanitize_integer',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
    'allurer_grid3_header_hover_height',
    array(
        'type' => 'text',
		'default' => '55',
        'label' => __('Change the default image height on hover - default: 55', 'allurer'),
        'section' => 'allurer_grid3_options',
		'priority' => 3,
        )
    );
	
	// End blog feed options
	
	// Single Post Options	
	$wp_customize->add_setting(
        'allurer_single_bio_visibility', array (
		'sanitize_callback' => 'allurer_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        'allurer_single_bio_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide the author bio on single post view?', 'allurer'),
        'section'  => 'allurer_single_options',
		'priority' => 1,
        )
    );

    $wp_customize->add_setting(
        'allurer_related_posts_visibility', array (
		'sanitize_callback' => 'allurer_sanitize_checkbox',
		'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        'allurer_related_posts_visibility',
    array(
        'type'     => 'checkbox',
        'label'    => __('Hide related posts on single post view?', 'allurer'),
        'section'  => 'allurer_single_options',
		'priority' => 2,
        )
    );

    $wp_customize->add_setting( 'allurer_single_thumb', array(
		'default' => 'fullwidth',
		'sanitize_callback' => 'allurer_sanitize_single_thumb_location',
		'capability' => 'edit_theme_options',
	) );
	
	$wp_customize->add_control( 'allurer_single_thumb', array(
        'label'    => __( 'Featured Image Location', 'allurer' ),
        'section'  => 'allurer_single_options',
	    'priority' => 3,
        'type'     => 'radio',
        'choices'  => array(
            'fullwidth' => __( 'Fullwidth - As the page header', 'allurer' ),
			'standard'   => __( 'Standard - Above post', 'allurer' ),
        ),
    ));	
}
add_action( 'customize_register', 'allurer_customize_register' );

/**
 * Sanitize the Integer Input values.
 *
 * @since allurer 1.0.0
 *
 * @param string $input Integer type.
 */
function allurer_sanitize_integer( $input ) {
	return absint( $input );
}

if ( ! function_exists( 'allurer_sanitize_textarea' ) ) :
/**
* Sanitize a string to allow only tags in the allowedtags array.
*/

/**
 * Sanitize textarea
 */
function allurer_sanitize_textarea( $input ) {
	$allowed = array(
		's'			=> array(),
		'br'		=> array(),
		'em'		=> array(),
		'i'			=> array(),
		'strong'	=> array(),
		'b'			=> array(),
		'a'			=> array(
			'href'			=> array(),
			'title'			=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'form'		=> array(
			'id'			=> array(),
			'class'			=> array(),
			'action'		=> array(),
			'method'		=> array(),
			'autocomplete'	=> array(),
			'style'			=> array(),
		),
		'input'		=> array(
			'type'			=> array(),
			'name'			=> array(),
			'class' 		=> array(),
			'id'			=> array(),
			'value'			=> array(),
			'placeholder'	=> array(),
			'tabindex'		=> array(),
			'style'			=> array(),
		),
		'img'		=> array(
			'src'			=> array(),
			'alt'			=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
			'height'		=> array(),
			'width'			=> array(),
		),
		'span'		=> array(
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'p'			=> array(
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'div'		=> array(
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'blockquote' => array(
			'cite'			=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
	);
    return wp_kses( $input, $allowed );
}
endif;

/**
 * Sanitize checkbox
 */
if ( ! function_exists( 'allurer_sanitize_checkbox' ) ) :
	function allurer_sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return 0;
		}
	}
endif;

/**
 * Sanitize feed layout
 */
if ( ! function_exists( 'allurer_sanitize_feed_layout' ) ) :
function allurer_sanitize_feed_layout( $feed_layout ) {
	if ( ! in_array( $feed_layout, array( 'default', 'grid2', 'grid3' ) ) ) {
		$feed_layout = 'default';
	}
	return $feed_layout;
}
endif;

/**
 * Sanitize thumbnail location
 */
if ( ! function_exists( 'allurer_sanitize_single_thumb_location' ) ) :
function allurer_sanitize_single_thumb_location( $thumb_location ) {
	if ( ! in_array( $thumb_location, array( 'fullwidth', 'standard' ) ) ) {
		$thumb_location = 'fullwidth';
	}
	return $thumb_location;
}
endif;

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function allurer_customize_preview_js() {
	wp_enqueue_script( 'allurer_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'allurer_customize_preview_js' );