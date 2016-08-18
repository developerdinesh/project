<?php 
    while ( have_posts() ) : the_post();
?>
<div class="col-sm-6 col-md-4">
    <div class="panel panel-card">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="panel-heading">
	    <?php if (has_post_thumbnail()) { ?>	
		    <a href="<?php the_permalink(); ?>">
		        <?php the_post_thumbnail( 'allurer-frontpage' ); ?>
		    </a>	
	    <?php } ?>	
        </div>	
        <div class="panel-body text-center">	
	    <?php 
	        the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h1>' );
        ?>		
        </div><!-- .entry-summary -->

        <div class="panel-thumbnails">
            <?php echo allurer_homefeed_excerpt(); ?>
        <div class="clearfix"></div>
        <a href="<?php the_permalink(); ?>" type="button" class="btn btn-danger pull-right" role="button">
            <?php _e( 'Read More &raquo;', 'allurer'); ?>
        </a>
        </div> 	
    </article><!-- #post-## -->
    </div>   
</div>
<?php 
    endwhile;
?>
<div class="clearfix"></div>