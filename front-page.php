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

          <header class="entry-header">
            <h1 class="entry-title"><?php echo $projects[0]->post_title; ?></h1>
          </header> <!-- .entry-header --> 

          <div class="entry-content">
            <div class="projects-gallery">
              <?php
              $images = get_posts( array (
                'post_parent'=>$projects[0]->ID,
                'post_type'=>'attachment',
                'post_status'=>'any',
                'posts_per_page'=> 4,
              ));

              if ( $images ) {
                foreach( $images as $post) {
                  setup_postdata( $post );
                  the_attachment_link( $post->ID, true );
                }
                wp_reset_postdata();
              }
              ?>
            </div>
          </div>
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
          <header class="entry-header">
          <h1 class="entry-title"><?php echo $scripts[0]->post_title; ?></h1>
          </header> <!-- .entry-header --> 

          <div class="entry-content">
            <?php echo apply_filters('the_content', $scripts[0]->post_content); ?>
          </div>
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
      <section>
        <div class="grid-gallery">
          <?php echo apply_filters( 'the_content', $gallery[0]->post_content ); ?>
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

      <?php setup_postdata( $about[0] ); ?>

      <section class="about">
        <?php get_template_part( 'template-parts/about' ); ?>
      </section><!-- .about -->
            
      <?php wp_reset_postdata(); ?>

    <?php endif; // End of "if about"?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
