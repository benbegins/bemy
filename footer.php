      </main>
      <footer class="site-footer bg-bemy-red min-h-screen relative flex flex-col items-center justify-end text-center">
        <div data-scroll data-scroll-speed="-4"
          class="footer-contact absolute inset-0 w-full text-center flex items-center justify-center"
        >
          <div class="relative">
            <p class="footer-contact__link font-extrabold text-3xl inline-block back-line">
              <?php pll_e('Dites-nous'); ?>
              <a href="mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f"><?php pll_e('bonjour'); ?></a>
            </p>
            
            <div class="footer-contact__over-link"></div>
          </div>
        </div>
        <div class="footer-mentions text-xs py-4 md:w-full md:flex md:justify-between md:py-8 z-10 px-8 sm:px-12 lg:px-16" >
          <div>
            © bemy 2020
            <a href="<?php echo get_site_url(); ?>/mentions" class="ml-6 footer-mentions__link link-transition"><?php pll_e('Mentions légales'); ?></a>
          </div>
          <div class="footer-reseaux uppercase">
            <a href="https://www.linkedin.com/company/bemystudio/" class="footer-mentions__link link-transition" target="_blank">Linkedin.</a>
            <a href="https://www.instagram.com/bemy.studio/" class="ml-6 footer-mentions__link link-transition" target="_blank">Instagram.</a>
            <a href="https://www.behance.net/bemystudio" class="ml-6 footer-mentions__link link-transition" target="_blank">Behance.</a>
          </div>
        </div>
      </footer>

    </div><!-- .page-container -->
    
  </div><!-- #page -->

</div><!-- data-scroll-container -->




<!-- Intro -->
<div class="intro">
  <div class="intro__logo-container">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-bemy.svg" alt="Logo Bemy Studio" class="intro__logo">
  </div>
  <div class="intro__reveal"></div>
</div>

<!-- Page Transition -->
<div class="page-transition">
  <div class="swipe swipe-1 bg-bemy-light"></div>
  <div class="swipe swipe-3 bg-bemy-red"></div>
  <div class="swipe swipe-2 bg-bemy-dark"></div>
</div>

<!-- Cursor -->
<div class="cursor"></div>



<?php wp_footer(); ?>

</body>
</html>