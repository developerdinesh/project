<!-- Services Section -->
    <section id="section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                <?php if (get_theme_mod('col_heading','') != '') { ?>
                        <h2 class="section-heading"><?php echo esc_html(get_theme_mod('col_heading')); ?></h2>
                        <?php } else { ?>
                            <h2 class="section-heading"><?php _e('Services' ,'doctorsline'); ?></h2>
                        <?php } ?>
                        <?php if (get_theme_mod('col_sub','') != '') { ?>
                            <h3 class="section-subheading text-muted"><?php echo esc_html(get_theme_mod('col_sub','')); ?></h3>
                        <?php } else { ?>
                            <h3 class="section-subheading text-muted"><?php _e('Phasellus elementum odio faucibus diam sollicitudin' ,'doctorsline'); ?></h3>
                        <?php } ?>
                </div>
            </div>
            <div class="row text-center servies">
            
                <div class="col-md-4">
                <div class="service-deg">
                   <span class="fa-stack fa-4x">
                    <a href="<?php
                                if (get_theme_mod('first_feature_link','#') != '') {
                                    echo esc_url(get_theme_mod('first_feature_link','#'));
                                }
                                ?>">
                        <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i> -->
                        <i class="fa <?php
                        if (get_theme_mod('first_feature_font_icon','') != '') {
                            echo esc_html(get_theme_mod('first_feature_font_icon',''));
                        } else {
                            ?> fa-microphone <?php } ?> fa-stack-1x fa-inverse"></i></a>
                    </span>
                    <?php if (get_theme_mod('first_feature_heading','') != '') { ?>
                                <a href="<?php
                                if (get_theme_mod('first_feature_link','') != '') {
                                    echo esc_url(get_theme_mod('first_feature_link',''));
                                } else {
                                    echo "#";
                                }
                                ?>"><h4 class="service-heading"><?php echo esc_html(get_theme_mod('first_feature_heading','')); ?></h4></a>
                               <?php } else { ?>
                                <a href="#"><h4 class="service-heading"><?php _e('Emergency Care' ,'doctorsline'); ?></h4></a>
                                 <?php } if (get_theme_mod('first_feature_desc','') != '') { ?>
                                <p class="text-muted"><?php echo esc_html(get_theme_mod('first_feature_desc','')); ?></p>
                            <?php } else { ?>
                               <p class="text-muted"><?php _e('An emergency department (ED), also known as an accident & emergency department (A&E), emergency room (ER) or casualty department.' ,'doctorsline'); ?></p>
                            <?php } ?>
                </div>
                </div>
                <div class="col-md-4">
                <div class="service-deg-2">
                    <span class="fa-stack fa-4x">
                     <a href="<?php
                                if (get_theme_mod('second_feature_link','#') != '') {
                                    echo esc_url(get_theme_mod('second_feature_link','#'));
                                }
                                ?>">
                        <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i> -->
                        <i class="fa <?php
                                if (get_theme_mod('second_feature_font_icon','') != '') {
                                    echo esc_html(get_theme_mod('second_feature_font_icon',''));
                                } else {
                                    ?> fa-rocket <?php } ?> fa-stack-1x fa-inverse"></i>
                                    </a>
                    </span>
                    <?php if (get_theme_mod('second_feature_heading','') != '') { ?>
                                <a href="<?php
                                if (get_theme_mod('second_feature_link','') != '') {
                                    echo esc_url(get_theme_mod('second_feature_link',''));
                                } else {
                                    echo "#";
                                }
                                ?>"><h4 class="service-heading"><?php echo esc_html(get_theme_mod('second_feature_heading','')); ?></h4></a>
                               <?php } else { ?>
                                <a href="#"><h4 class="service-heading"><?php _e('Medical Treatment' ,'doctorsline'); ?></h4></a>
                                 <?php } if (get_theme_mod('second_feature_desc','') != '') { ?>
                                <p class="text-muted"><?php echo esc_html(get_theme_mod('second_feature_desc','')); ?></p>
                            <?php } else { ?>
                               <p class="text-muted"><?php _e('Poor physical fitness ranks right behind smoking as leading risk factors for an early death, new long-term research suggests.' ,'doctorsline'); ?></p>
                            <?php } ?>
                </div>
                </div>
                <div class="col-md-4">
                <div class="service-deg-3">
                    <span class="fa-stack fa-4x">
                       <a href="<?php
                                if (get_theme_mod('third_feature_link','#') != '') {
                                    echo esc_url(get_theme_mod('third_feature_link','#'));
                                }
                                ?>"> <!-- <i class="fa fa-circle fa-stack-2x text-primary"></i> -->
                        <i class="fa <?php
                                if (get_theme_mod('third_feature_font_icon','') != '') {
                                    echo esc_html(get_theme_mod('third_feature_font_icon',''));
                                } else {
                                    ?>fa-signal <?php } ?> fa-stack-1x fa-inverse"></i>
                                    </a>
                    </span>
                    <?php if (get_theme_mod('third_feature_heading','') != '') { ?>
                                <a href="<?php
                                if (get_theme_mod('third_feature_link','') != '') {
                                    echo esc_url(get_theme_mod('third_feature_link',''));
                                } else {
                                    echo "#";
                                }
                                ?>"><h4 class="service-heading"><?php echo esc_html(get_theme_mod('third_feature_heading','')); ?></h4></a>
                               <?php } else { ?>
                                <a href="#"><h4 class="service-heading"><?php _e('General Enquiry' ,'doctorsline'); ?></h4></a>
                                 <?php } if (get_theme_mod('third_feature_desc','') != '') { ?>
                                <p class="text-muted"><?php echo esc_html(get_theme_mod('third_feature_desc','')); ?></p>
                            <?php } else { ?>
                               <p class="text-muted"><?php _e('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. distracted
.' ,'doctorsline'); ?></p>
                            <?php } ?>
                </div>
                </div>
            </div>
        </div>
    </section>