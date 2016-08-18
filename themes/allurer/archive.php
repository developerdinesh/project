<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Allurer
 */

get_header(); ?>

<section id="archive-cards">
<div class="container">
    <div class="row">
	<?php if ( get_theme_mod( 'allurer_feed_layout' ) === 'default' ) { ?>
	<div class="col-sm-8">
           
		<?php if ( have_posts() ) : ?>

			<header class="page-header text-center">
				<h3 class="page-title">
				
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'allurer' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'allurer' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'allurer' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'allurer' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'allurer' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'allurer');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'allurer' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'allurer' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'allurer' );

						elseif ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) :
						    _e( 'Portfolio', 'allurer' );
						
						else :
							_e( 'Archives', 'allurer' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$allurer_term_desc = term_description();
					if ( ! empty( $allurer_term_desc ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $allurer_term_desc );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */
			
				
					if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) :
						while ( have_posts() ) : the_post();
						get_template_part( 'content/content', 'portfolio' );
						endwhile;
					else :
					    get_template_part( 'content/feed' );
					endif;
				

			

			allurer_pagination();

		    else :

			get_template_part( 'no-results', 'archive' );

		    endif; ?>
        
		</div>
		<div class="col-sm-4">
            <?php get_sidebar(); ?>
        </div>
		</div>
		<?php } else { ?>
        <div class="col-sm-12">
	    <?php if ( have_posts() ) : ?>

			<header class="page-header text-center">
				<h3 class="page-title">
				
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author: %s', 'allurer' ), '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'allurer' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'allurer' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'allurer' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'allurer' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'allurer');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'allurer' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'allurer' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'allurer' );

						elseif ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) :
						    _e( 'Portfolio', 'allurer' );
						
						else :
							_e( 'Archives', 'allurer' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$allurer_term_desc = term_description();
					if ( ! empty( $allurer_term_desc ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $allurer_term_desc );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */
			
				
					if ( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) :
						while ( have_posts() ) : the_post();
						get_template_part( 'content/content', 'portfolio' );
						endwhile;
					else :
					    get_template_part( 'content/feed' );
					endif;
				

			

			allurer_pagination();

		    else :

			get_template_part( 'no-results', 'archive' );

		    endif; ?>
	    </div>
    <?php } ?> 
   </div>
</section><!-- #primary -->
<?php get_footer();