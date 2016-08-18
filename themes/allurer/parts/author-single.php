<?php
/**
 * The template for displaying Author bios
 */
?>
<div id="author-card">
<div class="panel-default">

	<div class="panel-figure">	
		<div class="author-avatar">
		<?php 
		    $author_bio_avatar_size = apply_filters( 'allurer_author_bio_avatar_size', 56 );
		    echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	    </div><!-- .author-avatar -->		        
    </div>
	
	<div class="panel-body text-center">
	    <h4 class="panel-header"><i class="fa fa-user"></i><?php echo get_the_author(); ?></h4>
	</div>
	
	<div class="panel-thumbnails">	
		<?php the_author_meta( 'description' ); ?>
		<div class="clearfix"></div>
        <a type="button" class="btn btn-danger" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php printf( __( 'View all posts by %s', 'allurer' ), get_the_author() ); ?>
		</a>	
	</div>
	
</div>
</div>