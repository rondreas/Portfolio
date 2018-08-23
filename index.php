<?php get_header(); ?>

<div class="wrap">

<?php
  wp_nav_menu( array(
    'menu_class' => 'splash-nav',
    'walker' => new Custom_Walker()
  ) );
?>

</div><!-- .wrap -->

<?php get_footer(); ?>
