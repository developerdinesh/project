<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php do_action( 'seopress_the_head' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Loader icon -->
<?php if( get_theme_mod( 'seopress_loading_icon', '0' ) == 1 ) { ?>
	<div class="seopress-load-icon"></div>
<?php } ?>
<!-- Loader icon Ends -->

<?php get_template_part( 'template-parts/header', 'topbar' ); ?>

<?php get_template_part( 'template-parts/header', 'main' ); ?>

<?php get_template_part( 'template-parts/header', 'menu' ); ?>

<?php get_template_part( 'template-parts/header', 'slider' ); ?>

<?php get_template_part( 'template-parts/header', 'headerimg' ); ?>


<div id="maincontainer" class="container-fluid clearfix"> <!-- start header div 1, will end in footer -->
	<div class="container"> <!-- start header div 2, will end in footer -->
		<!-- row and col will added by page builder -->
		