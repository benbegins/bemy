<?php 
$titre = get_sub_field('titre');
$texte = get_sub_field('texte');
$image1 = get_sub_field('image1');
$image2 = get_sub_field('image2');
?>

<section class="section-pad-top">
    <div class="container md:grid md:grid-cols-2 md:col-gap-4 lg:col-gap-12">
        <div>
            <div class="my-6 lg:my-4 lg:flex reveal-group">
                <h3 class="uppercase font-extrabold text-sm lg:w-1/3 lg:pr-10 lg:text-right reveal-item"><?php echo $titre; ?></h3>
                <p class="lg:w-2/3 reveal-item"><?php echo $texte; ?></p>
            </div>
            <?php if($image1): ?>
            <div class="reveal">
                <img 
                    src="<?php echo $image1["sizes"]["large"]; ?>"
                    srcset="<?php echo $image1["sizes"]["medium_large"] . ' ' . $image1["sizes"]["medium_large-width"] . 'w'; ?>,
                        <?php echo $image1["sizes"]["large"] . ' ' . $image1["sizes"]["large-width"] . 'w'; ?>"
                    alt="<?php echo $image1["alt"]; ?>"
                    class="w-full md:mt-20"
                >    
            </div>
            <?php endif; ?>
        </div>
        
        <div class="my-6 lg:my-4 reveal">
            <?php if($image2): ?>
            <img 
                src="<?php echo $image2["sizes"]["large"]; ?>"
                srcset="<?php echo $image2["sizes"]["medium_large"] . ' ' . $image2["sizes"]["medium_large-width"] . 'w'; ?>,
                    <?php echo $image2["sizes"]["large"] . ' ' . $image2["sizes"]["large-width"] . 'w'; ?>"
                alt="<?php echo $image2["alt"]; ?>"
                class="w-full"
            >
            <?php endif; ?>
        </div>
    </div>
</section>