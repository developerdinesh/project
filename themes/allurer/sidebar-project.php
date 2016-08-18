<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Allurer
 */
global $post;
$allurer_widget_title = esc_html(get_post_meta( $post->ID, '_allurer_widget_title', true ));
$allurer_proj_url = esc_url(get_post_meta( $post->ID, '_allurer_project_url', true ));
$allurer_proj_type = esc_html(get_post_meta( $post->ID, '_allurer_project_type', true ));
$allurer_proj_status = esc_html(get_post_meta( $post->ID, '_allurer_project_status', true ));
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'allurer_before_sidebar' );
		if (get_post_meta( $post->ID, '_allurer_widget_title', true )) :  ?>
		<h3 class="widget-title">
		    <i class="fa fa-folder-open"></i>
		    <?php echo $allurer_widget_title ?>
		</h3>
		
		<p class="project-info">
		    <i class="fa fa-paint-brush"></i>
			<?php _e( 'Project Type: ', 'allurer'); ?>
		    <?php echo $allurer_proj_type ?>
		</p>
		
		<p class="project-info">
		   <i class="fa fa-cogs"></i>
           <?php _e( 'Project Status: ', 'allurer'); ?>
		   <?php echo $allurer_proj_status ?>
		</p>
		
		<a href="<?php echo $allurer_proj_url ?>" target="_blank">		    
            <p class="project-info-url btn btn-success blue">
			     <i class="fa fa-external-link"></i>
				 <?php _e( 'View Project @ ', 'allurer'); ?>			 
				 <?php the_title(); ?>
			</p>
		</a>
		<?php endif; // end project widget area ?>
		<?php if ( ! dynamic_sidebar( 'portfolio' ) ) : ?>
		<?php endif; // end sidebar widget area ?>
	<?php do_action( 'allurer_after_sidebar' ); ?>
	</div><!-- #secondary -->
