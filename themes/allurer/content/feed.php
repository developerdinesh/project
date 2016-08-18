<section id="post-cards">
<div class="container">
<?php 
do_action( 'allurer_before_home_content' );
    if ( have_posts() ) :	
	if ( get_theme_mod( 'allurer_feed_layout' ) === 'default' ) {    
	/* Start the default Loop */
	?>
	<div class="row">	
    <div class="col-sm-8">
	<?php 
	    while ( have_posts() ) : the_post(); 
	        get_template_part( 'content/content', 'default' );  
	    endwhile;
	?>
	</div>
	<div class="col-sm-4">
	    <?php get_sidebar(); ?>
    </div>
    </div>
    <div class="clearfix"></div>
    <?php 	
	    } elseif ( get_theme_mod( 'allurer_feed_layout' ) === 'grid2' ) {	
            get_template_part( 'content/content', 'grid2' );    
	    } elseif ( get_theme_mod( 'allurer_feed_layout' ) === 'grid3' ) {	
            get_template_part( 'content/content', 'grid3' );    
	    } else { 
	/* Start the home Loop */ ?>
	<div class="row">	
    <div class="col-sm-8">
	<?php 
	    while ( have_posts() ) : the_post(); 
	        get_template_part( 'content/content', 'home' );  
	    endwhile;
	?>
	</div>
	<div class="col-sm-4">
	    <?php get_sidebar(); ?>
    </div>
    </div>
    <div class="clearfix"></div>
	<?php }
        do_action( 'allurer_before_home_pagination' );
	    allurer_pagination();
	    do_action( 'allurer_after_home_pagination' );
	else :
		get_template_part( 'no-results', 'index' );
    endif;	
do_action( 'allurer_after_home_content' ); 
?>
</div>
</section>