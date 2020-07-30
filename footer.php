</div><!-- #page -->

<footer
    class="bg-bemy-red min-h-screen fixed inset-0 flex flex-col items-center justify-end text-center"
  >
    <div
      class="footer-contact absolute inset-0 w-full text-center flex items-center justify-center"
    >
      <div class="relative">
        <a
          href="mailto:hello@bemy.studio"
          class="footer-contact__link font-extrabold underline text-2xl"
        >hello@bemy.studio</a>
        <div class="footer-contact__over-link"></div>
      </div>
    </div>
    <div
      class="container footer-mentions text-xs py-4 md:w-full md:flex md:justify-between md:py-8 z-10"
    >
      <div>
        © bemy 2020
        <a href="<?php echo get_site_url(); ?>/mentions" class="ml-6 footer-mentions__link link-transition">Mentions légales</a>
      </div>
      <div class="footer-reseaux uppercase">
        <a href="#" class="footer-mentions__link link-transition">Linkedin.</a>
        <a href="#" class="ml-6 footer-mentions__link link-transition">Instagram.</a>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>