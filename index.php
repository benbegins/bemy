<?php get_header(); ?>

<div class="home page">
    <!--intro-->
    <section class="home-intro min-h-screen flex items-center justify-center container relative">
      <div class="home-intro__content mx-auto w-full">
        <h1 class="home-intro__title text-title">
          Le studio de création
          <br />qui envoie
          <span class="text-bemy-red">fort.</span>
        </h1>
        <h2 class="home-intro__description uppercase text-base mt-8">Web Design &amp; Brand Identity</h2>
        <a
          href="mailto:hello@bemy.studio"
          class="btn btn-primary home-intro__btn absolute mt-8 md:right-0 md:mr-12"
        >Contactez-nous</a>
      </div>
    </section>
    <!--projets-->
    <section class="home-projets">
      <div class="home-projets__item md:min-h-screen relative my-24 md:my-auto">
        <div class="container md:flex md:min-h-screen flex-col justify-center">
          <div class="home-projets__text-container z-10 relative md:w-1/2 lg:w-1/3">
            <p
              class="home-projets__proj-title uppercase opacity-50 text-sm lg:text-base"
            ></p>
            <p
              class="home-projets__proj-description my-4 md:my-6 lg:my-8 text-40 leading-tight"
            ></p>
            <p class="home-projets__proj-services text-sm lg:text-base"></p>
          </div>
        </div>
        <div
          class="home-projets__img-container h-64 md:h-auto md:w-1/2 md:absolute inset-y-0 right-0 mt-8 md:mt-0"
        >
          <a href="">
            <div
              class="home-projets__img h-full w-full"
              style="background:red"
            ></div>
          </a>
        </div>
      </div>
    </section>
    <!--studio-->
    <section class="home-studio relative overflow-x-hidden">
      <div class="container py-32 md:my-auto md:min-h-screen md:flex items-center xl:justify-end">
        <div class="home-studio__text-container xl:w-2/3">
          <p class="text-40 leading-normal">
            Nous sommes un studio de création basé à Nantes et à Barcelone qui conçoit des
            <i>sites internet</i>, des
            <i>applications web</i> et imagine des
            <i>identités visuelles</i> qui envoient du pâté.
          </p>
          <a href="<?php echo get_site_url(); ?>/studio" class="btn btn-primary mt-10 relative">Le studio</a>
        </div>
      </div>
    </section>
  </div>

<?php get_footer(); ?>