    </div><!-- #content -->

    <footer id="colophon" class="site-footer">

      <?php 
      if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'social',
              'menu_class'     => 'menu social-links-menu',
              'depth'          => 1,
              'link_before'    => '<span class="screen-reader-text">',
              'link_after'     => '</span>' . portfolio_get_svg( array( 'icon' => 'chain' ) ),
            ) );
          ?>
        </nav><!-- .social-navigation -->
      <?php endif; ?>

      <div class="contact-wrapper">
      </div>

    </footer><!-- #colophon -->

  </div><!-- .site-content-contain -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
