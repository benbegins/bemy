<?php 
$titre = get_sub_field('titre');
$texte = get_sub_field('texte');
$image = get_sub_field('image');
?>

<section class="section-pad-top">
    <div class="container md:grid md:grid-cols-2 md:col-gap-4 lg:col-gap-12">
        <div class="">
            <div class="details__text-container my-6 lg:my-4 md:flex">
                <h3 class="uppercase font-extrabold text-bemy-red text-sm md:w-1/3 md:pr-10 md:mt-1 md:text-right"><?php echo $titre; ?></h3>
                <p class="md:w-2/3"><?php echo $texte; ?></p>
            </div>
        </div>
        <div class="my-6 lg:my-4">
            <?php if($image): ?>
            <img 
                src="<?php echo $image["sizes"]["large"]; ?>"
                srcset="<?php echo $image["sizes"]["medium_large"] . ' ' . $image["sizes"]["medium_large-width"] . 'w'; ?>,
                    <?php echo $image["sizes"]["large"] . ' ' . $image["sizes"]["large-width"] . 'w'; ?>"
                alt="<?php echo $image["alt"]; ?>"
                class="w-full"
            >
            <?php endif; ?>
        </div>
    </div>
</section>