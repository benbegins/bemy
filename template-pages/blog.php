<?php 
/*
Template Name: Blog
*/
get_header();
?>


<div class="blog">

    <!-- Intro -->
    <section class="container">
        <div class="py-40 flex flex-col justify-center min-h-screen lg:w-2/3">
            <p class="text-sm font-extrabold text-bemy-red uppercase mb-2 ml-1 reveal-opacity"><?php pll_e('Le blog'); ?></p>
            <h1 class="text-3xl page-title"><?php if (pll_current_language() == "en"){
                echo 'Here, we talk about stuffs that <i>interest</i> <i>us.</i>';
                } else {
                echo 'Ici, on parle de sujets qui <i>nous</i> <i>intéressent.</i>';
                } ?></h1>
            <p class="text-xl font-extrabold mt-6 reveal-opacity">(Vous aussi peut-être)</p>
        </div>
    </section>


    <!-- Liste des articles -->
    <?php 
    $args = array(
        'post_type'          	=> array( 'post' ),
    );
    
    $query = new WP_Query( $args );
    if($query->have_posts()): 
    ?>
    <section class="section-pad-bottom">
        <div class="container md:grid md:grid-cols-2 md:gap-10 lg:gap-20">

            <?php 
            while($query->have_posts()):
                $query->the_post();
            ?> 

            <article class="blog__item text-sm">
                <a href="<?php the_permalink(); ?>" class="block cursor-image">
                    <div class="blog__item__img-container parallax-container">
                        <div class="parallax-img-wrapper">
                            <div data-scroll data-scroll-speed="-1" class="blog__item__img parallax-img" style="background-image: url('<?php  the_post_thumbnail_url('large'); ?>')"></div>    
                        </div>
                    </div>
                </a>
                <div>
                    <div class="my-10">
                        <h2 class="text-xl font-extrabold"><a class="cursor-image" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>    
                    </div>
                    <div class="text-base">
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
        <div class="container flex flex-col-reverse lg:flex-row lg:items-center">
            <div class="lg:w-1/2">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/benoit-tommy.png" alt="Tommy Bonneau / Benoit Beghyn" class="w-full" />
            </div>
            <div class="pb-20 lg:pb-0 lg:w-5/12 lg:ml-auto" data-scroll data-scroll-speed="1">
                <p>Vous savez qu’on crée des <strong>identités visuelles</strong> et des <strong>sites web</strong> qui envoient du pâté ? Allez jeter un oeil à nos projets pour voir de quoi on est capable.</p>
                <a href="<?php echo get_site_url(); ?>/projet" class="btn btn-primary mt-10">Voir nos projets</a>
            </div>
        </div>
    </section>
    

</div>


<?php get_footer(); ?>