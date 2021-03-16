<?php get_header(); ?>

<div class="home">


    <!--intro-->
    <section class="home-intro min-h-screen flex items-center justify-center container relative">
      <div class="home-intro__content mx-auto w-full">
        <h1 class="home-intro__title text-3xl reveal-bloc">
          <?php esc_html_e('Digital productions that rock your world.', 'bemy') ?>
          <br /><span class="text-bemy-red">Nothing less.</span>
          <div class="reveal-bloc-1 bg-bemy-dark skew-18"></div>
          <div class="reveal-bloc-2 bg-bemy-red skew-18"></div>
        </h1>
        <p class="home-intro__description uppercase text-sm pl-2 reveal-hero">Web Design &amp; Brand Identity</p>
        <div class="home-intro__btn-container">
          <a href="mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f" class="btn btn-primary home-intro__btn reveal-hero"><?php pll_e('Contactez-nous'); ?></a>  
        </div>
      </div>
    </section>


    <!--projets-->
    <section class="home-projets relative overflow-hidden">
      <?php 
      // WP_Query arguments
      $args = array(
        'post_type'              => array( 'projet' ),
        'posts_per_page'         => '3',
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
          <div class="home-projets__text-container z-10 relative md:w-1/2 lg:w-2/5 reveal-group">
            <p class="home-projets__proj-title uppercase opacity-50 text-sm reveal-item"
            ><?php the_field('nom_du_client'); ?></p>
            <h2 class="home-projets__proj-description my-4 md:my-6 lg:my-8 text-2xl leading-tight reveal-item"
            ><a href="<?php the_permalink(); ?>" class="cursor-image"><?php the_field('description_du_client'); ?></a></h2>
            <p class="home-projets__proj-services font-normal text-sm reveal-item"><?php the_field('liste_des_services'); ?></p>
          </div>
        </div>
        <a href="<?php the_permalink(); ?>" class="cursor-image">
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
          <div class="text-2xl font-extrabold reveal">
            <?php the_field('presentation_studio'); ?>
          </div>
          <div class="home-studio__btn-container relative inline-block reveal-opacity">
            <?php if (pll_current_language() == "en"): ?>
              <a href="<?php echo get_site_url(); ?>/en/studio-en" class="btn btn-primary mt-10">Studio</a> 
            <?php else : ?>
              <a href="<?php echo get_site_url(); ?>/studio" class="btn btn-primary mt-10">Le studio</a> 
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>


</div>

<?php get_footer(); ?>