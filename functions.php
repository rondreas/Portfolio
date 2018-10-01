<?php

function portfolio_setup() {

  add_theme_support( 'post-thumbnails' );

  register_nav_menus( array(
    'top' => __('Top Menu', 'portfolio'),
    'social' => __('Social Links Menu', 'portfolio'),
  ));

  /* Define custom image sizes */

  /* Square images for the grid gallery */
  add_image_size( 'gg-s', 200, 200, true );
  add_image_size( 'gg-m', 400, 400, true );
  add_image_size( 'gg-l', 800, 800, true );
}

add_action('after_setup_theme', 'portfolio_setup');

add_filter( 'image_size_names_choose', 'grid_gallery_image_sizes' );
function grid_gallery_image_sizes( $sizes ) {
  return array_merge( $sizes, array(
    'gg-s'  => __( 'Grid Gallery Small' ),
    'gg-m'  => __( 'Grid Gallery Medium' ),
    'gg-l'  => __( 'Grid Gallery Large' ),
  ) );
}

function include_dashicons() {
  wp_enqueue_style( 'dashicons' );
}

add_action( 'wp_enqueue_scripts', 'include_dashicons' );

function customize_preview_js() {
  wp_enqueue_script('portfolio_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'customize_preview_js');

require get_parent_theme_file_path('inc/icon-functions.php');
require get_parent_theme_file_path('inc/customizer.php');

/* Stop Wordpress from automatically wrapping posts content with <p> tags */
remove_filter('the_content', 'wpautop');

/* https://wordpress.stackexchange.com/a/295574 */
add_filter( 'wp_video_shortcode', function( $output ) {
    if ( false !== strpos( $output, 'autoplay="1"' ) ) {
        $output = str_replace( '<video', '<video muted', $output );
    }
    return $output;
} );

?>
