<?php get_header(); ?>

<div class="page-text">

    <section class="container">
      <div class="py-40 flex flex-col justify-center min-h-screen">
        <h1 class="text-title reveal-bloc">
          <?php the_title(); ?>
          <div class="reveal-bloc-1 bg-bemy-dark skew-18"></div>
          <div class="reveal-bloc-2 bg-bemy-red skew-18"></div>
        </h1>
      </div>
    </section>

    <section class="page-text__content container section-pad-bottom">
        <div class="lg:w-3/4">
            <?php 
            while(have_posts()): the_post();
            
            the_content();

            endwhile;

            ?>
        </div>
    </section>


</div>
<?php get_footer(); ?>