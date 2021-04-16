<?php get_header(); ?>

<div class="page-text">

    <section class="container">
      <div class="py-40 flex flex-col justify-center min-h-screen">
        <h1 class="text-3xl page-title"><?php the_title(); ?></h1>
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