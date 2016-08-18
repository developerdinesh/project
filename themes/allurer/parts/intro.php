<div class="allurer-column-box-wrapper">
	<div class="allurer-text text-center">
        <?php if (get_theme_mod( 'allurer_intro_title' )) { ?>
		<h2 class="text-center v-center">
            <?php echo wp_kses_post(get_theme_mod( 'allurer_intro_title' )) ;?>
		</h2>
        <?php } else { ?>
        <h2 class="text-center v-center">
            <?php printf( __( 'Subtly Attract, Allurer!', 'allurer' ) ); ?>
		</h2>		
		<?php } ?>        
		<?php if ( get_theme_mod( 'allurer_intro_text_visibility' ) != 1 ) : ?>
		<?php if (get_theme_mod( 'allurer_intro_text' )) { ?>
		    <p class="lead">
			    <?php echo wp_kses_post(get_theme_mod( 'allurer_intro_text' )) ;?>
			</p>
		<?php } else { ?>
		    <p class="lead">
			    <?php printf( __( 'You are unique, Your thoughts are unique, Your content is unique and have the power to attract - That\'s Allurer!...', 'allurer' ) ); ?>
			</p>
        <?php } ?>
		<?php endif; 
		
		if ( get_theme_mod( 'allurer_intro_button_visibility' ) != 1 ) {
		?>
		<div class="btn-group purchase_toggle_buttons">
			<?php $allurer_cta_url = esc_url(get_theme_mod( 'allurer_cta_url' )); ?>
			<?php $allurer_cta_txt = esc_html(get_theme_mod( 'allurer_cta_text' )); ?>
			<?php $allurer_cta_tgt = esc_attr(get_theme_mod( 'allurer_cta_url_target' )); ?>		
			<div class="button text-center">
			    <?php if (get_theme_mod( 'allurer_cta_url' ) || get_theme_mod( 'allurer_cta_text' ) ) { ?>
				    <a href="<?php echo $allurer_cta_url ?>" target="<?php echo $allurer_cta_tgt ?>" type="button" class="btn btn-danger">
				        <?php echo $allurer_cta_txt ?>
				    </a>
				<?php } else { ?>
                    <a href="#" type="button" class="btn btn-danger">
					    <?php printf( __( 'Get Full Details!', 'allurer' ) ); ?>
					</a>
				<?php } ?>
            </div> 				
        </div>
        <?php } ?>		
	</div>
</div>