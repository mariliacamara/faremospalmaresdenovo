<?php 

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

// Get all scripts and css files
function load_scripts() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'template-colors', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0', 'all');
  wp_enqueue_style( 'template-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
  wp_enqueue_style( 'template-pillar', get_template_directory_uri() . '/assets/css/single-eixos.css', array(), '1.0', 'all');
  wp_enqueue_style( 'template-single', get_template_directory_uri() . '/assets/css/single.css', array(), '1.0', 'all');
	wp_enqueue_style( 'template-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Theme configs
function solaris_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => 'Primary Menu',
		'social'  => 'Social Icons Menu',
	) );


	$args = array(
		'height' => 980,
		'width' => 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );

	// Get category ID
	function category_id_class($classes) {
  global $post;
    foreach((get_the_category($post->ID)) as $category)
    $classes [] = 'catId-' . $category->cat_ID;
    return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

	function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
      $classes[] = $post->post_name;
    }
    return $classes;
	}
  add_filter( 'body_class', 'add_slug_body_class' );

}
add_action( 'after_setup_theme', 'solaris_setup', 0 );
add_filter('acf/settings/remove_wp_meta_box', '__return_false', 20);

function pagination(){
  global $wp_query, $page, $numpages;
  $big = 999999999;
  echo "<span class="."total".">Página $page de $wp_query->max_num_pages</span>";
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
    'format' => '/page/%#%'
  ));
}