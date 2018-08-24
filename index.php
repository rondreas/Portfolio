<?php get_header(); ?>

<div class="wrap">

<?php if ( has_nav_menu( 'front' ) ) : ?>
  <?php wp_nav_menu( array(
      'theme_location' => 'front',
      'menu_id' => 'front-menu',
      'walker' => new Custom_Walker()
  ) ); ?>
<?php else : ?>
  <section class='under-construction'>
    <div>
      <h1>Coming Soon</h1>
      <p>Site is currently under construction</p>
    </div>
  </section><!-- .under-construction -->
<?php endif; ?>

</div><!-- .wrap -->

<?php get_footer(); ?>
