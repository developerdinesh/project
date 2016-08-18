<?php
$contactus_shortcode = get_theme_mod('cf_shtcd_','[lead-form form-id=1 title=Contact Us]');
?>
<?php if (get_theme_mod('cf_image','') != '') { ?>
<section id="section5" class="contact_section" style="background: url(<?php echo esc_url(get_theme_mod('cf_image','')); ?>) center repeat fixed;">
<?php } else { ?>
<section id="section5" class="contact_section">
 <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php if (get_theme_mod('cf_head_','') != '') { ?>
                    <h2 class="section-heading"><?php echo esc_html(get_theme_mod('cf_head_','')); ?></h2>
                    <?php } else { ?>
                    <h2 class="section-heading"><?php _e('Contact Us' ,'doctorsline'); ?></h2>
                    <?php } ?>                  
                    <?php if (get_theme_mod('cf_desc_','') != '') { ?>
                    <h3 class="section-subheading text-muted contact"><?php echo esc_html(get_theme_mod('cf_desc_','')); ?></h3>
                    <?php } else { ?>
                    <h3 class="section-subheading text-muted contact"><?php _e('Any questions?' ,'doctorsline'); ?></h3>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                 <?php echo do_shortcode($contactus_shortcode); ?> 
            </div>

        </div>
        <div class="map">
<?php 
$map = get_theme_mod('map_address');
if($map !=''){
echo html_entity_decode($map);
} else {
?>  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.8401153714!2d-74.25819714801317!3d40.705831635697365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1466553109342" ></iframe>
<?php } ?>
        </div>
    </section>