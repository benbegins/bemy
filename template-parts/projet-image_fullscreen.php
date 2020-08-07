<?php 
$image = get_sub_field('image');
?>

<section class="parallax-container h-64 md:h-screen w-full mt-20 lg:mt-32 overflow-hidden">
    <div class="w-full h-full bg-cover bg-center bg-no-repeat lg:bg-fixed parallax-img reveal-opacity" style="background-image: url('<?php
    if(wp_is_mobile()){
        echo $image["sizes"]["large"];
    } else {
        echo $image["sizes"]["xxl"];
    }
    ?>')">
    </div>
</section>