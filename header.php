<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id="page" class="site">

    <header class="site-header">

      <div class="site-branding-text">
        <h2 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h2>

        <?php
        $description = get_bloginfo( 'description', 'display' );

        if ( $description || is_customize_preview() ) :
        ?>

        <h3 class="site-tagline"><?php echo $description; ?></h3>

        <?php endif; ?>

      </div><!-- site-branding-text -->
      
      <?php if ( has_nav_menu( 'top' ) ) : ?>
        <div class="navigation-top">
          <?php wp_nav_menu( array(
            'theme_location' => 'top',
            'menu_id' => 'top-menu',
          ) ); ?>
        </div>
      <?php endif; ?>

    </header><!-- site-header -->

  <div class="site-content-contain">
    <div id="content" class="site-content">
