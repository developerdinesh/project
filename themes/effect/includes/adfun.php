</div></div> 
<div id="bottom-menu">
<div id="bottom-menu-inner" class="clearfix">
<div id="bottom-menu-1">
<?php dynamic_sidebar('effectbm1'); ?>
</div> <!-- end div #bottom-menu-left -->
<div id="bottom-menu-2">
	<?php dynamic_sidebar('effectbm2'); ?>
</div> <!-- end div #bottom-menu-center -->
<div id="bottom-menu-4">
	<?php dynamic_sidebar('effectbm3'); ?>
</div> </div> </div>

	<footer id="footer">
	<div id="footer-inner" class="clearfix">
	<a href="<?php echo esc_url( home_url( ));?>/" title="<?php bloginfo('name');?>" ><?php bloginfo('name');?></a> <?php _e('Copyright &#169;', 'effect'); ?> <?php echo date('Y');?> <a href="<?php echo esc_url( __( 'http://www.insertcart.com/product/effect-wp-theme/', 'effect' ) ); ?>" title="<?php esc_attr_e( 'insertcart.com', 'effect' ); ?>"><?php printf( __( '| Effect Theme %s', 'effect' ),''); ?></a>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu','container_class' => '','menu_id' => 'footerhorizontal',    'echo' => true,'depth' =>'1','fallback_cb' => false ) ); ?>	
	</div> <!-- end div #footer-inner -->
	</footer> <!-- end div #footer -->
	<!-- END FOOTER -->
		
