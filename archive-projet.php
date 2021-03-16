<?php get_header(); ?>

<div class="projets">
    <section class="projets-intro container">
        <div class="projets-intro__maincontent py-40 flex flex-col justify-center md:min-h-screen">
            <?php if(pll_current_language() == "en"){
                echo "<h1 class='projets-intro__title text-3xl reveal-bloc'>Calm yourself, here are our <span class='text-bemy-red'>latest projects.</span>
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>
                </h1>
                <p class='text-2xl font-extrabold mt-6 inline-block reveal-hero'>(Be careful, they are amazing)
                </p>";
            } else {
                echo "<h1 class='projets-intro__title text-3xl reveal-bloc'>Calmez-vous, voici nos <span class='text-bemy-red'>derniers projets.</span>
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>
                </h1>
                <p class='text-2xl font-extrabold mt-6 inline-block reveal-hero'>(Attention, ça envoie)
                </p>";
            } ?>
        </div>
    </section>
    <section class="projets-liste container md:grid md:grid-cols-2 md:gap-8 lg:gap-16">
        <?php
        if (have_posts() ) :
            while (have_posts() ) :
                the_post();
        ?>

        <article class="projets-liste__item py-8 lg:py-16">
            <a href="<?php the_permalink(); ?>" class="cursor-image">
                <div class="projets-liste__item__img-container parallax-container">
                    <div class="projets-liste__item__img reveal-opacity parallax-img" style="background-image: url('<?php  the_post_thumbnail_url('large'); ?>')"></div>
                </div>
            </a>
            <div class="reveal-group">
                <h2 class="uppercase font-normal opacity-50 mt-8 text-sm reveal-item"><?php the_field('nom_du_client'); ?></h2>
                <a href="<?php the_permalink(); ?>" class="cursor-image">
                    <h3 class="text-2xl leading-tight py-2 md:py-6 reveal-item"><?php the_field('description_du_client'); ?></h3>
                </a>
                <p class="text-sm font-normal reveal-item"><?php the_field('liste_des_services'); ?></p>
            </div>
        </article>

        <?php
            endwhile;
        endif;
        ?>
    </section>
</div>

<?php get_footer(); ?>