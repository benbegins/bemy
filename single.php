<?php get_header(); ?>

<div class="single-article">

    <!-- Article Title -->
    <section class="single-article__section-title relative">
        <div class="container min-h-screen flex items-center py-40 relative z-10">
            <div class="single-article__title xl:w-4/5">
                <p class="text-sm reveal-opacity uppercase opacity-50 lg:ml-1"><?php echo get_the_date('F Y'); ?></p>
                <h1 class="text-3xl reveal">
                    <?php the_title(); ?>
                </h1>    
            </div>
            
        </div>
        <div class="single-article__thumbnail reveal-opacity absolute inset-0 z-0">
            <img 
            src="<?php the_post_thumbnail_url('xxl'); ?>"
            srcset="<?php the_post_thumbnail_url('xxl'); ?> 1920w,
                <?php the_post_thumbnail_url('xl'); ?> 1440w,
                <?php the_post_thumbnail_url('large'); ?> 1024w"
            alt="<?php echo get_the_title(); ?>"
            class="w-full h-full object-cover opacity-25"
            >
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
        'post_status'    		=> 'publish',
        'post__not_in'    		=> array($post->ID),

    );
    
    $query = new WP_Query( $args );
    if($query->have_posts()): 
    ?>
    <section class="section-pad">
        <div class="container lg:grid lg:grid-cols-2">
            <div>
                <h2 class="text-3xl mb-10 reveal lg:w-5/6">Nos derniers articles</h2>
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
            <div class="pb-20 lg:pb-40 lg:w-5/12 lg:ml-auto reveal">
                <p class="reveal">Vous savez qu’on crée des <strong>identités visuelles</strong> et des <strong>sites web</strong> qui envoient du pâté ? Allez jeter un oeil à nos projets pour voir de quoi on est capable.</p>
                <a href="<?php echo get_site_url(); ?>/projet" class="btn btn-primary mt-10 reveal">Voir nos projets</a>
            </div>
        </div>
    </section>



</div>

<?php get_footer(); ?>