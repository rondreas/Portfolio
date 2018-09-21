    </div><!-- #content -->

    <footer id="colophon" class="site-footer">

      <div class="footer-content">

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

      <?php
      /* Check if contact info is set - if set display. */
      if ( get_theme_mod( 'contact_phone' ) != '' && get_theme_mod( 'contact_mail' ) != '' ): ?>

      <div class="contact-wrapper">
        <p class="contact-number">
          <span class='dashicons dashicons-phone'></span><?php echo get_theme_mod( 'contact_phone' ); ?>
        </p>
        <p class="contact-mail">
          <span class='dashicons dashicons-email-alt'></span><?php echo get_theme_mod( 'contact_mail' ); ?>
        </p>
      </div><!-- .contact-wrapper -->

      <?php endif; ?>

      </div><!-- .footer-content -->

    </footer><!-- #colophon -->

  </div><!-- .site-content-contain -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
