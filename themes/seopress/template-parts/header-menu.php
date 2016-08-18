<div id="navbarouter">
<?php
if( class_exists( 'Mega_Menu' ) && max_mega_menu_is_enabled( 'primary' ) )
{
	wp_nav_menu( array( 'theme_location' => 'primary' ) );
}
else
{
?>
	<nav id="navbar" class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only"><?php esc_attr_e( 'Toggle navigation', 'seopress' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
					
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             =>  2,
				'container'         => 'div',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'container_class'   => 'collapse navbar-collapse',
				'menu_id' 			=> 'primary-menu',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'seopress_nav_fallback',
				'walker'            => new seopress_bootstrap_navwalker()
				));
			?>

		</div>
	</nav>
<?php
}
?>
</div>