<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function effect_notice() {
	if ( isset( $_GET['activated'] ) ) {
		$return = '<div class="updated activation"><p><strong>';
					$my_theme = wp_get_theme();
		if ( isset( $_GET['previewed'] ) ) {
			$return .= sprintf( __( 'Settings saved and %s activated successfully.', 'effect' ), $my_theme->get( 'Name' ) );
		} else {
			$return .= sprintf( __( '%s activated successfully.', 'effect' ), $my_theme->get( 'Name' ) );
		}
		$return .= '</strong> <a href="' . esc_url(home_url('/')) . '">' . __( 'Visit site', 'effect' ) . '</a></p>';
		$return .= '<p>';
		$return .= ' <a class="button button-primary theme-options" href="' . admin_url( 'themes.php?page=options-framework' ) . '">' . __( 'Theme Options', 'effect' ) . '</a>';
		$return .= ' <a class="button button-primary help" href="www.insertcart.com">' . __( 'Need Help?', 'effect' ) . '</a>';
		$return .= '</p></div>';
		echo $return;
	}
}
add_action( 'admin_notices', 'effect_notice' );

/*
 * Hide core theme activation message.
 */
function effect_admincss() { ?>
	<style>
	.themes-php #message2 {
		display: none;
	}
	.themes-php div.activation a {
		text-decoration: none;
	}
	</style>
<?php }
add_action( 'admin_head', 'effect_admincss' );
