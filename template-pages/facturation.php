<?php 
/*
Template Name: Facturation
*/
get_header('facturation');
?>


<section>
    <div class="container">
        <h1 class="font-bold uppercase text-center text-4xl mt-10">Factures</h1>
    </div>
</section>


<section>
    <div class="container mt-32">
        <div class="grid grid-cols-4 gap-x-4 uppercase text-center">
            <div class=" border py-4 px-6">
                <h2 class="text-xs">Chiffre d'affaires</h2>
                <p class="font-bold text-base total_factures"></p>
            </div>
            <div class="border py-4 px-6">
                <h2 class="text-xs">Total Net</h2>
                <p class="font-bold text-base total_net"></p>
            </div>
            <div class="border py-4 px-6">
                <h2 class="text-xs">Moyenne net mensuelle</h2>
                <p class="font-bold text-base moyenne_mensuelle"></p>
            </div>
            <div class="border border-bemy-red text-bemy-red py-4 px-6">
                <h2 class="text-xs">Paiement en attente</h2>
                <p class="font-bold text-base total_en_attente"></p>
            </div>
        </div>
    </div>

    <div class="container mt-32 flex justify-between items-start">
        <div class="flex items-center">
            <select class="select-year">
                <option value="0">--Année--</option>
                <?php 
                for ($i=2020; $i <= date('Y'); $i++) { 
                    echo '<option value="'. $i .'">' . $i . '</option>';
                }
                ?>
            </select>
            <select class="select-month ml-2 hidden">
                <option value="0">--Mois--</option>
                <?php 
                for ($i=1; $i <= 12; $i++) { 
                    echo '<option value="'. $i .'">' . $i . '</option>';
                }
                ?>
            </select>
            <select class="select-client ml-2 hidden">
                <option value="0">--Client--</option>
                <?php 
                $clients = get_terms('clients'); 

                foreach($clients as $client){
                    echo '<option value="'. $client->slug .'">' . $client->name . '</option>';
                }
                ?>
            </select>
            
            <button class="btn-reset-filter ml-4 text-xs underline">Réinitialiser</button>
        </div>
    </div>
</section>

<section>
    <div class="container divide-y divide-bemy-dark mt-10 liste-factures">

    <?php
        $annee_en_cours = date("Y");

        $args = array(
            'post_type'             => 'devis_facture',
            'tax_query'             => array(
                                            array(
                                                'taxonomy' => 'types_de_document',
                                                'field'    => 'slug',
                                                'terms'    => array('facture'),
                                            ),
            ),
            'posts_per_page'        => -1,
            'date_query' => array(
                array(
                    'year'  => $annee_en_cours,
                ),
            ),
        );
        $query = new WP_Query( $args );

        $facture_total = 0;
        $facture_attente = 0;

        if($query->have_posts()):
            while($query->have_posts()):$query->the_post();  
           
                get_template_part( './template-parts/facture');

            endwhile;
        endif;

    wp_reset_postdata();
    ?>

    </div>
</section>



<?php get_footer('facturation'); ?>