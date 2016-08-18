<?php 
if ( is_front_page() ) :
if ( get_theme_mod( 'allurer_team_visibility' ) != 1 && !is_paged() ) {
    get_template_part( 'parts/team' ); ?>
	<div class="clearfix"></div>
<?php }
endif;

if ( !is_page_template( 'templates/page-builder.php' ) && !is_page_template( 'templates/blank-canvas.php' ) ) {
get_sidebar( 'footer' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php do_action( 'allurer_in_before_colophon' ); ?>
		<div class="site-info">
		<div class="container">
			<?php do_action( 'allurer_before_credits' );
			printf( __( 'Proudly Powered By', 'allurer' ) ); ?><a target="_Blank" href="<?php echo esc_url( __( 'http://wordpress.org/', 'allurer' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'allurer' ); ?>"><?php printf( __( ' %s', 'allurer' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme:', 'allurer' ) ); ?><?php printf( __( ' %s', 'allurer' ), 'Allurer By:' ); ?><a target="_blank" href="<?php echo esc_url( __( 'http://www.wpstrapcode.com/', 'allurer' ) ); ?>" title="<?php esc_attr_e( 'Allurer', 'allurer' ); ?>"><?php printf( __( ' %s', 'allurer' ), 'WPStrapCode' ); ?></a>
		<?php do_action( 'allurer_after_credits' ); ?>
	    </div>
	    </div><!-- .site-info -->
<?php do_action( 'allurer_in_after_colophon' ); ?>
</footer><!-- #colophon -->
<?php do_action( 'allurer_below_footer' );
}
wp_footer(); ?>
</body>
</html>