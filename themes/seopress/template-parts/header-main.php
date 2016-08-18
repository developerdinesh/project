<div class="container-fluid headermain pdt15 pdb15 clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-4" >
				<?php
				if( has_custom_logo() )
				{
				?>
					<div itemscope itemtype="http://schema.org/Organization" >
						<?php the_custom_logo(); ?>
					</div>
				<?php
				}
				else
				{
					echo "<a href='" . esc_url( home_url( '/' ) ) . "' rel='home' >";
					
					echo "<h3>";
					echo esc_attr( get_bloginfo( 'name' ) );
					echo "</h3>";
					
					echo "<p>";
					echo esc_attr( get_bloginfo( 'description' ) );
					echo "</p>";
					
					echo "</a>";
				}
				?>
			</div>
			
			<div class="col-md-8">
				<?php
				if ( is_active_sidebar( 'seopress_sidebar_header' ) )
				{
					dynamic_sidebar( 'seopress_sidebar_header' );
				}
				?>
			</div>

		</div>
	</div>
</div>