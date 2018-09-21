<?php
/**
 * Add Theme Customizer
 */

/* Text sanitation */
function customizer_textarea_sanitizer( $text )
{
  return esc_textarea( $text );
}

function portfolio_customize( $wp_customize ) {
  /* To keep it simple starting out, just going to try allowing customization 
   * for phone number and mail address on the contact section in the footer. 
   *
   * Based on the guide by iamsteve: 
   *  https://iamsteve.me/blog/entry/using-wordpress-customiser-to-create-editable-regions
   */

  // TODO : Add Section with controlls for Showreel video
  // TODO : Add Section with controls for a small gallery showing projects.

  $wp_customize->add_section( 'contact', array(
    'title'=>__('Contact', 'portfolio'),
    'priority'=>1
  ));

  $wp_customize->add_setting( 'contact_phone', array(
    'default'=>__('', 'portfolio'),
    'transport'=>'postMessage',
  ));

  $wp_customize->add_setting( 'contact_mail', array(
    'default'=>__('', 'portfolio'),
    'transport'=>'postMessage',
  ));

  $wp_customize->add_control( 'contact_phone', array(
    'label'=>__('Phone Number', 'portfolio'),
    'section'=>'contact',
    'settings'=>'contact_phone',
    'type'=>'text'
  ));

  $wp_customize->add_control( 'contact_mail', array(
    'label'=>__('Mail', 'portfolio'),
    'section'=>'contact',
    'settings'=>'contact_mail',
    'type'=>'text'
  ));

}

add_action( 'customize_register', 'portfolio_customize' );

?>
