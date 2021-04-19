<?php get_header(); ?>

<div class="single-article">

    <!-- Article Title -->
    <section class="single-article__section-title relative">
        <div class="container min-h-screen flex items-center py-40 relative z-10">
            <div class="single-article__title lg:w-2/3" data-scroll data-scroll-speed="1">
                <p class="text-sm uppercase opacity-50 lg:ml-1"><?php echo get_the_date('F Y'); ?></p>
                <h1 class="text-3xl page-title"><?php the_title(); ?></h1>    
            </div>
            
        </div>
        <div class="single-article__thumbnail absolute inset-0 z-0">
            <div class="single-article__thumbnail-container">
                <img 
                src="<?php the_post_thumbnail_url('xxl'); ?>"
                srcset="<?php the_post_thumbnail_url('xxl'); ?> 1920w,
                    <?php the_post_thumbnail_url('xl'); ?> 1440w,
                    <?php the_post_thumbnail_url('large'); ?> 1024w"
                alt="<?php echo get_the_title(); ?>"
                class="w-full h-full object-cover"
                >    
            </div>
        </div>
    </section>


    <!-- Contenu article -->
    <section class="single-article__maincontent section-pad-bottom">
        <main class="container md:grid md:grid-cols-3 lg:grid-cols-12">
            <article class="md:col-span-2 md:col-start-2 lg:col-span-7 lg:col-start-5">
                <?php the_content(); ?>
            </article>
        </main>
    </section>


    <!-- Autres articles -->
    <?php 
    $args = array(
        'post_type'          	=> array( 'post' ),
        'post__not_in'    		=> array($post->ID),

    );
    
    $query = new WP_Query( $args );
    if($query->have_posts()): 
    ?>
    <section class="section-pad">
        <div class="container lg:grid lg:grid-cols-2 pb-12">
            <div>
                <h2 data-scroll data-scroll-speed="1" class="text-3xl mb-16 lg:mb-10 lg:w-5/6 back-line text-center lg:text-left">Nos derniers articles</h2>
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


    <!-- Bemy -->
    <section class="pt-20 lg:pt-0">
        <div class="container flex flex-col-reverse lg:flex-row lg:items-end">
            <div class="lg:w-1/2">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/benoit-tommy.png" alt="Tommy Bonneau / Benoit Beghyn" class="w-full" />
            </div>
            <div class="pb-20 lg:pb-40 lg:w-5/12 lg:ml-auto" data-scroll data-scroll-speed="1">
                <p>Vous savez qu’on crée des <strong>identités visuelles</strong> et des <strong>sites web</strong> qui envoient du pâté ? Allez jeter un oeil à nos projets pour voir de quoi on est capable.</p>
                <a href="<?php echo get_site_url(); ?>/projet" class="btn btn-primary mt-10">Voir nos projets</a>
            </div>
        </div>
    </section>



</div>

<?php get_footer(); ?>