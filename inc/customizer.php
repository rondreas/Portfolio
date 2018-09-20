<?php
/**
 * Add Theme Customizer
 */

function portfolio_customize_register( $wp_customize ) {
  /* To keep it simple starting out, just going to try allowing customization 
   * for phone number and mail address on the contact section in the footer. 
   */




}

add_action( 'customize_register', 'portfolio_customize_register' );

?>
