<?php 
/*
Template Name: Studio
*/
get_header();
?>

<div class="studio page" id="studio">
    <section class="studio-intro container">
      <div class="studio-intro__maincontent py-40 flex flex-col justify-center min-h-screen">
        <h1 class="studio-intro__title text-title">
          Derrière le studio,
          <br />deux
          <span class="text-bemy-red">humbles génies.</span>
        </h1>
      </div>
    </section>

    <section class="studio-presentation relative">
      <div class="container md:grid md:grid-cols-2 lg:grid-cols-3">
        <div
          class="studio-presentation__text md:col-start-2 lg:col-start-3 md:mb-40 lg:mb-64 z-20 lg:text-xl"
        >
          <p>
            <strong>Tommy Bonneau</strong> et
            <strong>Benoit Beghyn</strong> fondent
            <span class="text-bemy-red font-extrabold">Bemy Studio</span> en mai 2020, en plein confinement, ce qui révèle en eux un sens aigu du timing.
          </p>
          <p
            class="mt-10"
          >Chacun affichant au compteur plus de 10 ans d’expérience en communication digitale, ils ont une vision assez précise du travail bien fait : être utile, responsable, fluide et envoyer du pâté.</p>
        </div>
      </div>
      <div class="studio-presentation__img md:absolute md:w-2/3 md:bottom-0 md:left-0 z-10"></div>
    </section>

    <section class="studio-services bg-bemy-light text-bemy-dark">
      <div class="container py-16 lg:py-24">
        <div
          class="studio-services__list text-center md:text-left md:grid md:grid-cols-3 lg:w-4/5 lg:mx-auto"
        >
          <div
            v-for="service in services"
            :key="service.id"
            class="studio-services__item py-6 lg:px-6"
          >
            <h2 class="studio-services__title text-40 uppercase">{{service.title}}</h2>
            <ul class="uppercase text-xs mt-4">
              <li
                v-for="competence in service.competences"
                :key="competence.index"
                class="my-1"
              >{{competence}}</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="studio-approche">
      <div class="container py-32 lg:py-48 md:grid md:grid-cols-2 md:gap-10 md:items-center">
        <div class="studio-approche__text lg:w-2/3 leading-relaxed">
          <p>Notre approche est artisanale et centrée utilisateur. Pour faire simple, ici pas de template. Nous imaginons des designs sur-mesure et nous nous appuyons sur les dernières technologies pour proposer à vos clients une expérience utilisateur digne de ce nom.</p>
          <p
            class="my-8"
          >Quand nous créons un site ou une identité de marque, le contenu et l’esthétisme se marient harmonieusement, et nous prenons soin de réfléchir chaque interaction, chaque détail, car nous sommes convaincus que la qualité réside autant dans l’idée que dans l’exécution.</p>
          <p>En résumé, c’est plutôt pas mal.</p>
        </div>
        <div class="studio-approche__img mt-10 md:mt-0 flex justify-center">
          <img src="<?php echo get_template_directory_uri(); ?>/dist/images/approche-illu.png" alt="Illustration projet" />
        </div>
      </div>
    </section>
  </div>


<?php get_footer(); ?>