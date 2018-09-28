<?php get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <div id="main" class="site-main page-gallery">

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

      <div class="grid-gallery">
        <?php 
        $images = get_posts( array (
          'post_parent'=>$post->ID,
          'post_type'=>'attachment',
          'post_status'=>'any',
          'posts_per_page'=> -1,
          'orderby'=>'rand',
        ));

        if ( $images ) {
          foreach( $images as $post) {
            /* To improve I could get a smaller size for anything but gifs 
             * using wp_get_attachment_image_src 
             **/
            setup_postdata( $post );
            $type = get_post_mime_type($post->ID);
            if ( $type == 'video/mp4') {
            ?>
              <div class="gallery-video">
                <video autoplay="autoplay" loop="loop">
                  <source src="<?php echo wp_get_attachment_url($post->ID); ?>">
                </video>
              </div>
            <?php 
            } else {
              the_attachment_link( $post->ID, true );
            }
          }
          wp_reset_postdata();
        }
        ?>
      </div>

    <?php endwhile; // End of the loop. ?>

    </div> <!-- #primary -->
  </div> <!-- .wrap -->
</div> <!-- .wrap -->

<?php get_footer(); ?>
