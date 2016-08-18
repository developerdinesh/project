<?php get_header(); ?>

<?php
if( get_theme_mod( 'seopress_breadcrumbx_setting', '1' ) == '1' )
{
	get_template_part( 'template-parts/single', 'breadcrumb' );
}
?>

<div class="<?php if( get_theme_mod( 'seopress_blog_single_layout', 'rights' ) == 'rights' ) { echo 'col-md-8'; } else { echo 'col-md-12'; } ?>">
	<div class="left-content" >
		
		<?php
		if( have_posts() ) : while( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() );
			
			
			if( get_theme_mod( 'seopress_cmnts_on_post', '1' ) == 1 ) { comments_template(); }

			if( get_next_post_link() || get_previous_post_link() )
			{
			?>
				<div class="content-first">
					<nav>
						 <ul class="pager">
							<?php if( get_next_post_link()) { next_post_link( '<li class="previous"> %link </li>', '&larr; %title' ); } ?>
							<?php if( get_previous_post_link()) { previous_post_link( '<li class="next"> %link </li>', '%title &rarr;' ); } ?>
						 </ul>
					</nav>	
				</div>
			<?php
			}
		
		endwhile; endif;
		?>
		
	</div>
</div>
<?php if( get_theme_mod( 'seopress_blog_single_layout', 'rights' ) == 'rights' ) { get_sidebar(); } ?>
<?php get_footer(); ?>