<?php 
$video = get_sub_field('video');
?>

<section class="container mt-20 lg:mt-32 reveal-opacity">
    <video autoplay loop preload="none" muted class="w-full">
        <source 
        src="<?php echo $video['url']; ?>"
        type="video/mp4"
        >
    </video>
</section>