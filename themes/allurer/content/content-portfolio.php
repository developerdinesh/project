<?php
/**
 * @package Allurer
 */
global $post;
$allurer_proj_type = esc_html(get_post_meta( $post->ID, '_allurer_project_type', true ));
$allurer_proj_status = esc_html(get_post_meta( $post->ID, '_allurer_project_status', true ));
 ?>

<div class="col-sm-3 col-sm-6">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="project-thumbnail">
			<a href="<?php the_permalink(); ?>" title="">
			    <?php the_post_thumbnail( 'allurer-frontpage' ); ?>
			</a>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
        
		if ( is_front_page() || !is_paged()) : ?>
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
		
		<a href="<?php the_permalink(); ?>">		    
            <p class="project-info-url btn btn-success blue">
			     <i class="fa fa-location-arrow"></i>
				 <?php _e( 'View Full Details ', 'allurer'); ?>
			</p>
		</a>
		<?php endif;
         		
		if ( !is_front_page()) :
		    the_content();
		endif;
		
			wp_link_pages( array(
				'before' => '<div class="page-links btn special">' . __( 'Pages: ', 'allurer' ),
				'after'  => '</div>',
			) );
		?>		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
</div>