<?php 
$image = get_sub_field('image');
$disposition = get_sub_field('disposition');
$margin = null;

// Define margin class regarding the disposition
switch ($disposition){
    case 'left' :
        $margin = "mr-auto";
        break;
    case 'center' :
        $margin = "mx-auto";
        break;
    case 'right' :
        $margin = "ml-auto";
        break;
}

?>

<section class="container section-pad-top" data-scroll data-scroll-speed="1">
    <img 
    src="<?php echo $image["sizes"]["xxl"]; ?>"
    srcset="<?php echo $image["sizes"]["medium_large"] . ' ' . $image["sizes"]["medium_large-width"] . 'w'; ?>,
        <?php echo $image["sizes"]["large"] . ' ' . $image["sizes"]["large-width"] . 'w'; ?>,
        <?php echo $image["sizes"]["xl"] . ' ' . $image["sizes"]["xl-width"] . 'w'; ?>,
        <?php echo $image["sizes"]["xxl"] . ' ' . $image["sizes"]["xxl-width"] . 'w'; ?>"
    alt="<?php echo $image["alt"]; ?>"
    class="w-full md:w-3/4<?php if($margin){echo ' ' . $margin;} ?>"
    >
</section>