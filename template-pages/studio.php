<?php 
/*
Template Name: Studio
*/
get_header();
?>

<div class="studio" id="studio">

  <!-- Intro -->
  <section class="container">
    <div class="py-40 flex flex-col justify-center min-h-screen lg:w-2/3">
      <p class="text-sm font-extrabold text-bemy-red uppercase mb-2 ml-1 reveal-opacity"><?php pll_e('Le studio'); ?></p>
      <h1 class="text-3xl page-title"><?php if (pll_current_language() == "en"){
          echo 'Share with the world what makes you <i>exceptional.</i>';
        } else {
          echo 'Partager avec le monde ce qui vous rend <i>exceptionnel.</i>';
        } ?></h1>
    </div>
  </section>


  <!-- Texte d'intro -->
  <section class="section-pad-bottom">
    <div class="container">
      <div class="md:w-1/2 md:ml-auto">
        <p><?php pll_e('Nous croyons en la force de l’esthétique et de l’authenticité pour créer un lien émotionnel et de confiance avec votre cible. Nous créons des identités visuelles et des sites clairs, uniques et durables, pour mieux vous raconter, et vous montrer sous votre meilleur jour.'); ?></p>
        <p class="mt-10"><?php pll_e('Pour faire simple, on bosse bien.'); ?></p>
      </div>
    </div>
  </section>

  <!-- Photo bureaux -->
  <section class="bg-bemy-light">
        <div class="photo-bureaux overflow-hidden parallax-container">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/bemy-bureaux.jpg" alt="Bureaux Bemy" class="w-full h-full object-cover parallax-img">
        </div>
  </section>
  

  <!-- Citation -->
  <section class="section-pad">
    <div class="section-pad container text-center">
      <p class="fonde back-line text-xl leading-normal lg:w-3/4 lg:mx-auto"><?php pll_e('Nous collaborons avec les marques et les agences qui partagent nos valeurs humaines et l’amour du travail bien fait.'); ?></p>
    </div>
  </section>


  <!-- Expertises -->
  <section class="section-pad">
    <div class="container lg:grid lg:grid-cols-3">
      <div class="">
        <h2 class="text-sm font-extrabold text-bemy-red uppercase"><?php pll_e('Expertises'); ?></h2>
      </div>
      <div class="lg:col-span-2">
        <p class="mt-2 lg:mt-0 lg:mb-24 lg:w-3/4"><?php pll_e('Nos expertises sont parfaitement adaptées pour vous accompagner dans le cadre d’un lancement de marque, d’un rebranding, d’une création ou refonte de site.'); ?></p>
        <div class="md:grid md:grid-cols-3">
          <div class="mt-12 lg:mt-0">
            <h3 class="text-2xl">Web</h3>
            <ul class="mt-10 opacity-50 text-sm">
              <li class="my-1">Webdesign</li>
              <li class="my-1"><?php pll_e('Développement front-end'); ?></li>
              <li class="my-1"><?php pll_e('e-commerce'); ?></li>
              <li class="my-1">CMS / Wordpress</li>
            </ul>
          </div> 
          <div class="mt-12 lg:mt-0">
            <h3 class="text-2xl"><?php pll_e('Contenu') ?></h3>
            <ul class="mt-10 opacity-50 text-sm">
              <li class="my-1">Photo</li>
              <li class="my-1">3D</li>
              <li class="my-1">Illustration</li>
              <li class="my-1">Motion design</li>
            </ul>
          </div> 
          <div class="mt-12 lg:mt-0">
            <h3 class="text-2xl"><?php pll_e('Identité') ?></h3>
            <ul class="mt-10 opacity-50 text-sm">
              <li class="my-1">Logo</li>
              <li class="my-1">Packaging</li>
              <li class="my-1"><?php pll_e('Papeterie'); ?></li>
              <li class="my-1"><?php pll_e('Kit réseaux sociaux'); ?></li>
            </ul>
          </div> 
        </div>
      </div>
    </div>
  </section>




  <!-- Derniers projets -->
  <section class="section-pad">
    <div class="container lg:grid lg:grid-cols-3">
      <div class="">
        <h2 class="text-sm font-extrabold text-bemy-red uppercase"><?php pll_e('Derniers projets'); ?></h2>
      </div>
      <div class="mt-6 lg:mt-0 lg:col-span-2">
        <ul class="divide-y divide-bemy-light divide-opacity-50 border-t border-b border-bemy-light border-opacity-50">
        <?php 
        // WP_Query arguments
        $args = array(
          'post_type'              => array( 'projet' ),
        );

        // The Query
        $query = new WP_Query( $args );

        // The Loop
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
        ?>
          <a href="<?php the_permalink(); ?>" class="block">
            <li class="studio-projets__item py-4 md:py-6 grid text-sm grid-cols-2 md:grid-cols-3">
              <div class="studio-projets__item__nom-client uppercase font-extrabold"><?php the_field('nom_du_client'); ?></div>
              <div class="studio-projets__item__services md:col-span-2"><?php the_field('liste_des_services'); ?></div>
            </li>  
          </a>
        <?php
          }
        }
        // Restore original Post Data
        wp_reset_postdata();
        ?>
        </ul>
        <div class="text-right mt-12">
          <?php if (pll_current_language() == "en"): ?>
            <a href="<?php echo get_site_url(); ?>/en/projet" class="btn btn-primary">All projects</a> 
          <?php else : ?>
            <a href="<?php echo get_site_url(); ?>/projet" class="btn btn-primary">Tous les projets</a> 
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  


  <section class="pt-16 lg:pt-0 studio-presentation relative">
    <div class="studio-presentation__container container">
      <div
        class="studio-presentation__text md:pb-40 md:w-1/2 lg:w-1/3 lg:pb-0 z-20"
      >
        <p>
          <?php 
          if (pll_current_language() == "en"){
            echo "<strong>Tommy Bonneau</strong> and
          <strong>Benoit Beghyn</strong> founded
          <span class='text-bemy-red font-extrabold'>Bemy Studio</span> in May 2020, during the full lockdown, which reveal their sense of timing.";
          } else {
            echo "<strong>Tommy Bonneau</strong> et
          <strong>Benoit Beghyn</strong> fondent
          <span class='text-bemy-red font-extrabold'>Bemy Studio</span> en mai 2020, en plein confinement, ce qui révèle en eux un sens aigu du timing.";
          } ?>
        </p>
        <p class="mt-10">
        <?php 
        if (pll_current_language() == "en"){
          echo "Having accumulated more than 10 years of experience in digital communication, they have a precise vision of a job well done: to be awesome.";
        } else {
          echo "Chacun affichant au compteur plus de 10 ans d’expérience en communication digitale, ils ont une vision assez précise du travail bien fait : envoyer du pâté.";
        }
        ?></p>
      </div>
    </div>
    <div class="studio-presentation__img"></div>
  </section>


</div>


<?php get_footer(); ?>