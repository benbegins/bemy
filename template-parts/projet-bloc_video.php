<?php 
$video = get_sub_field('video');
$image_poster = get_sub_field('image_poster');
?>

<section class="container section-pad-top">
    <?php if(wp_is_mobile()): ?>
        <video controls muted preload="none" poster="<?php echo $image_poster['sizes']['large']; ?>" class="w-full" src="<?php echo $video['url']; ?>"></video>
    <?php else: ?>
        <video autoplay loop muted preload="none" poster="<?php echo $image_poster['sizes']['xl']; ?>" class="w-full video-projet" src="<?php echo $video['url']; ?>"></video>
    <?php endif; ?>
</section>