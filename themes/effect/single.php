<?php get_header(); ?>
<div id="page">
		<div id="page-inner" class="clearfix">	
		<div id="singlecontent"><?php effect_breadcrumbs(); ?>
			<?php if(have_posts()) : ?>
			<?php while(have_posts())  : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div id="metad"><span class="postmeta_box">
		<?php get_template_part('/includes/postmeta'); ?><?php edit_post_link('Edit', ' &#124; ', ''); ?>
	</span></div>		<div class="entry clearfix">
			<?php if ( of_get_option('effect_ad2') <> "" ) { echo stripslashes(of_get_option('effect_ad2')); } ?>
			<?php the_content(); ?> 
			<div class="gap"></div><?php if ( of_get_option('effect_tags' ) =='1') { ?>	<?php  if (get_the_tags()) :?> <span class="tags"><?php if("the_tags") the_tags(''); ?></span><?php endif;?><?php } ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'effect' ), 'after' => '</div>' ) ); ?></div> 
						
<div class="gap"></div><?php if (of_get_option('effect_author' ) =='1' ) {load_template(get_template_directory() . '/includes/author.php'); } ?>
		<div id="single-nav" class="clearfix">
			<?php previous_post_link('<div id="single-nav-left"> &laquo; <strong>%link</strong></div>'); ?>
		<?php next_post_link('<div id="single-nav-right"><strong>%link</strong> &raquo; </div>'); ?>
        </div>
        <!-- END single-nav -->
			<div class="comments">	<?php comments_template(); ?>	</div> <!-- end div .comments --></article>
			<?php endwhile; ?>
			<?php else : ?>
				<div class="post">
					<h3><?php _e('404 Error&#58; Not Found', 'effect' ); ?></h3>
				</div>
			<?php endif; ?>
		<div id="footerads">
<?php if ( of_get_option('effect_ad1') <> "" ) { echo stripslashes(of_get_option('effect_ad1')); } ?>
</div></div> <!-- end div #content -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>