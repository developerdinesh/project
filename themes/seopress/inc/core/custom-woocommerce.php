<?php
if( !class_exists( 'WooCommerce' ) )
{
	return;
}

//seopress_product_per_page
$seopress_product_per_page = absint( get_theme_mod( 'seopress_product_per_page', '12' ) );
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return ' . $seopress_product_per_page . ';' ), 20 );


//seopress_related_product_per_column
if( !function_exists( 'seopress_related_products_args' ) )
{
	function seopress_related_products_args( $args )
	{
		$args['posts_per_page'] = absint( get_theme_mod( 'seopress_product_per_column', '4' ) );
		$args['columns'] = 1;
		return $args;
	}
}
add_filter( 'woocommerce_output_related_products_args', 'seopress_related_products_args' );


//seopress_product_per_column
if( !function_exists( 'seopress_loop_columns' ) )
{
	function seopress_loop_columns()
	{
		return absint( get_theme_mod( 'seopress_product_per_column', '4' ) );
	}
}
add_filter('loop_shop_columns', 'seopress_loop_columns');


//seopress_remove_wc_breadcrumbs
if( !function_exists( 'seopress_remove_wc_breadcrumbs' ) )
{
	function seopress_remove_wc_breadcrumbs()
	{
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}
}
if( get_theme_mod( 'seopress_display_wc_breadcrumbs', '1' ) == 0 )
{
	add_action( 'init', 'seopress_remove_wc_breadcrumbs' );
}

add_filter( 'woocommerce_breadcrumb_defaults', 'seopress_change_breadcrumb_delimiter' );
function seopress_change_breadcrumb_delimiter( $defaults ) {
	$defaults['delimiter'] = ' <span class="woobreadcrumbdelimiter fa fa-chevron-right"></span> ';
	return $defaults;
}

//Next ?
