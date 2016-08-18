<?php
/**
 * Template Name: Contributors
 *
 * @package Allurer
 * @since allurer 1.0.0
 */
 
get_header(); ?>
<section class="container-fluid contributors" id="section2">
    <div class="col-sm-10 col-sm-offset-1">
        <?php 
            the_title( '<header class="entry-header text-center v-center"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
		?>
    </div>
	<div class="clearfix"></div>
</section>
<section id="contributor-cards">
    <div class="container">
        <div class="row">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php 
					// Output the authors list.
					allurer_list_authors();
				?>
			</article><!-- #post-## -->

			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</section>
<?php
get_footer();