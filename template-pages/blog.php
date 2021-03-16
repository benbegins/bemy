<?php 
/*
Template Name: Blog
*/
get_header();
?>


<div class="blog">


    <!-- Intro -->
    <section>
        <div class="container py-40 flex flex-col justify-center md:min-h-screen">
            <h1 class="text-3xl md:w-5/6 reveal-bloc">
                Ici, on parle de sujets qui <span class='text-bemy-red'>nous intéressent.</span>
                <div class='reveal-bloc-1 bg-bemy-dark skew-18'></div>
                <div class='reveal-bloc-2 bg-bemy-red skew-18'></div>    
            </h1>
            <p class='text-2xl font-extrabold mt-6 inline-block reveal-hero'>( Vous aussi peut-être )
            </p>
        </div>
    </section>


    <!-- Liste des articles -->
    <?php 
    $args = array(
        'post_type'          	=> array( 'post' ),
        'post_status'    		=> 'publish',
    );
    
    $query = new WP_Query( $args );
    if($query->have_posts()): 
    ?>
    <section class="section-pad">
        <div class="container md:grid md:grid-cols-2 md:gap-10 lg:gap-16">

            <?php 
            while($query->have_posts()):
                $query->the_post();
            ?> 

            <article class="blog__item text-sm mb-20">
                <a href="<?php the_permalink(); ?>" class="block cursor-image reveal-opacity">
                    <div class="blog__item__img-container parallax-container">
                        <div class="blog__item__img reveal-opacity parallax-img" style="background-image: url('<?php  the_post_thumbnail_url('medium_large'); ?>')"></div>
                    </div>
                </a>
                <div class="reveal-group">
                    <div class="my-10">
                        <p class="uppercase opacity-50 reveal-item"><?php the_date('F Y'); ?></p>
                        <h2 class="text-2xl font-extrabold reveal-item"><a class="cursor-image" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
                    </div>
                    <div class="reveal-item">
                        <?php the_excerpt(); ?>    
                    </div>    
                </div>
            </article>

            <?php endwhile; ?>

        </div>
    </section>
    <?php endif; ?>


    <!-- Bemy -->
    <section class="pt-20 lg:pt-0">
        <div class="container flex flex-col-reverse lg:flex-row lg:items-end">
            <div class="lg:w-1/2">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/benoit-tommy.png" alt="Tommy Bonneau / Benoit Beghyn" class="w-full" />
            </div>
            <div class="pb-20 lg:pb-40 lg:w-5/12 lg:ml-auto reveal">
                <p class="reveal">Vous savez qu’on crée des <strong>identités visuelles</strong> et des <strong>sites web</strong> qui envoient du pâté ? Allez jeter un oeil à nos projets pour voir de quoi on est capable.</p>
                <a href="<?php echo get_site_url(); ?>/projet" class="btn btn-primary mt-10 reveal">Voir nos projets</a>
            </div>
        </div>
    </section>
    

</div>


<?php get_footer(); ?>