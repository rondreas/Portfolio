<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <div class="card">

      <div class="portrait">
        <img class="about-image" src="<?php echo get_theme_mod( 'about_image' ); ?>">
      </div><!-- .portrait -->

      <div>
        <?php the_content(); ?>
      </div>
    
    </div><!-- .card -->
  </div>
</article>
