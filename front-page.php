<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <div id="main" class="site-main front-page">

    <?php
    // TODO: DRY - currently using the same structure for getting all my sections which could be reworked into a function,
    /* Get the content from page witht the slug "showreel" if there is one */
    $reel = get_posts( array(
      'name'        => 'showreel',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    ));

    if ( $reel ): ?>

      <section class="showreel">
        <article>
        <?php echo apply_filters('the_content', $reel[0]->post_content); ?>
        </article>
      </section><!-- .showreel -->

    <?php endif; // End of "if reel"?>

    <?php
    $projects = get_posts( array(
      'name'        => 'projects',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    ));

    if ( $projects ): ?>

      <section class="projects">
        <article>
        <?php echo $projects[0]->post_content; ?>
        </article>
      </section><!-- .projects -->

    <?php endif; // End of "if projects"?>

    <?php
    $scripts = get_posts( array(
      'name'        => 'scripts',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    ));

    if ( $scripts ): ?>

      <section class="scripts">
        <article>
          <?php echo apply_filters('the_content', $scripts[0]->post_content); ?>
        </article>
      </section><!-- .scripts -->

    <?php endif; // End of "if scripts"?>

    <?php
    $gallery = get_posts( array(
      'name'        => 'gallery',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    ));

    if ( $gallery ): ?>

      <?php
      /* Not applying filters for this one, as a user I should only post images to the gallery page, so getting
       * content will give me all the <img> items which I can put into my grid gallery.
       */
      ?>

      <section>
        <div class="grid-gallery">
          <?php echo $gallery[0]->post_content; ?>
        </div>
      </section><!-- .gallery -->

    <?php endif; // End of "if gallery"?>

    <?php
    /* Get the content from page witht the slug "showreel" if there is one */
    $about = get_posts( array(
      'name'        => 'about',
      'post_type'   => 'page',
      'post_status' => 'publish',
      'numberposts' => 1
    ));

    if ( $about ): ?>

      <section class="about">
        <article>
          <?php echo apply_filters('the_content', $about[0]->post_content); ?>
        </article>
      </section><!-- .about -->

    <?php endif; // End of "if about"?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
