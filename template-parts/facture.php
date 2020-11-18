<?php 
$type_de_doc = get_the_terms($post->ID, 'types_de_document');
$client = get_the_terms($post->ID, 'clients');
$paiement = get_field('paiement');
?>

<a href="<?php the_permalink(); ?>" class="block py-4 hover:text-bemy-red transition duration-200">
    <div class="grid grid-cols-10 items-center facture-item<?php if(!$paiement){echo ' facture_en_attente';} ?>">
        <div class="text-sm"><?php the_date('d-m-Y'); ?></div>
        <div class="text-sm"><?php the_field('numero'); ?></div>
        <div class="col-span-4 font-bold"><?php the_title(); ?></div>
        <div class="col-span-2 text-sm uppercase"><?php echo $client[0]->name; ?></div>
        <div class="text-center text-sm"><span class="prix-facture"><?php the_field('total'); ?></span>  €</div>
        <div class="text-xs italic text-center"><?php if($paiement){echo "Payé";}else{echo "<span class='text-bemy-red'>En attente de paiement</span>";} ?></div>
    </div>
</a>