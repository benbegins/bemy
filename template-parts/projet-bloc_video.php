<?php 
$video = get_sub_field('video');
?>

<section class="container mt-20 lg:mt-32">
    <video autoplay loop muted preload="none" class="w-full video-projet">
        <source 
        src="<?php echo $video['url']; ?>"
        type="video/mp4"
        >
    </video>
</section>