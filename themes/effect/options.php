<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}


function optionsframework_options() {

	// Test data
	$test_array = array(
		'3' => __('3', 'effect'),
		'5' => __('5', 'effect'),
		'6' => __('6', 'effect'),
		'8' => __('8', 'effect'),
		'10' => __('10', 'effect')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'effect'),
		'two' => __('Pancake', 'effect'),
		'three' => __('Omelette', 'effect'),
		'four' => __('Crepe', 'effect'),
		'five' => __('Waffle', 'effect')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);
	
	

	// Background Defaults
	$background_defaults = array(
		'color' => '#ffffff',
		'image' => '',
		'repeat' => 'repeat',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '13px',
		'face' => 'false',
		'style' => 'normal',
		'color' => '#555555' );
	$typography_entrytitle = array(
		'size' => '28px',
		'face' => 'false',
		'style' => 'normal',
		'color' => '#555555' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => false,
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
	
	
	
$options[] = array(
            'desc' => '<h2 style="color: #FFF !important;">' . esc_attr__( 'Upgrade to Premium Theme & Enable Full Features!', 'effect' ) . '</h2>
            <li>' . esc_attr__( 'Mobile Responsive Website Design', 'effect' ) . '</li>
            <li>' . esc_attr__( 'SEO Optimized WordPress Theme.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'More Slides for your slider.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Theme Customization help & Support Forum.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Page Speed Optimize for better result.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Color Customize of theme.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Custom Widgets and Functions.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Social Media Integration.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Different Website Layout to Select.', 'effect' ) . '</li>
            <li>' . esc_attr__( 'Many of Other customize feature for your blog or website.', 'effect' ) . '</li>
            <p><span class="buypre"><a href="' . esc_url(__('http://www.insertcart.com/product/effect-wp-theme/','effect')) . '" target="_blank">' . esc_attr__( 'Upgrade to Pro', 'effect' ) . '</a></span><span class="buypred"><a href="' . esc_url(__('http://www.insertcart.com/','effect')) . '" target="_blank">' . esc_attr__( 'Shop More Themes !', 'effect' ) . '</a></span></p>',
            'class' => 'tesingh',
            'type' => 'info');

	$options[] = array(
		'name' => __('Basic Settings', 'effect'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Custom Favicon URL', 'effect'),
		'desc' => __('Upload Favicon Image in format .', 'effect'),
		'id' => 'effect_favicon',
		'std' => '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Upload Site Logo', 'effect'),
		'desc' => __('Upload Website Logo that fit here. Note you can upload any size it will automatic resize .', 'effect'),
		'id' => 'effect_logo',
		'type' => 'upload');
	$options[] = array(	
		'name' =>  __('Customize Theme Background', 'effect'),
		'desc' => __('Header Background color.', 'effect'),
		'id' => 'effect_headerbg',
		'std' => '#ffffff',
		'type' => 'color' );
	$options[] = array(
		'name' => __('Show Author Profile', 'effect'),
		'desc' => __('Check the box to show Author Profile Below the Post and Pages.', 'effect'),
		'id' => 'effect_author',
		'std' => '',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Show Posts from particular categories in Home Page ', 'effect'),
		'desc' => __('Enable Latest Posts', 'effect'),
		'id' => 'effect_latest',
		'std' => '1',
		'type' => 'checkbox');
		
		if ( $options_categories ) {
	$options[] = array(
		'desc' => __('Select a Category', 'effect'),
		'id' => 'select_categories',
		'type' => 'select',
		'options' => $options_categories);
	}
		$options[] = array(
		'desc' => __('Numbers of Posts to Show <b>Premium Version Only </b>', 'effect'),
		'id' => 'effect_latestpostnumber',
		'std' => '4',
		'class' => 'mini',
		'type' => 'text');
	$options[] = array(
		'desc' => __('Categories and Breadcrumb Strip line background Color change <b>Premium Only</b>', 'effect'),
		'id' => 'effect_posthd',
		'std' => '#F88C00',
		'type' => 'color' );			
	$options[] = array(
		'name' => __('Show Popular Posts in Sidebar', 'effect'),
		'desc' => __('Check the box to Show Popular Posts with Thumbnail in Sidebar.', 'effect'),
		'id' => 'effect_popular',
		'std' => '1',
		'type' => 'checkbox');
	$options[] = array(
		'desc' => __('Numbers of Popular posts to display <b>Premium Only</b>', 'effect'),
		'id' => 'effect_popularpostnumber',
		'std' => '5',
		'class' => 'mini',
		'type' => 'text');

			
		$options[] = array(
		'name' => __('Social Media', 'effect'),
		'type' => 'heading');
		$options[] = array(
		'name' => __('Show share buttons on Top Navigation', 'effect'),
		'desc' => __('Check or uncheck Box to show and hide share buttons', 'effect'),
		'id' => 'effect_sharebut',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'name' => __('Facebook Link', 'effect'),
		'desc' => __('Enter your Facebook URL if you have one.', 'effect'),
		'id' => 'effect_fb',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Twitter Follow Link', 'effect'),
		'desc' => __('Enter your Twitter URL if you have one.', 'effect'),
		'id' => 'effect_tw',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('YouTube Channel Link', 'effect'),
		'desc' => __('Enter your YouTube URL if you have one.', 'effect'),
		'id' => 'effect_youtube',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Google+ URL', 'effect'),
		'desc' => __('Enter your Google+ Link if you have one.', 'effect'),
		'id' => 'effect_gp',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('RSS Feed URL', 'effect'),
		'desc' => __('Enter your RSS Feed URL if you have one', 'effect'),
		'id' => 'effect_rss',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Linked In URL', 'effect'),
		'desc' => __('Enter your Linkedin URL if you have one.', 'effect'),
		'id' => 'effect_in',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Pinterest In URL', 'effect'),
		'desc' => __('Enter your Pinterest URL if you have one.', 'effect'),
		'id' => 'effect_pinterest',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Skype In URL', 'effect'),
		'desc' => __('Enter your skype URL if you have one', 'effect'),
		'id' => 'effect_skype',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Vimeo In URL', 'effect'),
		'desc' => __('Enter your vimeo URL if you have one', 'effect'),
		'id' => 'effect_vimeo',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Flickr In URL', 'effect'),
		'desc' => __('Enter your flickr URL if you have one', 'effect'),
		'id' => 'effect_flickr',
		'std' => '',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Dribbble In URL', 'effect'),
		'desc' => __('Enter your dribbble URL if you have one', 'effect'),
		'id' => 'effect_dribbble',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Instagram In URL', 'effect'),
		'desc' => __('Enter your instagram URL if you have one', 'effect'),
		'id' => 'effect_instagram',
		'std' => '',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Slider Settings', 'effect'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Enable Slider', 'effect'),
		'desc' => __('Check this to Enable Slider.', 'effect'),
		'id' => 'slider_enabled',
		'type' => 'checkbox',
		'std' => '0' );
		
	$options[] = array(
		'name' => __('Slider Image 1', 'effect'),
		'desc' => __('First Slide', 'effect'),
		'id' => 'slide1',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'effect'),
		'id' => 'slidetitle1',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'effect'),
		'id' => 'slideurl1',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'effect'),
		'desc' => __('Second Slide', 'effect'),
		'class' => '',
		'id' => 'slide2',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'effect'),
		'id' => 'slidetitle2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'effect'),
		'id' => 'slideurl2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'effect'),
		'desc' => __('Third Slide', 'effect'),
		'id' => 'slide3',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'effect'),
		'id' => 'slidetitle3',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'effect'),
		'id' => 'slideurl3',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 4', 'effect'),
		'desc' => __('Fourth Slide <b>Premium Only</b>', 'effect'),
		'id' => 'slide4',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'effect'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Url', 'effect'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => sprintf( __( '<b>Only Premium User Have More slider </b>  <a href="%1$s" target="_blank">Upgrade to Pro</a>', 'effect' ), 'http://www.insertcart.com/product/effect-wp-theme/' ), 
		'type' => 'info');
	
