<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Allurer
 */

get_header();
if ( get_theme_mod( 'allurer_single_thumb' ) === 'fullwidth' ) {
if (has_post_thumbnail()) { ?>
<section id="section-single">
    <div class="entry-thumbnail">
		<?php the_post_thumbnail( 'allurer-full-width' ); ?>
	</div>
</section>
<?php } 
} 
?>

<section class="container-fluid" id="section7">

    <div class="row">
      <div class="singular col-sm-10 col-sm-offset-1">
        <div class="row">
        <div class="col-sm-8">
        <?php do_action( 'allurer_before_single' );
		while ( have_posts() ) : the_post();

			get_template_part( 'content/content', 'single' );

            if ( get_theme_mod( 'allurer_single_bio_visibility' ) != 1 ) {
			    get_template_part( 'parts/author-single' );
			}
			
			if ( get_theme_mod( 'allurer_single_bio_visibility' ) != 1 ) {
			    get_template_part( 'related-posts' );
			}

			// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
				
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'allurer' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'allurer' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'allurer' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'allurer' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			endwhile; // end of the loop.
            do_action( 'allurer_after_single' ); ?>
		</div>
          <div class="col-sm-4">
		       <?php get_sidebar( 'single' ); ?>
		  </div>
        </div>
      </div>
   </div>
</section>

<?php get_footer();