<?php get_header(); ?>

<div class="home">


    <!--intro-->
    <section class="home-intro min-h-screen flex items-center relative">
      <div class="container">
        <div class="lg:w-10/12">
          <?php if (pll_current_language() == "en"): ?>
            <h1 class="text-3xl page-title">We create <i>visual</i> <i>identities</i> and <i>websites</i> you're proud&nbsp;of.</h1>
            <p class="text-2xl font-extrabold mt-6 reveal-opacity">(Like... really)</p>
          <?php else : ?>
            <h1 class="text-3xl page-title">Nous créons des <i>identités</i> <i>visuelles</i> et des <i>sites</i> dont vous êtes fiers.</h1>
            <p class="text-xl font-extrabold mt-6 reveal-opacity">(Genre... vraiment)</p>
          <?php endif; ?>
        </div>  
      </div>
    </section>


    <!-- Studio -->
    <section class="section-pad-bottom">
      <div class="container">
        <div class="md:w-1/2 md:ml-auto" data-scroll data-scroll-speed="1">
          <p><?php pll_e('Nous sommes un studio de création Barcelo-Nantais qui accompagne les agences et les marques dans la production d’expériences claires, esthétiques et durables.'); ?></p>
          <?php if (pll_current_language() == "en"): ?>
            <a href="<?php echo get_site_url(); ?>/en/studio-en" class="btn btn-primary mt-10">Studio</a> 
          <?php else : ?>
            <a href="<?php echo get_site_url(); ?>/studio" class="btn btn-primary mt-10">Le studio</a> 
          <?php endif; ?>
        </div>
      </div>
    </section>


    <!--projets-->
    <section class="section-pad">
      <div class="container text-center md:pb-12">
        <h2 class="text-3xl back-line"><?php pll_e('Nos derniers projets'); ?></h2>
      </div>
    </section>

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
          <div data-scroll data-scroll-speed="2" class="home-projets__text-container z-10 relative md:w-1/2 lg:w-2/5">
            <p class="home-projets__proj-title uppercase text-sm font-extrabold text-bemy-red"><?php the_field('nom_du_client'); ?></p>

            <h2 class="home-projets__proj-description mt-1 mb-4 md:mb-6 lg:mb-8 text-xl leading-tight">
              <a href="<?php the_permalink(); ?>" class="cursor-image"><?php the_field('description_du_client'); ?></a>
            </h2>

            <p class="home-projets__proj-services text-sm"><?php the_field('liste_des_services'); ?></p>
          </div>
        </div>
        <a href="<?php the_permalink(); ?>" class="cursor-image">
          <div data-scroll class="home-projets__img-container overflow-hidden h-64 md:h-auto md:w-1/2 md:absolute inset-y-0 right-0 mt-8 md:mt-0">
            <div class="parallax-img-wrapper">
              <img src="<?php the_post_thumbnail_url('xxl'); ?>"
                srcset="<?php the_post_thumbnail_url('xxl'); ?> 1920w,
                <?php the_post_thumbnail_url('xl'); ?> 1440w,
                <?php the_post_thumbnail_url('large'); ?> 1024w"
                alt="<?php echo get_the_title(); ?>"
                class="h-full w-full object-cover" 
                data-scroll data-scroll-speed="-2"
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
      <div class="home-projets__reveal-mask" data-scroll data-scroll-offset="20%"></div>
    </section>

    <section class="section-pad">
      <div class="container text-center py-12">
        <?php if (pll_current_language() == "en"): ?>
          <a href="<?php echo get_site_url(); ?>/en/projet" class="btn btn-primary">All projects</a> 
        <?php else : ?>
          <a href="<?php echo get_site_url(); ?>/projet" class="btn btn-primary">Tous les projets</a> 
        <?php endif; ?>
      </div>
    </section>



     <!-- Autres articles -->
     <?php 
    $args = array(
        'post_type'          	=> array( 'post' ),
        'post_status'         => array('publish'),
        'posts_per_page'      => 3,
    );
    
    $query = new WP_Query( $args );
    if($query->have_posts()): 
    ?>
    <section class="section-pad">
        <div class="container lg:grid lg:grid-cols-2 pb-12">
            <div data-scroll data-scroll-speed="1">
                <h2 class="text-3xl mb-16 lg:mb-10 lg:w-5/6 back-line text-center lg:text-left"><?php pll_e('Nos derniers articles') ?></h2>
            </div>
            <div>
                <ul class="border-t border-bemy-light border-opacity-50">
                    <?php 
                    while($query->have_posts()):
                        $query->the_post();
                    ?> 

                    <li class="border-b border-bemy-light border-opacity-50">
                        <a href="<?php the_permalink(); ?>" class="grid grid-cols-3 items-center py-4 hover:text-bemy-red">
                            <p class="text-sm uppercase opacity-50"><?php the_date('F Y'); ?></p>
                            <p class="col-span-2"><?php the_title(); ?></p>    
                        </a>
                    </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>
    <?php endif; ?>


</div>

<?php get_footer(); ?>