<?php
//nothing to do if post_password_required
if( post_password_required() )
{
	return;
}

// If comments are not open or we have not any comment, do not load up the comment template.
if( !have_comments() && !comments_open() )
{
	return;
}
?>

<div class="content-first" id="commentcount">
	
	<div class="content-second">
		<h3 class="the-title cmnthdlne_ctmzr"><?php echo seopress_comment_panel_headline(); ?></h3>
	</div>
	
	<div class="content-third">
		<div id="comments" class="comments-area">

			<?php if ( have_comments() ) : ?>
			
				<h4 class="comments-title">
					<?php
						printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'seopress' ),
							number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
					?>
				</h4>

				<?php
				wp_list_comments( array(
					'style'		=> 'div',
					'type'		=> 'comment',
					'callback'	=> 'seopress_comments',
				) );
				?>
				
				<?php
				wp_list_comments( array(
					'style'		=> 'div',
					'type'		=> 'pings',
				) );
				?>
				
							
				<?php
				// Are there comments to navigate through?
				if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				?>
				<nav>
				  <ul class="pager">
					<li class="previous"><?php previous_comments_link( __( '&larr; Older Comments', 'seopress' ) ); ?></li>
					<li class="next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'seopress' ) ); ?></li>
				  </ul>
				</nav>
				<!-- .comment-navigation -->
				<?php endif; // Check for comment navigation ?>

			<?php endif; // have_comments() end displaying comments ?>

			<?php
			if( comments_open())
			{
				comment_form();
			}
			else
			{
			?>
				<div class="alert alert-info">
				<?php esc_attr_e( 'Comments are closed for this post !!', 'seopress' ); ?>
				</div>
			<?php
			}
			?>

		</div><!-- #comments -->
	</div>
</div>
