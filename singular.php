<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <div id="main" class="site-main">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="entry-header">
          <?php
          if ( is_single() ) {
            the_title( '<h1 class="entry-title">', '</h1>' );
          } else {
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
          } ?>

        </header> <!-- .entry-header -->

        <div class="entry-content">
          <?php
            the_content();
          ?>
        </div>
            

      </article>

<?php
      /* Let's skip comments for the time being... 
       * people can reach me on twitter ¯\_(ツ)_/¯
       */
?>

    <?php endwhile; // End of the loop. ?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
