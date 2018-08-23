<?php get_header(); ?>

<div class="wrap">

<? if ( has_nav_menu( 'front' ) ) : ?>
  <?php wp_nav_menu( array(
      'theme_location' => 'front',
      'walker' => new Custom_Walker()
  ) ); ?>
<?php endif; ?>

</div><!-- .wrap -->

<?php get_footer(); ?>
