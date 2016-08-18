<?php get_header(); ?>

	<!-- BEGIN PAGE -->
	<div id="page">
    <div id="page-inner" class="clearfix">
				<div id="content">
				<?php if ( of_get_option('effect_bread' ) =='1') { echo effect_breadcrumbs(); } ?>
<div class="entry" class="clearfix">
		<?php woocommerce_content(); ?>
			      		</div>						
			      		</div>										
<?php get_footer(); ?>
