<div class="posthd"><?php echo get_cat_name(of_get_option( 'select_categories', '1' )); ?></div>
<?php 
$effectlt_args = array( 
 'ignore_sticky_posts' => true,
 'showposts' => 4,
 'cat' => of_get_option( 'select_categories', '1' ),
'orderby' => 'date',  );
$the_query = new WP_Query( $effectlt_args );
 if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();
			 ?>
								<div class="latest-post">
									<?php if ( has_post_thumbnail() ) {the_post_thumbnail('latestpost');} else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg" /><?php } ?> 
									 <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><br />
									 <div class="desc"><?php effect_excerpt('effect_excerptlength_index', 'effect_excerptmore'); ?></div>
									 <span class="authmt"> <?php effect_post_meta_data(); ?></span>
									 <div class="clear"></div></div>
							<?php endwhile; ?>
							<?php endif; ?>			 <?php wp_reset_postdata(); ?>
			<div style="clear:both;"></div>