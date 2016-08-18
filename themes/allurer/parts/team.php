<section id="t-cards">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    
					<div class="panel-heading">
					    <?php if ( get_theme_mod( 'allurer_team_cover1' ) ) { ?>
							<img src="<?php echo get_theme_mod( 'allurer_team_cover1' ); ?>" />
						<?php } else { ?>
						      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" />
						<?php } ?>
                    </div>
					
                    <div class="panel-figure">
                        <?php if ( get_theme_mod( 'allurer_team_avatar1' ) ) { ?>
							<img class="img-responsive img-circle" src="<?php echo get_theme_mod( 'allurer_team_avatar1' ); ?>" />
						<?php } else { ?>
						    <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/73.png" />
						<?php } ?>
                    </div>
                    <div class="panel-body text-center">
                        <?php if ( get_theme_mod( 'allurer_member_name1' ) ) { ?>
							<h4 class="panel-header">
							    <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url1' ); ?>">
							        <?php echo get_theme_mod( 'allurer_member_name1' ); ?>
							    </a>
							</h4>
						<?php } else { ?>
						<h4 class="panel-header"><a href="https://twitter.com/username"><?php _e('@handle', 'allurer' ); ?></a></h4>
						<?php } ?>
						<?php if ( get_theme_mod( 'allurer_member_desc1' ) ) { ?>
                            <small><?php echo get_theme_mod( 'allurer_member_desc1' ); ?></small>
						<?php } else { ?>
						    <small><?php _e('A short description goes here.', 'allurer' ); ?></small>
						<?php } ?>
                    </div>
                    <div class="panel-thumbnails text-center">
                        <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url1' ); ?>" type="button" class="btn btn-danger" role="button">
						    <?php if ( get_theme_mod( 'allurer_member_button1' ) ) { ?>
							    <?php echo get_theme_mod( 'allurer_member_button1' ); ?>
							<?php } else { ?>
							    <?php _e('Follow', 'allurer' ); ?>
							<?php } ?>
						</a>
                    </div>
                </div>   
    		</div>
		    <div class="col-sm-6 col-md-3">
        	    <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <?php if ( get_theme_mod( 'allurer_team_cover2' ) ) { ?>
							<img src="<?php echo get_theme_mod( 'allurer_team_cover2' ); ?>" />
						<?php } else { ?>
						      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" />
						<?php } ?>                        
                    </div>
                    <div class="panel-figure">
                        <?php if ( get_theme_mod( 'allurer_team_avatar2' ) ) { ?>
							<img class="img-responsive img-circle" src="<?php echo get_theme_mod( 'allurer_team_avatar2' ); ?>" />
						<?php } else { ?>
						    <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/74.png" />
						<?php } ?>
                    </div>
                    <div class="panel-body text-center">
                        <?php if ( get_theme_mod( 'allurer_member_name2' ) ) { ?>
							<h4 class="panel-header">
							    <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url2' ); ?>">
							        <?php echo get_theme_mod( 'allurer_member_name2' ); ?>
							    </a>
							</h4>
						<?php } else { ?>
						<h4 class="panel-header"><a href="https://twitter.com/username"><?php _e('@handle', 'allurer' ); ?></a></h4>
						<?php } ?>
						<?php if ( get_theme_mod( 'allurer_member_desc2' ) ) { ?>
                            <small><?php echo get_theme_mod( 'allurer_member_desc2' ); ?></small>
						<?php } else { ?>
						    <small><?php _e('A short description goes here.', 'allurer' ); ?></small>
						<?php } ?>
                    </div>
                    <div class="panel-thumbnails text-center">
                        <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url2' ); ?>" type="button" class="btn btn-danger" role="button">
						    <?php if ( get_theme_mod( 'allurer_member_button2' ) ) { ?>
							    <?php echo get_theme_mod( 'allurer_member_button2' ); ?>
							<?php } else { ?>
							    <?php _e('Follow', 'allurer' ); ?>
							<?php } ?>
						</a>
                    </div>
            	</div>   
    		</div>
            <div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <?php if ( get_theme_mod( 'allurer_team_cover3' ) ) { ?>
							<img src="<?php echo get_theme_mod( 'allurer_team_cover3' ); ?>" />
						<?php } else { ?>
						      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" />
						<?php } ?>                        
                    </div>
                    <div class="panel-figure">
                        <?php if ( get_theme_mod( 'allurer_team_avatar3' ) ) { ?>
							<img class="img-responsive img-circle" src="<?php echo get_theme_mod( 'allurer_team_avatar3' ); ?>" />
						<?php } else { ?>
						    <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/73.png" />
						<?php } ?>
                    </div>
                    <div class="panel-body text-center">
                        <?php if ( get_theme_mod( 'allurer_member_name3' ) ) { ?>
							<h4 class="panel-header">
							    <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url3' ); ?>">
							        <?php echo get_theme_mod( 'allurer_member_name3' ); ?>
							    </a>
							</h4>
						<?php } else { ?>
						<h4 class="panel-header"><a href="https://twitter.com/username"><?php _e('@handle', 'allurer' ); ?></a></h4>
						<?php } ?>
						<?php if ( get_theme_mod( 'allurer_member_desc3' ) ) { ?>
                            <small><?php echo get_theme_mod( 'allurer_member_desc3' ); ?></small>
						<?php } else { ?>
						    <small><?php _e('A short description goes here.', 'allurer' ); ?></small>
						<?php } ?>
                    </div>
                    <div class="panel-thumbnails text-center">
                        <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url3' ); ?>" type="button" class="btn btn-danger" role="button">
						    <?php if ( get_theme_mod( 'allurer_member_button3' ) ) { ?>
							    <?php echo get_theme_mod( 'allurer_member_button3' ); ?>
							<?php } else { ?>
							    <?php _e('Follow', 'allurer' ); ?>
							<?php } ?>
						</a>
                    </div>
            	</div>   
    		</div>
            <div class="col-sm-6 col-md-3">
                <div class="panel panel-default panel-card">
                    <div class="panel-heading">
                        <?php if ( get_theme_mod( 'allurer_team_cover4' ) ) { ?>
							<img src="<?php echo get_theme_mod( 'allurer_team_cover4' ); ?>" />
						<?php } else { ?>
						      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg.jpg" />
						<?php } ?>                        
                    </div>
                    <div class="panel-figure">
                        <?php if ( get_theme_mod( 'allurer_team_avatar4' ) ) { ?>
							<img class="img-responsive img-circle" src="<?php echo get_theme_mod( 'allurer_team_avatar4' ); ?>" />
						<?php } else { ?>
						    <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/images/74.png" />
						<?php } ?>
                    </div>
                    <div class="panel-body text-center">
                        <?php if ( get_theme_mod( 'allurer_member_name4' ) ) { ?>
							<h4 class="panel-header">
							    <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url4' ); ?>">
							        <?php echo get_theme_mod( 'allurer_member_name4' ); ?>
							    </a>
							</h4>
						<?php } else { ?>
						<h4 class="panel-header"><a href="https://twitter.com/username"><?php _e('@handle', 'allurer' ); ?></a></h4>
						<?php } ?>
						<?php if ( get_theme_mod( 'allurer_member_desc4' ) ) { ?>
                            <small><?php echo get_theme_mod( 'allurer_member_desc4' ); ?></small>
						<?php } else { ?>
						    <small><?php _e('A short description goes here.', 'allurer' ); ?></small>
						<?php } ?>
                    </div>
                    <div class="panel-thumbnails text-center">
                        <a target="_blank" href="<?php echo get_theme_mod( 'allurer_member_url4' ); ?>" type="button" class="btn btn-danger" role="button">
						    <?php if ( get_theme_mod( 'allurer_member_button4' ) ) { ?>
							    <?php echo get_theme_mod( 'allurer_member_button4' ); ?>
							<?php } else { ?>
							    <?php _e('Follow', 'allurer' ); ?>
							<?php } ?>
						</a>
                    </div>
            	</div>   
    		</div>
	    </div>
    </div>
</section>