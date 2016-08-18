	
	</div> <!-- end header div 2 -->
</div> <!-- end header div 1 -->

<div class="container-fluid footer pdt10 pdb5 clearfix">
	<div class="container">
	
		<?php
		if( class_exists( 'RWMB_Loader' ) )
		{
			if( rwmb_meta( 'seopress_hide_footer_widgets' ) != 1 )
			{
				$seopress_number_of_footer_widgets = absint( get_theme_mod( 'seopress_number_of_footer_widgets', '0' ) );
				if( $seopress_number_of_footer_widgets != 0 )
				{
					get_template_part( 'template-parts/widgets', 'footer' );
				}
			}
		}
		else
		{
			$seopress_number_of_footer_widgets = absint( get_theme_mod( 'seopress_number_of_footer_widgets', '0' ) );
			if( $seopress_number_of_footer_widgets != 0 )
			{
				get_template_part( 'template-parts/widgets', 'footer' );
			}
		}
		?>
		
		<div class="row mrt10">
		
			<div class="col-md-4 cprtlft_ctmzr">
				<?php echo wp_kses_post( get_theme_mod( 'seopress_left_footer_setting', '<p>' . __( 'All right reserved.', 'seopress' ) . '</p>' ) ); ?>
			</div>
				
			<div class="col-md-4 alignc-spsl cprtcntr_ctmzr">
				<?php echo wp_kses_post( get_theme_mod( 'seopress_center_footer_setting', '<p><a href="#">' . __( 'Terms of Use - Privacy Policy', 'seopress' ) . '</a></p>' ) ); ?>
			</div>
				
			<div class="col-md-4 alignr-spsl">
				
				<p><?php _e( 'WordPress', 'seopress' ); ?> <a href="<?php $seopress_credit_link = 'http://ewptheme.com/product/seopress-pro-wordpress-theme/'; echo esc_url( $seopress_credit_link ); ?>"><span class="fa fa-thumbs-o-up"></span> <?php _e( 'SEOPress Pro', 'seopress' ); ?></a> <?php _e( 'Theme', 'seopress' ); ?></p>
				
			</div>
			
		</div>
	</div>
</div>

<?php if( get_theme_mod( 'seopress_back_to_top', '1' ) == 1 ) { ?>
	<a id="back-to-top" href="#"><span class="fa fa-chevron-up"></span></a>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>