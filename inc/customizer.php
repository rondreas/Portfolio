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

  /* About */
  $wp_customize->add_section( 'about', array(
    'title'=>__('About', 'portfolio'),
    'priority'=>2
  ));

  $wp_customize->add_setting( 'about_image', array(
    'default'=>__( get_template_directory_uri() . '/images/me.jpg', 'portfolio'),
    'transport'=>'postMessage',
  ));

  $wp_customize->add_setting( 'about_desc', array(
    'default'=>__('', 'portfolio'),
    'transport'=>'postMessage',
  ));

  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'about_image',
           array(
               'label'      => __( 'Upload a portrait', 'portfolio' ),
               'section'    => 'about',
               'settings'   => 'about_image',
               'context'    => 'about-image'
           )
       )
   );

  $wp_customize->add_control( 'about_desc', array(
    'label'=>__('Desciption', 'portfolio'),
    'section'=>'about',
    'settings'=>'about_desc',
    'type'=>'text'
  ));
}

add_action( 'customize_register', 'portfolio_customize' );

?>
