<nav class="navbar navbar-trans navbar-static-top" role="navigation">
  <div class="container">  
    <div class="col-sm-12">
    <?php if (get_theme_mod( 'allurer_logo_image' )) : ?>
		<a class="brand pull-right" href="<?php echo esc_url( home_url( '/' ) ); ?>">
		    <img src="<?php echo esc_url(get_theme_mod( 'allurer_logo_image' )); ?>" alt="<?php echo esc_html(get_theme_mod( 'allurer_logo_alt_text' )); ?>" />
		</a>
	<?php else : ?>
        <a class="brand pull-right" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    <?php endif; ?>	
    <div class="navbar-header">    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only"><?php _e( 'Toggle navigation', 'allurer' ); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>  
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'nav-container collapse navbar-collapse',
            'container_id'      => 'navbar-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'allurer_bootstrap_navwalker::fallback',
            'walker'            => new allurer_bootstrap_navwalker())
        );
    ?>
	</div>
	
  </div>
</nav>