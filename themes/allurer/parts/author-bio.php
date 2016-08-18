<?php
/**
 * The template for displaying Author bios
 *
 * @package Allurer
 * @since Allurer 1.0.0
 */
?>
<section id="author-cards">
<div class="panel panel-default panel-card">
	
	<div class="panel-heading"></div>
	
    <div class="panel-figure">	
		<div class="author-avatar">
		<?php 
		    $author_bio_avatar_size = apply_filters( 'allurer_author_bio_avatar_size', 56 );
		    echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	    </div><!-- .author-avatar -->		        
    </div>
	<?php if ( function_exists( 'allurer_extra_profile' ) ) { ?>
	<div class="panel-body text-center">
	    <h4 class="panel-header"><?php _e( 'Connect with ', 'allurer' ); ?><?php echo get_the_author(); ?></h4>
	</div>
		
	<div class="panel-thumbnails text-center">
	<div class="container">
        <div class="text-center center-block">            
            <a href="<?php echo esc_url(get_the_author_meta( 'facebook' )); ?>"><i id="social" class="fa fa-facebook-square fa-3x social-fb"></i></a>
	        <a href="<?php echo esc_url(get_the_author_meta( 'twitter' )); ?>"><i id="social" class="fa fa-twitter-square fa-3x social-tw"></i></a>
	        <a href="<?php echo esc_url(get_the_author_meta( 'gplus' )); ?>"><i id="social" class="fa fa-google-plus-square fa-3x social-gp"></i></a>
	        <a href="<?php echo esc_url(get_the_author_meta( 'pinterest' )); ?>"><i id="social" class="fa fa-pinterest-square fa-3x social-pt"></i></a>
			<a href="<?php echo esc_url(get_the_author_meta( 'linkedin' )); ?>"><i id="social" class="fa fa-linkedin-square fa-3x social-li"></i></a>
			<a href="<?php echo esc_url(get_the_author_meta( 'youtube' )); ?>"><i id="social" class="fa fa-youtube-square fa-3x social-yt"></i></a>
        </div>		
    </div>
    </div>
	<?php } else { ?>
	<div class="panel-body text-center">
	    <h4 class="panel-header"><?php _e( 'Articles By: ', 'allurer' ); ?><?php echo get_the_author(); ?></h4>
	</div>
	<div class="panel-thumbnails text-center">
	<div class="col-sm-10 col-sm-offset-1">
		<?php the_author_meta( 'description' ); ?>		
	</div>
	</div>
	<?php } ?>
	
</div>	
</section>