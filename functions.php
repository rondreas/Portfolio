<?php

function portfolio_setup() {
  register_nav_menus( array(
    'top' => __('Top Menu', 'portfolio'),
    'front' => __('Front Page Menu', 'portfolio'),
    'social' => __('Social Links Menu', 'portfolio'),
  ));
}

add_action('after_setup_theme', 'portfolio_setup');

function include_dashicons() {
  wp_enqueue_style( 'dashicons' );
}

add_action( 'wp_enqueue_scripts', 'include_dashicons' );

function customize_preview_js() {
  wp_enqueue_script('portfolio_customizer', get_parent_theme_file_path('inc/assets/customizer.js'), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'customize_preview_js');

require get_parent_theme_file_path('inc/icon-functions.php');
require get_parent_theme_file_path('inc/customizer.php');

class Custom_Walker extends Walker_Nav_Menu {
  /**
   * Custom walker adapted from https://www.ibenic.com/how-to-create-wordpress-custom-menu-walker-nav-menu-class/
   * to achieve the navigation menu for my front page.
   */
  function start_el(&$output, $item, $depth=0, $args=array(), $id=0) {
    $object = $item->object;
    $type = $item->type;
    $title = $item->title;
    $description = $item->description;
    $permalink = $item->url;

    // Add the default item classes.
    $output .= "<li class='" .  implode(" ", $item->classes) . "'>";  

    // Add div container to use as background image.
    $output .= "<div class='background'>";

    // Add SPAN if no Permalink, seeing as showreel shouldn't be linking anywhere else.
    if( $permalink && $permalink != '#' ) {
      $output .= '<a class="splash-nav-link" href="' . $permalink . '">';
    } 
    else {
      $output .= '<span class="splash-nav-link">';
    } 

    // Add the title as header inside the <a> element.
    $output .= "<h1>" . $title . "</h1>";

    // Close the a or span element.
    if( $permalink && $permalink != '#' ) {
      $output .= '</a>';
    } 
    else {
      $output .= '</span>';
    }

    // Close the background div.
    $output .= '</div><!-- .background -->';
  }
}

?>
