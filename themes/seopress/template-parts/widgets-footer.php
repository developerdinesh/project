<?php
//this page/template part will load only if widgets not set 0 in customize (called in footer.php)
$seopress_number_of_footer_widgets = absint( get_theme_mod( 'seopress_number_of_footer_widgets' ) );
?>


<?php
//if set 1 widgets in customize
if( $seopress_number_of_footer_widgets == 1 )
{
	if ( is_active_sidebar( 'seopress_footer_1' ) )
	{
		echo '<div class="row">';
			
			echo '<div class="col-md-12">';
			if ( is_active_sidebar( 'seopress_footer_1' ) )
			{
				dynamic_sidebar( 'seopress_footer_1' );
			}
			echo '</div>';

		echo '</div>';
		echo '<hr class="footerwdgthr" />';
	}
}
?>


<?php
//if set 2 widgets in customize
if( $seopress_number_of_footer_widgets == 2 )
{
	if ( is_active_sidebar( 'seopress_footer_1' ) || is_active_sidebar( 'seopress_footer_2' ) )
	{
		echo '<div class="row">';
			
			echo '<div class="col-md-6">';
			if ( is_active_sidebar( 'seopress_footer_1' ) )
			{
				dynamic_sidebar( 'seopress_footer_1' );
			}
			echo '</div>';
			
			
			echo '<div class="col-md-6">';
			if ( is_active_sidebar( 'seopress_footer_2' ) )
			{
				dynamic_sidebar( 'seopress_footer_2' );
			}
			echo '</div>';

		echo '</div>';
		echo '<hr class="footerwdgthr" />';
	}
}
?>


<?php
//if set 3 widgets in customize
if( $seopress_number_of_footer_widgets == 3 )
{
	if ( is_active_sidebar( 'seopress_footer_1' ) || is_active_sidebar( 'seopress_footer_2' ) || is_active_sidebar( 'seopress_footer_3' ) )
	{
		echo '<div class="row">';
			
			echo '<div class="col-md-4">';
			if ( is_active_sidebar( 'seopress_footer_1' ) )
			{
				dynamic_sidebar( 'seopress_footer_1' );
			}
			echo '</div>';
			
			
			echo '<div class="col-md-4">';
			if ( is_active_sidebar( 'seopress_footer_2' ) )
			{
				dynamic_sidebar( 'seopress_footer_2' );
			}
			echo '</div>';
			
			echo '<div class="col-md-4">';
			if ( is_active_sidebar( 'seopress_footer_3' ) )
			{
				dynamic_sidebar( 'seopress_footer_3' );
			}
			echo '</div>';

		echo '</div>';
		echo '<hr class="footerwdgthr" />';
	}
}
?>


<?php
//if set 4 widgets in customize
if( $seopress_number_of_footer_widgets == 4 )
{
	if ( is_active_sidebar( 'seopress_footer_1' ) || is_active_sidebar( 'seopress_footer_2' ) || is_active_sidebar( 'seopress_footer_3' ) || is_active_sidebar( 'seopress_footer_4' ) )
	{
		echo '<div class="row">';
			
			echo '<div class="col-md-3">';
			if ( is_active_sidebar( 'seopress_footer_1' ) )
			{
				dynamic_sidebar( 'seopress_footer_1' );
			}
			echo '</div>';
			
			
			echo '<div class="col-md-3">';
			if ( is_active_sidebar( 'seopress_footer_2' ) )
			{
				dynamic_sidebar( 'seopress_footer_2' );
			}
			echo '</div>';
			
			echo '<div class="col-md-3">';
			if ( is_active_sidebar( 'seopress_footer_3' ) )
			{
				dynamic_sidebar( 'seopress_footer_3' );
			}
			echo '</div>';
			
			echo '<div class="col-md-3">';
			if ( is_active_sidebar( 'seopress_footer_4' ) )
			{
				dynamic_sidebar( 'seopress_footer_4' );
			}
			echo '</div>';

		echo '</div>';
		echo '<hr class="footerwdgthr" />';
	}
}
?>
