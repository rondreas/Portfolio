<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <div id="main" class="site-main front-page">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
          <?php
            the_content();
          ?>
        </div>

      </article>

    <?php endwhile; // End of the loop. ?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
