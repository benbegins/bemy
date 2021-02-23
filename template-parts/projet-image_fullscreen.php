<?php 
$image = get_sub_field('image');
?>

<section class="section-pad-top">
    <div class="parallax-container h-64 md:h-screen">
        <div class="w-full h-full bg-cover bg-center bg-no-repeat parallax-img reveal-opacity" style="background-image: url('<?php
        if(wp_is_mobile()){
            echo $image["sizes"]["large"];
        } else {
            echo $image["sizes"]["xxl"];
        }
        ?>')">
        </div>
    </div>
</section>
