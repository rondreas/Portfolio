<?php

function portfolio_setup() {

  add_theme_support( 'post-thumbnails' );

  register_nav_menus( array(
    'top' => __('Top Menu', 'portfolio'),
    'social' => __('Social Links Menu', 'portfolio'),
  ));
}

add_action('after_setup_theme', 'portfolio_setup');

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

?>
