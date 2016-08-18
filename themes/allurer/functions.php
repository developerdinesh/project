<?php
/**
 * allurer functions and definitions
 *
 * @package Sections
 */

class allurer {

private function __construct() {}

/**
	 * Runs immediately at the end of this file, not to be confused
	 * with after_setup_theme, which runs a little bit later.
	 */
	public static function setup() {
		add_action( 'after_setup_theme', array( __CLASS__, 'after_setup_theme' ) );
		do_action( 'allurer_setup' );
	}
	
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
public static function after_setup_theme() {
	
	/**
     * Set the content width based on the theme's design and stylesheet.
     */
    global $content_width;
	if ( ! isset( $content_width ) ) {
	   $content_width = 780; /* pixels */
	}
			
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on allurer, use a find and replace
	 * to change 'allurer' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'allurer', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );	
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );	

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 235, 180, true );
	add_image_size( 'allurer-full-width', 3200, 770, true );
	add_image_size( 'allurer-post-standard', 880, 460, true );
	add_image_size( 'allurer-project-standard', 880, 460, true );
	add_image_size( 'allurer-frontpage', 660, 370, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'allurer' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	
	// This theme allows users to set a custom background.
	add_theme_support( 'custom-background', apply_filters( 'allurer_custom_background_args', array(
		'default-color'      => '334455',
		'default-attachment' => 'fixed',
		'default-repeat'     => 'none',
		'default-image'      => get_template_directory_uri() . '/assets/images/bg.jpg',
	) ) );
		
	do_action( 'allurer_after_setup_theme' );
}

    /**
	 * Use a plugin to get related posts, or fall back to
	 * simply fetching some posts from the same category.
	 */
	public static function get_related_posts() {
		$post = get_post();

		$posts_per_page = apply_filters( 'allurer_related_posts_per_page', 4 );

		// Support for the Yet Another Related Posts Plugin
		if ( function_exists( 'yarpp_get_related' ) ) {
			$related = yarpp_get_related( array( 'limit' => $posts_per_page ), $post->ID );
			return new WP_Query( array(
				'post__in'            => wp_list_pluck( $related, 'ID' ),
				'posts_per_page'      => $posts_per_page,
				'orderby'             => 'rand',
				'ignore_sticky_posts' => true,
				'post__not_in'        => array( $post->ID ),
			) );
		}

		$args = array(
			'posts_per_page' => $posts_per_page,
			'orderby' => 'rand',
			'ignore_sticky_posts' => true,
			'post__not_in' => array( $post->ID ),
		);

		// Get posts from the same category.
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$category = array_shift( $categories );
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field'    => 'id',
					'terms'    => $category->term_id,
				),
			);
		}

		return new WP_Query( $args );
	}
	
	// Experimental for portfolio
	
	/**
	 * Use a plugin to get related posts, or fall back to
	 * simply fetching some posts from the same category.
	 */
	public static function get_related_projects() {
		$post = get_post();

		$posts_per_page = apply_filters( 'allurer_related_projects_per_page', 4 );

		// Support for the Yet Another Related Posts Plugin
		if ( function_exists( 'yarpp_get_related' ) ) {
			$related = yarpp_get_related( array( 'limit' => $posts_per_page ), $post->ID );
			return new WP_Query( array(
				'post__in'            => wp_list_pluck( $related, 'ID' ),
				'posts_per_page'      => $posts_per_page,
			    'orderby'             => 'rand',
				'ignore_sticky_posts' => true,
				'post__not_in'        => array( $post->ID ),
			) );
		}

		$args = array(
			'post_type'           => 'jetpack-portfolio',			
			'posts_per_page'      => $posts_per_page,
			'orderby'             => 'rand',
			'ignore_sticky_posts' => true,
			'post__not_in'        => array( $post->ID ),
		);

		// Get posts from the same category.
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			$category = array_shift( $categories );
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'category',
					'field'    => 'id',
					'terms'    => $category->term_id,
				),
			);
		}

		return new WP_Query( $args );
	}
}
allurer::setup();

// Lets do a separate excerpt length for our home blog feed
function allurer_homefeed_excerpt() {
	$theContent = trim(strip_tags(get_the_content()));
		$output = str_replace( '"', '', $theContent);
		$output = str_replace( '\r\n', ' ', $output);
		$output = str_replace( '\n', ' ', $output);
			if (get_theme_mod( 'allurer_homefeed_excerpt_length' )) {
			$limit = get_theme_mod( 'allurer_homefeed_excerpt_length' );
			} else { 
			$limit = '10';
			}
			$content = explode(' ', $output, $limit);
			array_pop($content);
		$content = implode(" ",$content)."  ";
	return strip_tags($content, ' ');
}


/**
 * path to the template directory
 */
$temp_dir = get_template_directory();

require( $temp_dir . '/assets/scripts.php');
require( $temp_dir . '/assets/template-tags.php');
require( $temp_dir . '/assets/extras.php');
require( $temp_dir . '/assets/sidebar-init.php');
require( $temp_dir . '/assets/customizer.php');
require( $temp_dir . '/assets/inc/nav-walker.php');

if ( class_exists( 'Jetpack' ) ) :
    require( $temp_dir . '/assets/inc/jetpack.php');
	require( $temp_dir . '/assets/inc/custom.php');
endif;

if ( ! function_exists( 'allurer_projects' ) ) :
if ( class_exists( 'Jetpack' ) ) {
function allurer_projects() {
	if ( get_theme_mod( 'allurer_home_projects_visibility' ) != 0 ) { 
$allurer_project_header = esc_html(get_theme_mod( 'allurer_project_header_title' )); ?>
<section class="container-fluid" id="section8">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
		<?php if ( get_theme_mod( 'allurer_project_header_visibility' ) != 1 ) {
			  if (get_theme_mod( 'allurer_project_header_title' ) && is_front_page() && !is_paged() ) { ?>
				 <h3 class="project head text-center"><?php echo $allurer_project_header ?></h3>
				 <div class="project-title-separator"></div>
              <?php } elseif (is_front_page() && !is_paged()) { ?>
                  <h3 class="project head text-center"><?php _e( 'Latest Projects On ', 'allurer'); ?><?php bloginfo( 'name' ); ?></h3>
				  <div class="project-title-separator"></div>
			  <?php } ?>
			  
			  <?php }
              get_template_part( 'content/content', 'portfolio-home' ); ?>
        </div>
    </div>	
</section>
<?php }
}
}
endif;