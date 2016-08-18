<?php
/**
 * Template Name: Full Width Page
 *
 * @package Allurer
 * @since allurer 1.0.0
 */

get_header(); ?>
<section class="container-fluid" id="section7">
<div class="main row" role="main">
<div class="content col-sm-10 col-sm-offset-1">
    <?php do_action( 'allurer_before_page' );
		get_template_part( 'content/content', 'full' );
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
			comments_template();
    do_action( 'allurer_after_page' ); ?>
</div>
</div><!-- #content -->
</section><!-- #primary -->	
<?php get_footer(); 
?>