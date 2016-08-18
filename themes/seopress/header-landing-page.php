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

<div id="maincontainer" class="container-fluid clearfix">
	<div class="container">
		<!-- row and col will added by page builder -->
		