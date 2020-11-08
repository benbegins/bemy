    <div class="trigger-footer"></div>
    <footer class="site-footer bg-bemy-red min-h-screen relative lg:fixed lg:inset-0 flex flex-col items-center justify-end text-center">
      <div
        class="footer-contact absolute inset-0 w-full text-center flex items-center justify-center"
      >
        <div class="relative">
          <a
            href="mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f"
            class="footer-contact__link font-extrabold text-2xl inline-block"
          >hello&#64;bemy.studio</a>
          <div class="footer-contact__over-link"></div>
        </div>
      </div>
      <div
        class="container footer-mentions text-xs py-4 md:w-full md:flex md:justify-between md:py-8 z-10"
      >
        <div>
          © bemy 2020
          <a href="<?php echo get_site_url(); ?>/mentions" class="ml-6 footer-mentions__link link-transition"><?php pll_e('Mentions légales'); ?>
</a>
        </div>
        <div class="footer-reseaux uppercase">
          <a href="https://www.linkedin.com/company/bemystudio/" class="footer-mentions__link link-transition" target="_blank">Linkedin.</a>
          <a href="https://www.instagram.com/bemy.studio/" class="ml-6 footer-mentions__link link-transition" target="_blank">Instagram.</a>
        </div>
      </div>
    </footer>

  </div><!-- .page-container -->
</div><!-- #page -->

<div class="page-transition">
  <div class="swipe swipe-1 bg-bemy-light"></div>
  <div class="swipe swipe-2 bg-bemy-dark"></div>
  <div class="swipe swipe-3 bg-bemy-red overflow-hidden">
    <div class="loading-icon"></div>
  </div>
  
</div>



<?php wp_footer(); ?>

</body>
</html>