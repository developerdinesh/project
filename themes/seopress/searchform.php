<form class="form-inline" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
	<div class="form-group">
		<input type="text" name="s" class="form-control mr5" id="terms" placeholder="<?php esc_attr_e( 'Keywords', 'seopress');  ?>" value="<?php echo get_search_query(); ?>" />
		<button type="submit" class="seopressbtn"><?php esc_attr_e( 'Search &raquo;', 'seopress');  ?></button>
	</div>
</form>