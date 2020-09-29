<?php get_header(); ?>

<div class="home">
    <!--intro-->
    <section class="home-intro min-h-screen flex items-center justify-center container relative">
      <div class="home-intro__content mx-auto w-full">
        <h1 class="home-intro__title text-title reveal-bloc">
          <?php esc_html_e('Digital productions that rock your world.', 'bemy') ?>
          <br /><span class="text-bemy-red">Nothing less.</span>
          <div class="reveal-bloc-1 bg-bemy-dark skew-18"></div>
          <div class="reveal-bloc-2 bg-bemy-red skew-18"></div>
        </h1>
        <h2 class="home-intro__description uppercase text-base xxl:text-xl pl-2 reveal-hero">Web Design &amp; Brand Identity</h2>
        <div class="home-intro__btn-container relative inline-block md:absolute mt-8 md:right-0 md:mr-12 reveal-opacity">
          <a href="mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f" class="btn btn-primary relative home-intro__btn reveal-hero">Contactez-nous</a>  
        </div>
      </div>
    </section>
    <!--projets-->
    <section class="home-projets relative overflow-hidden">
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
        
      <div class="home-projets__item md:min-h-screen relative my-24 md:my-auto parallax-container">
        <div class="container md:flex md:min-h-screen flex-col justify-center">
          <div class="home-projets__text-container z-10 relative md:w-1/2 lg:w-1/3 reveal-group">
            <p class="home-projets__proj-title uppercase opacity-50 text-sm lg:text-base reveal-item"
            ><?php the_field('nom_du_client'); ?></p>
            <p class="home-projets__proj-description my-4 md:my-6 lg:my-8 text-40 leading-tight reveal-item"
            ><a href="<?php the_permalink(); ?>"><?php the_field('description_du_client'); ?></a></p>
            <p class="home-projets__proj-services text-sm lg:text-base reveal-item"><?php the_field('liste_des_services'); ?></p>
          </div>
        </div>
        <a href="<?php the_permalink(); ?>">
          <div class="home-projets__img-container overflow-hidden h-64 md:h-auto md:w-1/2 md:absolute inset-y-0 right-0 mt-8 md:mt-0">
              <div
                class="home-projets__img h-full w-full parallax-img"
                style="background-image:url('<?php
                if(wp_is_mobile()){
                    the_post_thumbnail_url('large');
                } else {
                  the_post_thumbnail_url('xxl');
                }
                ?>')"
              >
              </div>
          </div>
        </a>
      </div>

      <?php
        }
      }
      // Restore original Post Data
      wp_reset_postdata();
      ?>
      <div class="home-projets__reveal-mask absolute bg-bemy-dark w-1/2 h-full right-0 top-0 pointer-events-none"></div>
      
    </section>
    <!--studio-->
    <section class="home-studio relative overflow-hidden">
      <div class="container py-32 md:my-auto md:min-h-screen md:flex items-center xl:justify-end">
        <div class="home-studio__text-container xl:w-2/3">
          <p class="text-40 leading-normal reveal">
            Nous sommes un studio de création basé à Nantes et à Barcelone qui conçoit des
            <i>sites internet</i> et imagine des
            <i>identités visuelles</i> qui envoient du pâté.
          </p>
          <div class="home-studio__btn-container relative inline-block reveal-opacity">
            <a href="<?php echo get_site_url(); ?>/studio" class="btn btn-primary mt-10 relative">Le studio</a>  
          </div>
        </div>
      </div>
    </section>
</div>

<?php get_footer(); ?>