<?php 
$image = get_sub_field('image');
?>

<section class="section-pad-top">
    <div class="parallax-container h-64 md:h-screen">
        <div class="parallax-img-wrapper">
            <div data-scroll data-scroll-speed="-2" class="w-full h-full bg-cover bg-center bg-no-repeat parallax-img" style="background-image: url('<?php
            if(wp_is_mobile()){
                echo $image["sizes"]["large"];
            } else {
                echo $image["sizes"]["xxl"];
            }
            ?>')">    
        </div>
        
        </div>
    </div>
</section>
