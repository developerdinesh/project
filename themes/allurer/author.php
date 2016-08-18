<?php get_header(); 
get_template_part( 'parts/author-bio' );
?>

<section id="post-cards">
<div class="container">
    <div class="row">
	<?php if ( get_theme_mod( 'allurer_feed_layout' ) === 'default' ) { ?>
	<div class="col-sm-8">
	<?php if ( have_posts() ) :		

		// Start the Loop.
		while ( have_posts() ) : the_post();

		/*
		 * Include the post format-specific template for the content. If you want to
		 * use this in a child theme, then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */		
		get_template_part( 'content/content', 'author' );		
		endwhile;
		// Previous/next page navigation.
		allurer_pagination();

		else :
		// If no content, include the "No posts found" template.
		get_template_part( 'content', 'none' );

		endif;
	?>
</div>
    <div class="col-sm-4">
	    <?php get_sidebar(); ?>
    </div>
    </div>
    <?php } else { ?>
    <div class="col-sm-12">
	<?php 
		/*
		 * Include the post format-specific template for the content. If you want to
		 * use this in a child theme, then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		if ( get_theme_mod( 'allurer_feed_layout' ) === 'grid2' ) {
		    get_template_part( 'content/content', 'author2' );
		} elseif ( get_theme_mod( 'allurer_feed_layout' ) === 'grid3' ) {
			get_template_part( 'content/content', 'author3' );
		}
		
	?>
</div>
    <?php } ?>    
</div>
</section>

<?php
get_footer();