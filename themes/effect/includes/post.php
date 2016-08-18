
<?php if(has_post_thumbnail()) : ?>
		<div class="view view-tenth">
		
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('defaultthumb');} else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg" />
<?php } ?>  </a>
  <div class="mask">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry"><?php effect_excerpt('effect_excerptlength_index', 'effect_excerptmore'); ?></div>
					<a href="<?php the_permalink(); ?>"><span class="info"><?php _e('Read More &raquo;', 'effect'); ?></span></a>
                    </div>
                </div>
	</article>
<?php else : ?>
<div class="view view-tenth">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('defaultthumb');} else { ?><img src="<?php echo get_template_directory_uri(); ?>/images/thumb.jpg" />
<?php } ?>  </a>
 <div class="mask">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry"><?php effect_excerpt('effect_excerptlength_index', 'effect_excerptmore'); ?></div>
		 			<a href="<?php the_permalink(); ?>"><span class="info"><?php _e('Read More &raquo;', 'effect'); ?></span></a>
                    </div>
                </div>
	</article>
<?php endif; ?>





