<?php


if( ! function_exists( 'seopress_entry_meta' ) )
{
	function seopress_entry_meta() {
	?>
	<span class="seopress-entry-meta">
		
		<span class="vcard author"><span class="fn"> <a class="url authorurl" rel="author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" ><?php the_author(); ?></a></span></span>
		
		<?php if( has_category() ) { ?>
		<span class="categoryurl"><?php the_category( ', ' ); ?></span>
		<?php } ?>
		
		<a href="<?php the_permalink(); ?>" ><span class="post-date updated"><?php if( get_theme_mod( 'seopress_post_date_view', '1' ) == 1 ) { echo the_modified_date(); } else { echo the_date(); } ?></span></a>
		
	</span>
	<hr class="mrt5 mrb5" />
	<?php
	}
}


if( !function_exists( 'seopress_post_thumbnail' ) )
{
	function seopress_post_thumbnail()
	{
		if( has_post_thumbnail() )
		{
		?>
			<div class="alignc pdt10 pdb10">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'aligncenter' ) ); ?>
			</div>
		<?php
		}
	}
}



if( !function_exists( 'seopress_comment_panel_headline' ) )
{
	function seopress_comment_panel_headline()
	{
		return wp_kses_post( get_theme_mod( 'seopress_comment_panel_title', __( 'Have any Question or Comment?', 'seopress' ) ) );
	}
}



/**
* Menu Fallback
* =============
* If this function is assigned to the wp_nav_menu's fallback_cb variable
* and a manu has not been assigned to the theme location in the WordPress
* menu manager the function with display nothing to a non-logged in user,
* and will add a link to the WordPress menu manager if logged in as an admin.
*
* @param array $args passed from the wp_nav_menu function.
*
*/
function seopress_nav_fallback( $args )
{
	extract( $args );
	$seopress_output = null;
	if( $container )
	{
		$seopress_output = '<' . $container;
		if ( $container_id )
		{
			$seopress_output .= ' id="' . $container_id . '"';
		}
		if ( $container_class )
		{
			$seopress_output .= ' class="' . $container_class . '"';
		}
		$seopress_output .= '>';
	}
	
	$seopress_output .= '<ul';
	if( $menu_id )
	{
		$seopress_output .= ' id="' . $menu_id . '"';
	}
	if( $menu_class )
	{
		$seopress_output .= ' class="' . $menu_class . '"';
	}
	$seopress_output .= '>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item active"><a href="' . esc_url( home_url( '/' ) ) . '">'. __( 'Home', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'Responsive', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'Fast', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'SEO', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'Adsense', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'Mega Menu', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'Page Builder', 'seopress' ) .'</a></li>';
	
	$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="#">'. __( 'Slider', 'seopress' ) .'</a></li>';
	
	if( current_user_can( 'manage_options' ) )
	{
		$seopress_output .= '<li class="menu-item menu-item-type-custom"><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">'. __( 'Add Menu', 'seopress' ) .'</a></li>';
	}
	
	$seopress_output .= '</ul>';
	if( $container )
	{
		$seopress_output .= '</' . $container . '>';
	}
	echo $seopress_output;
}



function seopress_comments($comment, $args, $depth)
{
   $GLOBALS['comment'] = $comment; ?>
	<div <?php comment_class(); ?>>
		<div class="comment-author vcard">
			<div id="comment-<?php comment_ID(); ?>" class="media" >
				
				<div class="media-left">
					<?php echo get_avatar( $comment, 60 ); ?>
				</div>
						
				<div class="media-body">
					
					<?php if( get_comment_author_url() ) { ?>
						<h6 class="media-heading fn">
							<a class="url" target="_blank" rel="external nofollow" href="<?php echo get_comment_author_url(); ?>"><?php echo get_comment_author(); ?></a>
						</h6>
					<?php } else { ?>
						<h6 class="media-heading fn"><?php echo get_comment_author(); ?></h6>
					<?php } ?>
					
					<?php if ( $comment->comment_approved == '0' ) : ?>
					<p class="alert alert-info" ><?php _e( 'Your comment is awaiting approval.', 'seopress' ); ?></p>
					<?php endif; ?>
							
					<small>
						<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"> <?php printf( __( '%1$s at %2$s', 'seopress' ), get_comment_date(),  get_comment_time() ); ?></a>
					</small>
					
					<?php comment_text(); ?>
					
					<small>
					<?php comment_reply_link( array_merge( $args,
						array(
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
							'reply_text' => __( 'Reply', 'seopress' ),
							'before' => '',
							'after' => ''
							)
					) );
					?>
					
					<?php edit_comment_link( __( 'Edit', 'seopress' ), '', '' ) ?>
					</small>
					
				</div>
			</div>
		</div>
<!--</div> is added by wordpress automatically -->
<?php
}
