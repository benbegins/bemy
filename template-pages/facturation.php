<?php 
/*
Template Name: Facturation
*/
get_header('facturation');

$annee_en_cours = date("Y");

$annee = $_GET["annee"];
if (isset($annee) && is_numeric($annee)) {
    $annee = strip_tags($annee);
    $annee = stripslashes($annee);
    $annee = trim($annee);

    $annee_en_cours = $annee;
}
?>



<section>
    <div class="container">
        <h1 class="font-bold uppercase text-center text-4xl mt-10">Factures <?php echo $annee_en_cours; ?></h1>
    </div>
</section>


<section>
    <div class="container mt-20">
        <form method="get" class="flex">
            <select name="annee" id="annee">
                <option value="">--Année--</option>
                <?php 
                for ($i=2020; $i <= date('Y'); $i++) { 
                    echo '<option value="'. $i .'">' . $i . '</option>';
                }
                ?>
            </select>
            <input type="submit" value="Filtrer">
        </form>
    </div>
</section>


<section>
    <div class="container divide-y divide-bemy-dark mt-5">

    <?php
        $args = array(
            'post_type'             => 'devis_facture',
            'tax_query'             => array(
                                            array(
                                                'taxonomy' => 'types_de_document',
                                                'field'    => 'slug',
                                                'terms'    => array('facture'),
                                            ),
            ),
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

            $type_de_doc = get_the_terms($post->ID, 'types_de_document');
            $client = get_the_terms($post->ID, 'clients');
            $paiement = get_field('paiement');

            $facture_total += get_field('total');
            if(!$paiement){
                $facture_attente += get_field('total');
            }
    ?>

        <a href="<?php the_permalink(); ?>" class="block py-4 hover:text-bemy-red transition duration-200">
            <div class="grid grid-cols-10 items-center">
                <div class="text-sm"><?php the_field('date'); ?></div>
                <div class="text-sm"><?php the_field('numero'); ?></div>
                <div class="col-span-4 font-bold"><?php the_title(); ?></div>
                <div class="col-span-2 text-sm uppercase"><?php echo $client[0]->name; ?></div>
                <div class="text-center text-sm"><?php the_field('total'); ?> €</div>
                <div class="text-xs italic text-center"><?php if($paiement){echo "Payé";}else{echo "<span class='text-bemy-red'>En attente de paiement</span>";} ?></div>
            </div>
        </a>

    <?php
            endwhile;
        endif;

    wp_reset_postdata();
    ?>

    </div>
</section>


<section>
    <div class="container flex mt-20 uppercase text-sm text-center">
        <div class="border p-4">
            <h2>CA <?php echo $annee_en_cours; ?></h2>
            <p class="font-bold"><?php echo $facture_total; ?> €</p>
        </div>
        <div class="ml-10 border p-4">
            <h2>En attente</h2>
            <p class="font-bold"><?php echo $facture_attente; ?> €</p>
        </div>
    </div>
</section>


<?php get_footer('facturation'); ?>