<?php

if( !class_exists( 'RWMB_Loader' ) )
{
	return;
}


function seopress_page_meta_boxes( $meta_boxes )
{
        $meta_boxes[] = array(
            'title'      => __( 'SEOPress Options for this page', 'seopress' ),
            'post_types' => 'page',
            'fields'     => array(
                array(
                    'id'   => 'seopress_slider_scode',
                    'name' => __( 'Slider Shortcode', 'seopress' ),
                    'type' => 'text',
                ),
				
                array(
                    'id'      => 'seopress_hide_title',
                    'name'    => __( 'Want to hide Headline/Title?', 'seopress' ),
                    'type'    => 'checkbox',
                ),
				
				array(
                    'id'      => 'seopress_hide_footer_widgets',
                    'name'    => __( 'Want to hide Footer Widgets?', 'seopress' ),
                    'type'    => 'checkbox',
                ),
                
            ),
        );
        return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'seopress_page_meta_boxes' );
?>