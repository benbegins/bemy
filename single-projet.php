<?php get_header(); ?>

<div class="projet">

    <!-- Intro -->
    <section class="container pb-48 pt-64">
        <div class="projet-intro md:w-1/2 lg:w-2/5 reveal-group">
            <p class="opacity-50 uppercase reveal-item"><?php the_field('nom_du_client'); ?></p>
            <h2 class="text-40 leading-tight my-4 reveal-item"><?php the_field('description_du_client'); ?></h2>
            <p class="reveal-item"><?php the_field('liste_des_services'); ?></p>
        </div>
    </section>

    <!-- Image principale -->
    <section class="parallax-container h-64 md:h-screen w-full">
        <div class="h-full w-full bg-cover bg-center bg-no-repeat lg:bg-fixed parallax-img reveal-opacity" style="background-image: url('<?php
        if(wp_is_mobile()){
            the_post_thumbnail_url('large'); 
        } else {
            the_post_thumbnail_url('xxl'); 
        }
        ?>')">
        </div>
    </section>
    

    <!-- Presentation du projet -->
    <section class="container pt-20 lg:pt-32">
        <div class="lg:w-3/5 lg:ml-auto reveal-group">
            <h2 class="text-40 leading-tight reveal-item"><?php the_field('titre_presentation'); ?></h2>
            <div class="projet__presentation my-6 leading-relaxed lg:my-10 reveal-item">
                <?php the_field('presentation'); ?>
            </div>
            <div class="reveal-item">
                <a href="<?php the_field('lien'); ?>" class="uppercase font-extrabold underline std-link" target="_blank">Voir le site</a>
            </div>
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

            // Section Image container
            elseif( get_row_layout() == 'image_pleine_largeur' ): 
                get_template_part('template-parts/projet-image_pleinelargeur');
            
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
        <div class="container py-48 lg:min-h-screen flex items-center justify-center">
            <p class="text-title"><a href="<?php the_field('projet_suivant'); ?>" class="link-border-bottom inline-block reveal-opacity"><?php pll_e('Projet suivant'); ?></a></p>
        </div>
    </section>
</div>

<?php get_footer(); ?>