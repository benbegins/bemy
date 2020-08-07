<?php 
$titre = get_sub_field('titre');
$texte = get_sub_field('texte');
$image = get_sub_field('image');
?>

<section class="mt-20 lg:mt-32">
    <div class="container md:grid md:grid-cols-2 md:col-gap-4 lg:col-gap-12">
        <div class="">
            <div class="details__text-container my-6 lg:my-4 md:flex reveal-group">
                <h3 class="uppercase font-extrabold text-sm md:w-1/3 md:pr-10 md:text-right reveal-item"><?php echo $titre; ?></h3>
                <p class="md:w-2/3 reveal-item"><?php echo $texte; ?></p>
            </div>
        </div>
        <div class="my-6 lg:my-4 reveal">
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