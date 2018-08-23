<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <div id="page" class="site">

    <header class="site-header">

      <div class="site-branding-text">
        <h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        </h1>

        <?php
        $description = get_bloginfo( 'description', 'display' );

        if ( $description || is_customize_preview() ) :
        ?>

        <h2 class="site-tagline"><?php echo $description; ?></h2>

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

      </div>

    </header><!-- site-header -->

  <div class="site-content-contain">
    <div id="content" class="site-content">