$options[] = array(
		'name' => __('Custom Styling', 'effect'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Custom CSS', 'effect'),
		'desc' => __('Quickly add some CSS to your theme by adding it to this block.', 'effect'),
		'id' => 'effect_customcss',
		'std' => '',
		'type' => 'textarea');
		
$options[] = array(
		'name' => __('Ads Management', 'effect'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Paste Ads code for header.', 'effect'),
		'desc' => __('Enter your ads code here, preferably units Ex. 728*90 lead-board ad.', 'effect'),
		'id' => 'banner_top',
		'std' => '',
		'type' => 'textarea');
	$options[] = array(
		 'name' => __( 'AD Code For Single Post', 'effect' ),
            'desc' => 'Paste Ad code for single post it show ads below post title and before content.',
            'id' => 'effect_ad2',
            'std' => '',
            'type' => 'textarea');
     $options[] = array(
		'name' => __( 'AD Code For Footer', 'effect' ),
            'desc' => 'Paste Ad Code for Footer Area.',
            'id' => 'effect_ad1',
            'std' => '',
            'type' => 'textarea');	
		
$options[] = array(
		'name' => __('Advance Options (Premium Only)', 'effect'),
		'type' => 'heading');
				
		$options[] = array(
		'desc' => '<span class="pre-title">New Features</span>', 
		'type' => 'info');
		
		$options[] = array(
		'name' => __('Social Share Buttons with count', 'effect'),
		'desc' => __('Display social share buttons with count below post title.', 'effect'),
		'id' => 'effect_flowshare',
		'std' => '0',
		'type' => 'checkbox');
		$options[] = array(
		'name' =>  __('Change Default Thumb Image', 'effect'),
		'desc' => __('Change default thumb Image in Website.', 'effect'),
		'id' => 'effect_defaulthumb',
		'std' => $imagepath . 'thumb.jpg',
		'type' => 'upload' );
				$options[] = array(
		'name' => __('Responsive Website Design', 'effect'),
		'desc' => __('Enable Responsive Design for you website to increase experience on Mobile Devices', 'effect'),
		'id' => 'effect_responsive',
		'std' => '0',
		'type' => 'checkbox');
		$options[] = array(
		'name' => __('Excerpt Length (Number of words display in post description)', 'effect'),
		'desc' => __('Number of words display in every post description Default is 45.', 'effect'),
		'id' => 'effect_excerp',
		'std' => '25',
		'class' => 'mini',
		'type' => 'text');
		
		$options[] = array(
		'name' => __('Home Icon from Top and Main Navigation', 'effect'),
		'desc' => __('Show or Hide Home Icon.', 'effect'),
		'id' => 'effect_homeicon',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => __('Show','effect'),
						'off' => __('Hide','effect')
						));
		
	$options[] = array(
		'name' => __('Footer Widget Area Settings', 'effect'),
		'desc' => __('Show or Hide Footer Widget Area.', 'effect'),
		'id' => 'effect_footerwidget',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => __('Show','effect'),
						'off' => __('Hide','effect')
						));

		$options[] = array(
		'name' => __('Edit "Read More" Button', 'effect'),
		'desc' => __('Show or Hide "Continue reading" or read more Button  Button .', 'effect'),
		'id' => 'effect_countinue',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => __('Show','effect'),
						'off' => __('Hide','effect')
						));
		$options[] = array(
		'desc' => __('Read More Button Color Change.', 'effect'),
		'id' => 'effect_readmorecolor',
		'std' => '#F88C00',
		'type' => 'color' );					
		$options[] = array(
		    'desc' => __('Paste You Custom text for Continue reading <b>Default: Read More &raquo; </b>.', 'effect'),
            'id' => 'effect_fullstory',
            'std' => 'Read More &raquo;',
            'type' => 'text');						
		$options[] = array(
		'desc' => '<span class="pre-title">Color Customize</span>', 
		'type' => 'info');
				
		$options[] = array(	
		'name' => __('Top Menu Colors Customize', 'effect'),
		'desc' => __('Top menu background.', 'effect'),
		'id' => 'effect_botborder',
		'std' => '#ffffff',
		'type' => 'color' );
		
		$options[] = array(	
		'desc' => __('Top Menu Hover color.', 'effect'),
		'id' => 'effect_topnavibgcolorh',
		'std' => '#E9E9E9',
		'type' => 'color' );
		$options[] = array(	
		'desc' => __('Top Menu Text Color.', 'effect'),
		'id' => 'effect_toptext',
		'std' => '#333333',
		'type' => 'color' );
		
		$options[] = array(
		'name' => __('Main Navigation Colors Customize', 'effect'),
		'desc' => __('Main Navigation Background.', 'effect'),
		'id' => 'effect_mainnavibg',
		'std' => '#424242',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Bottom Border color.', 'effect'),
		'id' => 'effect_naviborder',
		'std' => '#F88C00',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Main Navigation hover Color.', 'effect'),
		'id' => 'effect_mainnavilinkcolor',
		'std' => '#F88C00',
		'type' => 'color' );
		
		$options[] = array(
		'desc' => __('Main Navigation Text Color', 'effect'),
		'id' => 'effect_navilinks',
		'std' => '#ffffff',
		'type' => 'color' );
		$options[] = array(
		'name' => __('Change Link Color', 'effect'),
		'desc' => __('Select Links Color.', 'effect'),
		'id' => 'effect_linkcolor',
		'std' => '#2D89A7',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Change Link Hover Color.', 'effect'),
		'id' => 'effect_linkhover',
		'std' => '#F88C00',
		'type' => 'color' );
		$options[] = array(
		'name' => __('Other customize color & design', 'effect'),
		'desc' => __('Sidebar Widget heading background Color change', 'effect'),
		'id' => 'effect_sidebarbg',
		'std' => '#F88C00',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Next and Previous Post link Background color', 'effect'),
		'id' => 'effect_nextprev',
		'std' => '#359BED',
		'type' => 'color' );
		$options[] = array(
		'name' => __('Page Number Navigation Color Change ', 'effect'),
		'desc' => __('Change Current Page Background.', 'effect'),
		'id' => 'effect_pageanvibg',
		'std' => '#333333',
		'type' => 'color' );
		$options[] = array(
			'desc' => __('Change background color of other pages.', 'effect'),
		'id' => 'effect_pageanvia',
		'std' => '#F88C00',
		'type' => 'color' );
		$options[] = array(
		'desc' => __('Numbers text Color Change.', 'effect'),
		'id' => 'effect_pageanvilink',
		'std' => '#ffffff',
		'type' => 'color' );
		$options[] = array(	
		'name' => __('Footer Area Color Customize', 'effect'),
		'desc' => __('Footer Widget background color.', 'effect'),
		'id' => 'effect_ftwidget',
		'std' => '#333333',
		'type' => 'color' );
	
	$options[] = array(	
		'desc' => __('Text Color.', 'effect'),
		'id' => 'effect_ftwidgettext',
		'std' => '#ffffff',
		'type' => 'color' );
		
		$options[] = array(
		'name' => __('Edit Categories & date/author stamp from thumbnail', 'effect'),
		'desc' => __('Show or Hide Date & Author Stamp from Thumbnail in index and other archive pages .', 'effect'),
		'id' => 'effect_authstamp',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => __('Show','effect'),
						'off' => __('Hide','effect')
						));
		
		$options[] = array(				
		'desc' => __('Show or Hide Categories Button from Thumbnail in index and other archive pages .', 'effect'),
		'id' => 'effect_homecat',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => __('Show','effect'),
						'off' => __('Hide','effect')
						));
		$options[] = array(
		'desc' => __('Categories Background Color Change.', 'effect'),
		'id' => 'effect_homecatbg',
		'std' => '#4DD247',
		'type' => 'color' );		
	
		
		
		
		$options[] = array( 'name' => __('Customize Theme Fonts', 'effect'),
		'desc' => __('Change <b>Body (Theme) Font</b> color and Size.', 'effect'),
		'id' => "effect_bodyfonts",
		'std' => $typography_defaults,
		'type' => 'typography' );
		$options[] = array( 
		'desc' => __('Change <b>H1 Posts and Pages Title </b>Font color or Size.', 'effect'),
		'id' => "effect_entrytitle",
		'std' => $typography_entrytitle,
		'type' => 'typography' );
			
					
		$options[] = array(
		'name' => __('Website layout', 'effect'),
		'desc' => __('Select Images for Website layout.', 'effect'),
		'id' => "effect_layout",
		'std' => "s1",
		'type' => "images",
		'options' => array(
			's1' => $imagepath . 's1.png',
			's2' => $imagepath . 's2.png',
			'sl' => $imagepath . 'sl.png',
			
			)
	);
		$options[] = array(
		'desc' => __('<span class="pre-titleseo">SEO & Meta Options</span>', 'effect'), 
		'type' => 'info');
		$options[] = array(
		'name' => __('Google+ Publisher URL', 'effect'),
		'desc' => __('Paste Your Google Publisher URL https://plus.google.com/YOUR-GOOGLE+ID/posts.', 'effect'),
		'id' => 'effect_googlepub',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Bing Site Verification', 'effect'),
		'desc' => __('Enter the ID only. It will be verified by Yahoo as well.', 'effect'),
		'id' => 'effect_bingvari',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Google Site verification', 'effect'),
		'desc' => __('Enter your ID only.', 'effect'),
		'id' => 'effect_googlevari',
		'std' => '',
		'type' => 'text');
		$options[] = array(
		'name' => __('Footer Script Area', 'effect'),
		'desc' => __('Enter Code for footer like google analytic.', 'effect'),
		'id' => 'effect_scriptfooter',
		'std' => '',
		'type' => 'textarea');
		
		
		$options[] = array(
		'desc' => __('<span class="pre-titlecus">Customization</span>', 'effect'),
		'type' => 'info');
		
		$options[] = array(
		'name' => __('Breadcrumbs Options', 'effect'),
		'desc' => __('Check Box to Enable or Disable Breadcrumbs.', 'effect'),
		'id' => 'effect_bread',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'name' => __('Enable Post Meta Info.', 'effect'),
		'desc' => __('Check Box to Show or Hide Tags ', 'effect'),
		'id' => 'effect_tags',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'desc' => __('Check Box to Show or Hide Comments ', 'effect'),
		'id' => 'effect_comments',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'desc' => __('Check Box to Show or Hide Categories ', 'effect'),
		'id' => 'effect_categrious',
		'std' => '1',
		'type' => 'checkbox');
		$options[] = array(
		'desc' => __('Check Box to Show or Hide Author and date ', 'effect'),
		'id' => 'effect_autodate',
		'std' => '1',
		'type' => 'checkbox');
			
		$options[] = array(
		'name' => __('Next and Previous Post Link', 'effect'),
		'desc' => __('Show or Hide Next and Previous Post Link below every post.', 'effect'),
		'id' => 'effect_links',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
		$options[] = array(
		'name' => __('Show or Hide Copy Right Text', 'effect'),
		'desc' => __('Show or Hide Copyright Text and Link.', 'effect'),
		'id' => 'effect_copyright',
		'std' => 'on',
		'type' => 'radio',
		'options' => array(
						'on' => 'Show',
						'off' => 'Hide'
						));
		$options[] = array(
            'desc' => __('Footer Copyright text change.','effect'),
            'id' => 'effect_ftarea',
            'std' => esc_attr__( 'Copyright  &#169; 2016 Designed by: ', 'effect' ) . '<a href="' . esc_url(__('http://www.insertcart.com/product/effect-wp-theme/','effect')) . '" title="' . esc_attr__( 'insertcart.com', 'effect' ) . '">' . esc_attr__( 'insertcart.com', 'effect' ) . '</a>',
            'type' => 'textarea');
			
	$options[] = array(
		'name' => __('Theme Support', 'effect'),
		'type' => 'heading' );


	$options[] = array(
			 'desc' => '<h2>' . esc_attr__( 'Need support about theme go to Support forum', 'effect' ) . '</h2>' . esc_attr__( 'If you have any problem in using options then please read theme documentation first ', 'effect' ) . '<a href="' . esc_url(__('http://www.insertcart.com/effect-wordpress-theme-setup-guide-and-documentation/','effect')) . '" target="_blank">' . esc_attr__( 'Theme Documentation', 'effect' ) . '</a>  ' . esc_attr__( 'Before you contact us via directly please use support forum also We recommend you to use some WordPress plugin like "Regenerate Thumbnails" WordPress SEO and W3tc to optimize and get great website experience.', 'effect' ) . '
            <p><span class="buypre"><a href="' . esc_url(__('http://forum.insertcart.com','effect')) . '" target="_blank">' . esc_attr__( 'Support Forum', 'effect' ) . '</a></span></p></br>
			<ol>
			<li><a href="' . esc_url(__('http://www.insertcart.com/faq-frequently-asked-question-theme-setup/','effect')) . '" target="_blank">' . esc_attr__( 'FAQ - Frequently Asked Question About Theme Setup', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/making-post-by-importing-docx-file-content-into-post-images/','effect')) . '" target="_blank">' . esc_attr__( 'Making Post by Importing Docx File Content into Post Images', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/how-to-secure-website-made-these-changes-in-htaccess/','effect')) . '" target="_blank">' . esc_attr__( 'How to Secure Website? Made these changes in .htaccess', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/how-to-add-icon-navigation-menu/','effect')) . '" target="_blank">' . esc_attr__( 'How to Add Icon Navigation Menu', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/how-to-install-a-required-or-recommended-plugin/','effect')) . '" target="_blank">' . esc_attr__( 'How to Install a Required or Recommended Plugin', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/fix-woocommerce-pages-issue-missing-reinstall/','effect')) . '" target="_blank">' . esc_attr__( 'Fix Woocommerce Pages Issue Missing or reinstall', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/get-current-page-url-in-wordpress/','effect')) . '" target="_blank">' . esc_attr__( 'Get Current Page URL in WordPress', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/add-ad-code-after-every-few-post/','effect')) . '" target="_blank">' . esc_attr__( 'Add Ad Code After Every Few Post', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/add-icons-wordpress-customizer-setting-panel/','effect')) . '" target="_blank">' . esc_attr__( 'Add Icons to WordPress Customizer Setting Panel', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/woocommerce-quantity-before-add-to-cart-and-product-update/','effect')) . '" target="_blank">' . esc_attr__( 'WooCommerce Quantity Before Add to Cart and Product Update', 'effect' ) . '</a></li>
			<li><a href="' . esc_url(__('http://www.insertcart.com/official-social-share-button-script/','effect')) . '" target="_blank">' . esc_attr__( 'Official Social Share Button Script', 'effect' ) . '</a></li>
			</ol>',
            'type' => 'info');	
		
		
	return $options;
}