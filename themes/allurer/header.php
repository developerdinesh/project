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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php if ( ! function_exists( '_wp_render_title_tag' ) ) : ?>	
    <title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php endif;
	wp_head(); 
	?>
  </head>
<body <?php body_class(); ?>>

<?php 
    if ( !is_page_template( 'templates/page-builder.php' ) && !is_page_template( 'templates/blank-canvas.php' ) ) {
	    get_template_part( 'top-nav' );
    }	
    if ( is_front_page() ) :
?>
    <section class="container-fluid" id="section-header">
        <div class="col-sm-10 col-sm-offset-1">
		<?php if ( get_theme_mod( 'allurer_intro_visibility' ) != 1 && !is_paged() ) {
            get_template_part( 'parts/intro' ); 
		} ?>
        </div>
	<div class="clearfix"></div>
    </section>
    <?php
	endif;
?>