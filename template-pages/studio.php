<?php 
/*
Template Name: Studio
*/
get_header();
?>

<div class="studio" id="studio">
  <div class="overflow-hidden">
    <section class="studio-intro container">
      <div class="studio-intro__maincontent py-40 flex flex-col justify-center min-h-screen">
        <h1 class="studio-intro__title text-title reveal-bloc">
          <?php if (pll_current_language() == "en"){
            echo 'Behind the studio,<br />two <span class="text-bemy-red">humble geniuses.</span>';
          } else {
            echo 'Derrière le studio,<br />deux <span class="text-bemy-red">humbles génies.</span>';
          } ?>
          <div class="reveal-bloc-1 bg-bemy-dark skew-18"></div>
          <div class="reveal-bloc-2 bg-bemy-red skew-18"></div>
        </h1>
      </div>
    </section>

    <section class="studio-presentation relative">
      <div class="container md:grid md:grid-cols-2 lg:grid-cols-3">
        <div
          class="studio-presentation__text md:col-start-2 lg:col-start-3 md:mb-40 lg:mb-64 z-20 lg:text-xl reveal-group"
        >
          <p class="reveal-item">
            <?php 
            if (pll_current_language() == "en"){
              echo "<strong>Tommy Bonneau</strong> and
            <strong>Benoit Beghyn</strong> founded
            <span class='text-bemy-red font-extrabold'>Bemy Studio</span> in May 2020, in full lockdown, which reveals in them a keen sense of timing.";
            } else {
              echo "<strong>Tommy Bonneau</strong> et
            <strong>Benoit Beghyn</strong> fondent
            <span class='text-bemy-red font-extrabold'>Bemy Studio</span> en mai 2020, en plein confinement, ce qui révèle en eux un sens aigu du timing.";
            } ?>
          </p>
          <p class="mt-10 reveal-item">
          <?php 
          if (pll_current_language() == "en"){
            echo "Having accumulated more than 10 years of experience in digital communication, they have a fairly precise vision of a job well done: to be useful, responsible, fluid and wicked.";
          } else {
            echo "Chacun affichant au compteur plus de 10 ans d’expérience en communication digitale, ils ont une vision assez précise du travail bien fait : être utile, responsable, fluide et envoyer du pâté.";
          }
          ?></p>
        </div>
      </div>
      <div class="studio-presentation__img md:absolute md:w-2/3 md:bottom-0 md:left-0 z-10"></div>
    </section>
  </div>
    

    <section class="studio-services bg-bemy-light text-bemy-dark">
      <div class="container py-16 lg:py-24">
        <div
          class="studio-services__list text-center md:text-left md:grid md:grid-cols-3 lg:w-4/5 lg:mx-auto reveal-group"
        >
          <div class="studio-services__item py-6 lg:px-6 reveal-item">
            <h2 class="studio-services__title text-40 uppercase">Web</h2>
            <ul class="uppercase text-xs mt-4">
              <li class="my-1">UX/UI</li>
              <li class="my-1"><?php pll_e('Site vitrine'); ?></li>
              <li class="my-1"><?php pll_e('Site e-commerce'); ?></li>
              <li class="my-1">Wordpress</li>
            </ul>
          </div>
          <div class="studio-services__item py-6 lg:px-6 reveal-item">
            <h2 class="studio-services__title text-40 uppercase">Content</h2>
            <ul class="uppercase text-xs mt-4">
              <li class="my-1">Motion</li>
              <li class="my-1">Photo</li>
              <li class="my-1">3D</li>
              <li class="my-1">Illustration</li>
            </ul>
          </div>
          <div class="studio-services__item py-6 lg:px-6 reveal-item">
            <h2 class="studio-services__title text-40 uppercase">Branding</h2>
            <ul class="uppercase text-xs mt-4">
              <li class="my-1">Logo</li>
              <li class="my-1"><?php pll_e('Identité visuelle'); ?></li>
              <li class="my-1"><?php pll_e('Papeterie'); ?></li>
              <li class="my-1"><?php pll_e('Kit réseaux sociaux'); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="studio-approche overflow-hidden">
      <div class="container py-32 lg:py-48 md:grid md:grid-cols-2 md:gap-10 md:items-center">
        <div class="studio-approche__text lg:w-2/3 leading-relaxed reveal-group">
          <?php 
          if (pll_current_language() == "en"){
            echo"<p class='reveal-item'>Our approach is artisanal and user-centric. To put it simply, there is no template here. We imagine tailor-made designs and we rely on the latest technologies to offer your customers a meaningful user experience worthy of the name.</p>
          <p
            class='my-8 reveal-item'
          >When we create a site or a brand identity, the content and the aesthetics combine harmoniously, and we take care to think about every interaction, every detail, because we are convinced that the quality lies as much in the idea as in the execution.</p>
          <p class='reveal-item'>In short, it's pretty good</p>";
          } else {
            echo "<p class='reveal-item'>Notre approche est artisanale et centrée utilisateur. Pour faire simple, ici pas de template. Nous imaginons des designs sur-mesure et nous nous appuyons sur les dernières technologies pour proposer à vos clients une expérience utilisateur digne de ce nom.</p>
            <p
              class='my-8 reveal-item'
            >Quand nous créons un site ou une identité de marque, le contenu et l’esthétisme se marient harmonieusement, et nous prenons soin de réfléchir chaque interaction, chaque détail, car nous sommes convaincus que la qualité réside autant dans l’idée que dans l’exécution.</p>
            <p class='reveal-item'>En résumé, c'est plutôt pas mal.</p>";
          } ?>
          
        </div>
        <div class="studio-approche__img mt-10 md:mt-0 flex justify-center relative reveal-opacity">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/illus-studio.svg" alt="Illustration projet" class="w-full lg:w-2/3" />
        </div>
      </div>
      <div class="container pt-4 mt-32 pb-32 lg:pb-64 lg:mt-48 bg-bemy-dark relative">
        <div class="studio-projets lg:w-2/3 lg:ml-auto reveal-group">
          <h2 class="studio-projets__title text-40 mb-4 reveal-item"><?php if (pll_current_language() == "en"){echo 'Our lastest projects';} else {echo 'Nos derniers projets';} ?></h2>
          <ul class="studio-projets__list divide-y reveal-item">
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
              <li class="studio-projets__item py-4 md:py-5 grid text-sm grid-cols-2 md:grid-cols-3">
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
        </div>
      </div>
    </section>
  </div>


<?php get_footer(); ?>