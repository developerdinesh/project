<?php
if( get_theme_mod( 'seopress_display_top_bar', '1' ) == 1 )
{
?>
<div class="container-fluid bgtoph">
	<div class="container">
		<div class="row pdt10">
		
			<div class="col-md-6">
				<?php
				if( get_theme_mod( 'seopress_tpbr_left_view', '1' ) != 3 )
				{
					if( get_theme_mod( 'seopress_tpbr_left_view', '1' ) == 1 )
					{
					?>
						<div class="topbar_ctmzr">
						<?php
						echo wp_kses_post( get_theme_mod( 'seopress_top_bar_left_content', '<p><span class="fa fa-phone"></span> ' . __( 'Call:', 'seopress' ) . ' <a href="tel:0123456789">0123456789</a> | <span class="fa fa-at"></span> ' . __( 'Email:', 'seopress' ) . ' <a href="mailto:info@example.com">info@example.com</a></p>' ) );
						?>
						</div>
					<?php
					}
					else
					{
					?>
						<p>
						
						<?php
						if( get_theme_mod( 'seopress_tpbr_lft_phne', '0123456789' ) )
						{
						?>
							<span class="fa fa-phone"></span><?php _e( ' Call: ', 'seopress' ) ?><a href="tel:<?php echo esc_attr( get_theme_mod( 'seopress_tpbr_lft_phne', '0123456789' ) ); ?>"><?php echo esc_attr( get_theme_mod( 'seopress_tpbr_lft_phne', '0123456789' ) ); ?></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'seopress_tpbr_lft_phne', '0123456789' ) && get_theme_mod( 'seopress_tpbr_lft_email', 'info@example.com' ) )
						{
							_e( ' | ', 'seopress' );
						}
						?>
						
						<?php
						if( get_theme_mod( 'seopress_tpbr_lft_email', 'info@example.com' ) )
						{
						?>
							<span class="fa fa-at"></span><?php _e( ' Email: ', 'seopress' ) ?><a href="mailto:<?php echo esc_attr( get_theme_mod( 'seopress_tpbr_lft_email', 'info@example.com' ) ); ?>"><?php echo esc_attr( get_theme_mod( 'seopress_tpbr_lft_email', 'info@example.com' ) ); ?></a>
						<?php
						}
						?>
						
						</p>
					<?php
					}
				}
				?>
			</div>
			
			<div class="col-md-6">
				<p class="fr-spsl iconouter">
				
					<?php
					if( class_exists( 'WooCommerce' ) )
					{
					?>
						<?php
						if( get_theme_mod( 'seopress_display_shop_link_top_bar', '1' ) == 1 )
						{
						?>
						<a title="<?php _e( 'Shop', 'seopress' ); ?>" href="<?php echo get_permalink( get_option('woocommerce_shop_page_id') ); ?>"><span class="fa fa-shopping-bag bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'seopress_display_cart_link_top_bar', '1' ) == 1 )
						{
						?>
						<a title="<?php _e( 'Cart', 'seopress' ); ?>" href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>"><span class="fa fa-shopping-cart bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
						
						<?php
						if( get_theme_mod( 'seopress_display_myaccount_link_top_bar', '1' ) == 1 )
						{
						?>
						<a title="<?php _e( 'My Account ', 'seopress' ); ?>" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><span class="fa fa-user bgtoph-icon-clr"></span></a>
						<?php
						}
						?>
					
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_facebook', 'http://facebook.com' ) )
					{
					?>
						<a title="<?php _e( 'Facebook', 'seopress' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_facebook', 'http://facebook.com' ) ); ?>"><span class="fa fa-facebook bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_twitter', 'http://twitter.com' ) )
					{
					?>
						<a title="<?php _e( 'Twitter', 'seopress' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_twitter', 'http://twitter.com' ) ); ?>"><span class="fa fa-twitter bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_youtube', 'http://youtube.com' ) )
					{
					?>
						<a title="<?php _e( 'YouTube', 'seopress' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_youtube', 'http://youtube.com' ) ); ?>"><span class="fa fa-youtube bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_googleplus' ) )
					{
					?>
						<a title="<?php _e( 'Google Plus', 'seopress' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_googleplus' ) ); ?>"><span class="fa fa-google bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_linkedin' ) )
					{
					?>
						<a title="<?php _e( 'Linkedin', 'seopress' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_linkedin' ) ); ?>"><span class="fa fa-linkedin bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_pinterest' ) )
					{
					?>
						<a title="<?php _e( 'Pinterest', 'seopress' ); ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( 'seopress_social_profile_link_pinterest' ) ); ?>"><span class="fa fa-pinterest-p bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					<?php
					if( get_theme_mod( 'seopress_social_profile_link_skype' ) )
					{
					?>
						<a title="<?php _e( 'Skype', 'seopress' ); ?>" href="skype:<?php echo esc_attr( get_theme_mod( 'seopress_social_profile_link_skype' ) ); ?>?add"><span class="fa fa-skype bgtoph-icon-clr"></span></a>
					<?php
					}
					?>
					
					
				</p>
			</div>
			
		</div>
	</div>
</div>
<?php
}
?>