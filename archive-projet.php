<?php get_header(); ?>

<div class="projets">

    <!-- Intro -->
    <section class="container">
        <div class="py-40 flex flex-col justify-center min-h-screen lg:w-2/3">
            <p class="text-sm font-extrabold text-bemy-red uppercase mb-2 ml-1"><?php pll_e('Projets'); ?></p>
            <h1 class="text-3xl page-title">
                <?php if (pll_current_language() == "en"){
                echo 'I hope you are sitting down because here are our <span class="fonde">lastest projects.</span>';
                } else {
                echo 'J\'espère que vous êtes assis car voici nos <span class="fonde">derniers projets.</span>';
                } ?>
            </h1>
        </div>
    </section>

    
    <!-- Liste Projets -->
    <section class="projets-liste container md:grid md:grid-cols-2 md:gap-8 lg:gap-20">
        <?php
        if (have_posts() ) :
            while (have_posts() ) :
                the_post();
        ?>

        <article class="projets-liste__item">
            <a href="<?php the_permalink(); ?>" class="cursor-image">
                <div class="projets-liste__item__img-container parallax-container">
                    <div class="projets-liste__item__img parallax-img" style="background-image: url('<?php  the_post_thumbnail_url('large'); ?>')"></div>
                </div>
            </a>
            <div>
                <h2 class="uppercase text-sm font-extrabold text-bemy-red mt-8 lg:mt-12"><?php the_field('nom_du_client'); ?></h2>
                <a href="<?php the_permalink(); ?>" class="cursor-image">
                    <h3 class="mt-1 mb-4 md:mb-6 lg:mb-8 text-xl leading-tight"><?php the_field('description_du_client'); ?></h3>
                </a>
                <p class="text-sm"><?php the_field('liste_des_services'); ?></p>
            </div>
        </article>

        <?php
            endwhile;
        endif;
        ?>
    </section>


</div>

<?php get_footer(); ?>