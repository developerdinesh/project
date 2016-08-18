<style type="text/css">
    .client-testimonial{padding:30px 0 0;}
    .client-testimonial h4{}
    .client-testimonial{
        display: block;
        position: relative;
    }
    .ak-container{max-width: 100%;}
    .client-testimonial .slick-next,
    .client-testimonial .slick-prev {
        top: 50%;
        margin-top: -12px;
    }
    .client-testimonial .slick-slide{
        min-height: 200px;
        width:100%;
        float:left;
        background-size:cover;
        margin:0 10px;
        background-position: center center;
        background-repeat:no-repeat;
    }

    .client-image{
        height:50px;
        width:50px;
        display: block;
        border-radius:100%;
    }

</style>
<section class="client-testimonial">
    <h4><?php the_field('testimonial_title', 'option'); ?></h4>
    <div class="testimonial-description"><?php the_field('testimonial_description', 'option'); ?></div>
    <div class="testimonial-slides" >
        <?php while(have_rows('testimonial_slides','option')):the_row(); ?>
            <?php
            $testimonial_image = get_sub_field('testimonial_image');
            ?>
            <div class="slick-slide">
                <div class="ak-container">
                    <header class="entry-header">
                        <div class="client-says"><?php echo get_sub_field('client_saying'); ?></div>
                        <h5  class="entry-title"><?php echo get_sub_field('client_name'); ?></h5>
                        <h6  class="entry-title"><?php echo get_sub_field('position_&_company_'); ?></h6>
                        <div class="client-image" style="background-image:url(<?php echo $testimonial_image; ?>);"></div>
                    </header><!-- .entry-header -->
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>