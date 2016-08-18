<?php

get_header();

	if ( 'posts' == get_option( 'show_on_front' ) ) {		
	    get_template_part( 'content/feed' ); 
	} elseif ( is_page_template( 'templates/full-width.php' ) ){ 
        get_template_part( 'content/content', 'full' );
	} else {
		get_template_part( 'content/content', 'front' );
	}

    // Output the portfolio.
	if ( class_exists( 'Jetpack' ) ) {
	   allurer_projects();
	}
    get_footer(); 
?>