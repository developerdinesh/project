<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Allurer
 */
 
if (   
        ! is_active_sidebar( 'page' )
    )
return;
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php 
		    do_action( 'allurer_before_page_sidebar' );
			dynamic_sidebar( 'page' );
	        do_action( 'allurer_after_page_sidebar' ); 
		?>
	</div><!-- #secondary -->
