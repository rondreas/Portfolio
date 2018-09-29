<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <div id="main" class="site-main page-gallery">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <div class="grid-gallery">
        <?php the_content(); ?>
      </div>

    <?php endwhile; // End of the loop. ?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
