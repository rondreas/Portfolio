<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <div id="main" class="site-main about">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <header class="entry-header">
        <?php if ( !is_single() or !is_page() ) {
          the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        } ?>
      </header> <!-- .entry-header --> 

      <?php get_template_part( 'template-parts/about' ); ?>

    <?php endwhile; // End of the loop. ?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
