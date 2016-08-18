<?php
// Header Template
// Copyright 2015 InsertCart
// Author: sandeep
// Theme: Effect

?>


<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<div class="wrapper">
<div id="pronav" class="nav"> <?php if (of_get_option('effect_sharebut' ) =='1' ) {get_template_part('/includes/social'); } ?>
    <div id="pronav-inner" class="clearfix secondary">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</div>  </div>
	<header id="header">
    <div id="header-inner" class="clearfix">
		<div id="logo">
<?php if (of_get_option( 'effect_logo' )): ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option( 'effect_logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
      			<?php else : ?>        
            <h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
          <?php endif; ?>		
		</div>		
		<div id="banner-top">	<?php echo of_get_option( 'banner_top'); ?></div>		
    </div> <!-- end div #header-inner -->
	</header> <!-- end div #header -->

	<!-- END HEADER -->

	<!-- BEGIN TOP NAVIGATION -->		
<div id="navigation" class="nav"> 
    <div id="navigation-inner" class="clearfix secondary">
		<?php	wp_nav_menu(array('container' => '', 'theme_location' => 'effect-navigation', 'fallback_cb' => 'effect_hdmenu'));?>
		</div>   </div>
	
	
	<?php if ( (function_exists( 'of_get_option' )) && (of_get_option('slidetitle4',true) !=1) ) {
	if ( ( of_get_option('slider_enabled') != 0 ) && ( (is_home() == true) || (is_front_page() == true) ) )  
		{ ?>  <div class="slider-wrapper theme-dark"> 
       <div id="slider" class="nivoSlider">
          <?php
		  		$slider_flag = false;
		  		for ($i=1;$i<6;$i++)
					if ( of_get_option('slide'.$i, true) != "" ) {
						echo "<a href='".esc_url(of_get_option('slideurl'.$i, true))."'><img src='".esc_url(of_get_option('slide'.$i, true))."' title='".esc_attr(of_get_option('slidetitle'.$i, true))."'></a>";    
						$slider_flag = true; }  ?>
        </div>     
    </div>
    <?php
		if ($slider_flag == false)
		{	
			echo "<style>.slider-wrapper { display: none }</style>";
			echo "<h2>Please Add Some Images to Your slider, in order to enable it.</h2>";
		}
	 } //endif
 }//endif
 ?>