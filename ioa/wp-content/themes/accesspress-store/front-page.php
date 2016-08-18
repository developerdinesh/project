<?php
get_header();

global $post;
$single_page_layout = esc_attr( get_post_meta($post->ID, 'accesspress_store_sidebar_layout', true) );
if (empty($single_page_layout)) {
    $single_page_layout = esc_attr( get_theme_mod('single_page_layout','right-sidebar') );
}
if (is_page('cart') || is_page('checkout')) {
    $single_page_layout = "no-sidebar";
}
$breadcrumb = intval( get_theme_mod('breadcrumb_options_page','1') );
$archive_bread = esc_url( get_theme_mod('breadcrumb_page_image') );
if($archive_bread){
    $bread_archive = $archive_bread;
}else{
    //$bread_archive = esc_url ( get_template_directory_uri().'/images/about-us-bg.jpg' );
    $bread_archive = esc_url ( get_the_post_thumbnail(get_the_ID(), 'full') );
    $bread_archive = get_the_post_thumbnail_url(wp_get_attachment_url(get_the_ID(),'full'));
}
if($breadcrumb == '1') :
    ?>
    <!--- features image exist -->
<?php endif; ?>

    <style type="text/css">
        .banner-slide{
            display: block; position: relative;
        }
        .banner-slide .slick-next,
        .banner-slide .slick-prev {
            top: 50%;
            margin-top: -12px;
        }
        .banner-slide .slick-slide{
            min-height: 400px;
            width:100%;
            float:left;
            background-size:cover;
            background-position: center center;
            background-repeat:no-repeat;
        }
    </style>

    <div class="banner-slide" >
        <?php while(have_rows('banner_slides')):the_row(); ?>
        <div class="slick-slide" style="background-image:url('<?php echo get_sub_field('banner_image'); ?>');">
            <div class="ak-container">
                <header class="entry-header">
                    <!--<?php the_title('<h2 class="entry-title">', '</h2>'); ?>-->
                    <h2  class="entry-title"><?php echo get_sub_field('banner_caption'); ?></h2>
                </header><!-- .entry-header -->
            </div>
        </div>
    <?php endwhile; ?>
    </div>
<?php ?>

    <div class="inner">
        <main id="main" class="site-main clearfix <?php //echo $single_page_layout; ?>">
            <?php  if ($single_page_layout == 'both-sidebar'): ?>
            <div id="primary-wrap" class="clearfix">
                <?php endif; ?>

                <div id="<?php echo ($single_page_layout=="no-sidebar") ? '' : 'primary'; ?>" class="content-area">
                    <section class="cta-3" style="overflow:hidden;">
                        <?php
                        $terms = get_terms( array(
                            'taxonomy' => 'product_cat',
                            'hide_empty' => true,
                        ) );

                        foreach($terms as $term){
                            $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
                            $image = wp_get_attachment_url( $thumbnail_id );
                            ?>
                            <a href="<?php echo get_site_url().'/product-category/'.$term->slug; ?>" style="display: block; width:33.33%; padding:15px; float:left;">
                                <h4><?php echo $term->name; ?></h4>
                                <img src="<?php echo $image; ?>" alt="">
                                <div class="cat-description"><?php echo $term->description; ?></div>
                            </a>
                            <?php
                        }

                        ?>
                    </section>
                    <section class="page_header_wrap clearfix" style="background:url('<?php echo $bread_archive; ?>') no-repeat fixed; min-height: 300px;">
                        <div class="ak-container">
                            <header class="entry-header">
                                <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
                            </header><!-- .entry-header -->
                            <?php accesspress_breadcrumbs() ?>
                        </div>
                    </section>
                    <?php echo get_template_part('template-parts/our','team'); ?>
                    <?php echo get_template_part('template-parts/client','testimonial'); ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php //get_template_part('content', 'page'); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                    <?php endwhile; // end of the loop.  ?>
                </div><!-- #primary -->

                <?php
                if ($single_page_layout == 'both-sidebar' || $single_page_layout == 'left-sidebar'):
                    get_sidebar('left');
                endif;
                ?>

                <?php if ($single_page_layout == 'both-sidebar'): ?>
            </div>
        <?php endif; ?>

            <?php
            if ($single_page_layout == 'both-sidebar' || $single_page_layout == 'right-sidebar'):
                get_sidebar('right');
            endif;
            ?>
        </main>
    </div>
<?php get_footer();