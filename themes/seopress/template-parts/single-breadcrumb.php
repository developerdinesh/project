<?php
//category can not blank for a post, we will add only first category in Breadcrumb
$categories = get_the_category();
$category = esc_attr( $categories[0]->name );
$categorielink = esc_url( get_category_link( $categories[0]->term_id ) );
?>
<nav class="breadcrumb small">
	<span>
		<span typeof="v:Breadcrumb">
		<a property="v:title" rel="v:url" title="<?php esc_attr_e( "Go to Home Page", "seopress" ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?> "><?php _e( 'Home', 'seopress' ); ?></a>
		<span class="sep">&raquo;</span>
			<span typeof="v:Breadcrumb" rel="v:child">
			<a title="<?php esc_attr_e( 'Go to ', 'seopress' ); echo $category; esc_attr_e( 'category', 'seopress' ); ?>" property="v:title" rel="v:url" href="<?php echo $categorielink; ?>"><?php echo $category; ?></a>
			<span class="sep">&raquo;</span>
			<span class="breadcrumb_last"><?php single_post_title(); ?></span>
			</span>
		</span>
	</span>
</nav>