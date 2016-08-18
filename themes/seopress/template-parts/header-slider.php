<?php
if( get_the_ID() )
{
	if( class_exists( 'RWMB_Loader' ) && rwmb_meta( 'seopress_slider_scode', '', $post->ID ) )
	{
		echo do_shortcode( rwmb_meta( 'seopress_slider_scode', '', $post->ID ) );
	}
}
?>