<?php
/**
 * Template Name: Blank Canvas
 *
 * @package Allurer
 * @since allurer 1.0.0
 */

get_header(); ?>
<section class="container-fluid" id="section-canvas">
	<div class="main row" role="main">
        <div class="content col-sm-10 col-sm-offset-1">
        <?php do_action( 'allurer_before_blank' );
			while ( have_posts() ) : the_post();
				get_template_part( 'content/content', 'blank' );
            endwhile; // end of the loop.
            do_action( 'allurer_after_blank' ); ?>
		</div>
	</div><!-- #content -->
</section><!-- #primary -->

<?php get_footer(); ?>
