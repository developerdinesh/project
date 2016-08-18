<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Allurer
 */
?>
<section class="container-fluid" id="section3">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
        <?php if ( !is_active_sidebar( 'page' ) ) : ?>
		<div class="col-sm-12">
		<?php else : ?>
		<div class="col-sm-8">
		<?php endif;
 
        while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	        <header class="page-header">
		        <h1 class="page-title"><?php the_title(); ?></h1>
	        </header><!-- .entry-header -->
	
	        <div class="entry-content">
		        <?php the_content(); ?>
		        <?php
			    wp_link_pages( array(
				    'before' => '<div id="pagination" class="btn-group>' . __( 'Pages:', 'allurer' ),
				    'after'  => '</div>',
			    ) );
		       ?>
	        </div><!-- .entry-content -->

	    <div class="clearfix"></div>
        </article><!-- #post-## -->
        <?php endwhile; // end of the loop. ?>
        </div>
        <?php if ( is_active_sidebar( 'page' ) ) { ?>
	    <div class="col-sm-4">
	        <?php get_sidebar( 'page' ); ?>
	    </div>
	    <?php } ?>
        </div>
      </div>
   </div>
</section>