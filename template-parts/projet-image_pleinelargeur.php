<?php 
$image = get_sub_field('image');
?>

<section class="container section-pad-top" data-scroll data-scroll-speed="1">
    <img 
    src="<?php echo $image["sizes"]["xxl"]; ?>"
    srcset="<?php echo $image["sizes"]["medium_large"] . ' ' . $image["sizes"]["medium_large-width"] . 'w'; ?>,
        <?php echo $image["sizes"]["large"] . ' ' . $image["sizes"]["large-width"] . 'w'; ?>,
        <?php echo $image["sizes"]["xl"] . ' ' . $image["sizes"]["xl-width"] . 'w'; ?>,
        <?php echo $image["sizes"]["xxl"] . ' ' . $image["sizes"]["xxl-width"] . 'w'; ?>"
    alt="<?php echo $image["alt"]; ?>"
    class="w-full"
    >
</section>