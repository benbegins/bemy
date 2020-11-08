<?php get_header(); ?>

<div class="projets">
    <section class="projets-intro container">
        <div class="projets-intro__maincontent py-40 flex flex-col justify-center md:min-h-screen">
            <?php if(pll_current_language() == "en"){
                echo "<h1 class='projets-intro__title text-title md:w-11/12 reveal-bloc'>Calm down, here are our <span class='text-bemy-red'>latest projects.</span>
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>
                </h1>
                <p class='text-40 mt-6 inline-block reveal-hero'>(Be careful, they are amazing)
                </p>";
            } else {
                echo "<h1 class='projets-intro__title text-title md:w-11/12 reveal-bloc'>Calmez-vous, voici nos <span class='text-bemy-red'>derniers projets.</span>
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>
                </h1>
                <p class='text-40 mt-6 inline-block reveal-hero'>(Attention, ça envoie)
                </p>";
            } ?>
            
        </div>
    </section>
    <section class="projets-liste container md:grid md:grid-cols-2 md:gap-8">
        <?php
        if (have_posts() ) :
            while (have_posts() ) :
                the_post();
        ?>

        <article class="projets-liste__item py-8">
            <a href="<?php the_permalink(); ?>">
                <div class="projets-liste__item__img-container">
                    <div class="projets-liste__item__img reveal-opacity" style="background-image: url('<?php  the_post_thumbnail_url('large'); ?>')"></div>
                </div>
            </a>
            <div class="reveal-group">
                <h2 class="uppercase opacity-50 mt-8 text-sm md:text-base reveal-item"><?php the_field('nom_du_client'); ?></h2>
                <a href="<?php the_permalink(); ?>">
                    <h3 class="text-40 leading-tight py-2 reveal-item"><?php the_field('description_du_client'); ?></h3>
                </a>
                <p class="text-sm md:text-base reveal-item"><?php the_field('liste_des_services'); ?></p>
            </div>
        </article>

        <?php
            endwhile;
        endif;
        ?>
    </section>
    <section class="projets-fin container">
        <div class="flex flex-col justify-center md:min-h-screen py-40">
        <?php if(pll_current_language() == "en"){
            echo "<h2 class='text-title reveal-bloc'>Only <span class='text-bemy-red'>2 projects</span>? <br>It is a scandal!
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>
            </h2>
            <p class='mt-8 leading-relaxed lg:w-1/2 lg:ml-auto lg:mt-20 reveal'>Please show a little patience! The studio is just being born, we need time to do some other amazing projects. If it bothers you, we can always <a href='mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f' class='font-bold underline std-link'>work together</a> and add your project to the list.</p>";
        } else {
            echo "<h2 class='text-title reveal-bloc'>Seulement <span class='text-bemy-red'>2 projets</span> ? <br>C'est un scandale !
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>
            </h2>
            <p class='mt-8 leading-relaxed lg:w-1/2 lg:ml-auto lg:mt-20 reveal'>Un peu de patience ! Le studio vient tout juste de voir le jour, il nous faut le temps de réaliser d’autres projets incroyables. Si ça vous choque, vous pouvez toujours nous <a href='mailto:hel&#108;o&#64;b%65%6dy%2e&#115;%74&#117;di%6f' class='font-bold underline std-link'>confier un projet</a> et on l’ajoutera à la liste.</p>";
        }
        ?>
            
        </div> 
    </section>
</div>

<?php get_footer(); ?>