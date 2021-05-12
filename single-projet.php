<?php get_header(); ?>

<div class="projet">

    <!-- Intro -->
    <section class="container pb-48 pt-64">
        <div data-scroll data-scroll-speed="2" class="projet-intro md:w-1/2 lg:w-2/5">
            <p class="font-extrabold text-bemy-red uppercase text-sm reveal-opacity"><?php the_field('nom_du_client'); ?></p>
            <h2 class="text-2xl leading-tight mt-1 pb-4 lg:pb-6 page-title no-line"><?php the_field('description_du_client'); ?></h2>
            <p class="text-sm reveal-opacity"><?php the_field('liste_des_services'); ?></p>
        </div>
    </section>

    <!-- Image principale -->
    <section class="parallax-container h-64 md:h-screen w-full">
        <div class="parallax-img-wrapper">
            <img 
            src="<?php the_post_thumbnail_url('xxl'); ?>"
            srcset="<?php the_post_thumbnail_url('xxl'); ?> 1920w,
                <?php the_post_thumbnail_url('xl'); ?> 1440w,
                <?php the_post_thumbnail_url('large'); ?> 1024w"
            alt="<?php echo get_the_title(); ?>"
            class="w-full h-full object-cover reveal-opacity"
            data-scroll data-scroll-speed="-2"
            >        
        </div>
    </section>
    

    <!-- Presentation du projet -->
    <section class="container section-pad-top">
        <div class="lg:w-3/5 lg:ml-auto">
            <h2 class="text-2xl leading-tight "><?php the_field('titre_presentation'); ?></h2>
            <div class="projet__presentation my-6 leading-relaxed lg:my-10 ">
                <?php the_field('presentation'); ?>
            </div>
            <?php 
            $lien = get_field('lien');
            if($lien):
            ?>
            <div class="">
                <a href="<?php the_field('lien'); ?>" class="uppercase font-extrabold underline std-link" target="_blank"><?php pll_e('Voir le site'); ?></a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Détail projet -->
    <section>
    <?php
    if( have_rows('detail_projet') ):

        while ( have_rows('detail_projet') ) : the_row();

            // Section Image fullscreen
            if( get_row_layout() == 'image_fullscreen' ):
                get_template_part('template-parts/projet-image_fullscreen');

            // Section Image largeur container
            elseif( get_row_layout() == 'image_pleine_largeur' ): 
                get_template_part('template-parts/projet-image_pleinelargeur');
            
            // Section Image 75%
            elseif( get_row_layout() == 'image_75' ): 
                get_template_part('template-parts/projet-image_75');
            
            // Section Bloc image-texte
            elseif( get_row_layout() == 'bloc_image_texte' ): 
                get_template_part('template-parts/projet-bloc_imagetexte');

            // Section Bloc image-texte simple
            elseif( get_row_layout() == 'bloc_image_texte_simple' ): 
                get_template_part('template-parts/projet-bloc_imagetexte_simple');

            // Section Bloc video
            elseif( get_row_layout() == 'bloc_video' ): 
                get_template_part('template-parts/projet-bloc_video');

            endif;

        endwhile;
    endif;
    ?>
    </section>


    <!-- Projet suivant -->
    <section class="projet-suivant">

        <?php 
            $projet_suivant = get_previous_post();
            $projet_suivant_id = $projet_suivant->ID;

            if(empty($projet_suivant) || is_null($projet_suivant)){

                $args = array(
                    'post_type'              => array( 'projet' ),
                    'posts_per_page'         => '1',
                );

                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) {
                    while ( $query->have_posts() ) {
                        $query->the_post();
                        $projet_suivant_id = $post->ID;
                    }
                }

            }
        ?>
        
        <div class="container py-48 lg:min-h-screen flex items-center justify-center">
            <p class="text-3xl font-extrabold"><a href="<?php echo get_permalink($projet_suivant_id); ?>" class="link-border-bottom inline-block"><?php pll_e('Projet suivant'); ?></a></p>
        </div>
    </section>
</div>

<?php get_footer(); ?>