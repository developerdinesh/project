<?php

/* Display a notice that can be dismissed */

// display notice and link for dismiss, if not pressed dismiss
if( !function_exists( 'seopress_admin_notice' ) )
{
	function seopress_admin_notice() {
		global $current_user ;
		$user_id = $current_user->ID;
		
		/* Check that the user hasn't already clicked to ignore the message */
		if( !get_user_meta( $user_id, 'seopress_ignore_notice' ) )
		{
			echo '<div class="updated"><p>';
			
		printf( __( 'Thank you for activating SEOPress theme. Let start form <a target="_blank" href="%1$s">Online Documentation</a> | <a target="_blank" href="%2$s">Visit Demo</a> | <a href="%3$s">Hide This Notice</a>', 'seopress' ), 'http://ewptheme.com/category/seopress-free/', 'http://seopress.ewptheme.com/', '?seopress_notics_ignore=0' );
			
			echo "</p></div>";
		}
	}
}
add_action( 'admin_notices', 'seopress_admin_notice' );


// if link of ignore notice clicked, store user meta
if( !function_exists( 'seopress_handle_notic' ) )
{
	function seopress_handle_notic()
	{
		global $current_user;
		$user_id = $current_user->ID;
		if( isset( $_GET['seopress_notics_ignore']) && '0' == $_GET['seopress_notics_ignore'] )
		{
			add_user_meta( $user_id, 'seopress_ignore_notice', 'true', true );
		}
	}
}
add_action( 'admin_init', 'seopress_handle_notic' );

//delete seopress_handle_notic user meta data on theme switch
if( !function_exists( 'seopress_delete_user_meta_ignore_notice' ) )
{
	function seopress_delete_user_meta_ignore_notice()
	{
		global $current_user;
		$user_id = $current_user->ID;
		if( get_user_meta( $user_id, 'seopress_ignore_notice' ) )
		{
			delete_user_meta( $user_id, 'seopress_ignore_notice' );
		}
	}
}
add_action('switch_theme', 'seopress_delete_user_meta_ignore_notice');


/* Display a notice that can be dismissed END */

//custom excerpt length
if( !function_exists( 'seopress_custom_excerpt_length' ) )
{
	function seopress_custom_excerpt_length( $length )
	{
		return absint( get_theme_mod( 'seopress_excerpt_length', '40' ) );
	}
}
add_filter( 'excerpt_length', 'seopress_custom_excerpt_length', 999 );


//custom excerpt last ...... replace
if( !function_exists( 'seopress_excerpt_more' ) )
{
	function seopress_excerpt_more( $more )
	{
		global $post;
		return ' <a href="' . get_permalink( $post->ID ) . '"> ' . __( 'Read more', 'seopress' ) . '&#8230;</a>';
	}
}
add_filter( 'excerpt_more', 'seopress_excerpt_more', 1001 );


//add filter to next link
if( !function_exists( 'seopress_next_post_attr' ) )
{
	function seopress_next_post_attr()
	{
		return 'rel="prev"';
	}
}
add_filter( 'next_posts_link_attributes', 'seopress_next_post_attr' );


//add filter to prev link
if( !function_exists( 'seopress_prev_post_attr' ) )
{
	function seopress_prev_post_attr()
	{
		return 'rel="next"';
	}
}
add_filter( 'previous_posts_link_attributes', 'seopress_prev_post_attr' );


//add class="table table-bordered" to default calendar
if( !function_exists( 'seopress_calendar_modify' ) )
{
	function seopress_calendar_modify( $html )
	{
		return str_replace( 'id="wp-calendar"', 'id="wp-calendar" class="table table-bordered"', $html );
	}
}
add_filter( 'get_calendar', 'seopress_calendar_modify' );



if( !function_exists( 'seopress_comment_form_fields' ) )
{
	function seopress_comment_form_fields( $fields )
	{
		$commenter = wp_get_current_commenter();
		$req      = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
			
		$fields   =  array(

			'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'seopress' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input class="form-control" placeholder="' . __( 'Your name', 'seopress' ) . '" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
			
			'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'seopress' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input class="form-control" placeholder="' . __( 'Your email', 'seopress' ) . '" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
			
			'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'seopress' ) . '</label> ' .
			'<input class="form-control" placeholder="' . __( 'Your website', 'seopress' ) . '" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'   
			
			);
	return $fields;
	}
}
add_filter( 'comment_form_default_fields', 'seopress_comment_form_fields' );


if( !function_exists( 'seopress_comment_form' ) )
{
	function seopress_comment_form( $args )
	{
		$args['comment_field'] = '<div class="form-group comment-form-comment">
		<label for="comment">' . _x( 'Comment', 'noun' , 'seopress' ) . '<span class="required"> *</span></label> 
		<textarea class="form-control" placeholder="' . __( 'Your comment', 'seopress' ) . '" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
		</div>';
		
		$args['class_submit'] = 'seopressbtn'; // since WP 4.1
		
		return $args;
	}
}
add_filter( 'comment_form_defaults', 'seopress_comment_form' );
	

/*
* Add SEO Press Options menu
* @ add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function );
*/
if( !function_exists ( 'seopress_theme_options' ) )
{
	function seopress_theme_options()
	{
		add_theme_page( __( 'SEOPRESS Options', 'seopress') , __( 'SEOPRESS Options', 'seopress') , 'edit_theme_options', 'customize.php?autofocus[panel]=seopress_options', '' );
	}
}
add_action( 'admin_menu', 'seopress_theme_options' );


/*
* Add Custom Shortcut Links to WordPress Toolbar
*/
if( !function_exists( 'seopress_toolbar_link' ) )
{
	function seopress_toolbar_link( $wp_admin_bar )
	{
		// Don't display menu in admin bar if current_user_can not manage_options
		if( !current_user_can( 'manage_options' ) )
		{
			return;
		}
		
		// Add main link 
		$args = array(
			'id' => 'seopress_toolbar_link_main',
			'title' => 'SEOPress Options', 
			'href' => get_dashboard_url() . 'customize.php?autofocus[panel]=seopress_options', 
		);
		$wp_admin_bar->add_node($args);
		
		// Add the first child link 
		$args = array(
			'id' => 'seopress_toolbar_link_pro',
			'title' => 'Try SEOPress Pro', 
			'href' => 'http://ewptheme.com/product/seopress-pro-wordpress-theme/',
			'parent' => 'seopress_toolbar_link_main', 
			'meta' => array(
				'target' => '_blank'
				)
		);
		$wp_admin_bar->add_node($args);
		
	}
}
add_action( 'admin_bar_menu', 'seopress_toolbar_link', 999 );


function seopress_the_head_contain()
{
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<style type="text/css">
	.seopress-load-icon
	{
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url( "<?php if( get_theme_mod( 'seopress_loading_icon_img' ) ) { echo esc_url( get_theme_mod( 'seopress_loading_icon_img' ) ); } else { echo esc_url( get_template_directory_uri() . '/images/Preloader_2.gif' ); } ?>" ) center no-repeat #fff;
	}
	</style>
	<?php
}
add_action( 'seopress_the_head', 'seopress_the_head_contain' );

