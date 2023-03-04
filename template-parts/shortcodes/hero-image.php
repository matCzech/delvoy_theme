<?php

    $bg_image = get_post_meta( $post->ID, '_custom_background_image', true );
    $h2_title_slim = get_post_meta( $post->ID, '_custom_h2_title_slim', true );
    $h2_title_bold = get_post_meta( $post->ID, '_custom_h2_title_bold', true );
    $h3_title = get_post_meta( $post->ID, '_custom_h3_title', true );

?>
    
<div class="big-bckg d-flex align-items-center justify-content-center" style="background-image:url('<?php echo $bg_image; ?>');">
    <div class="big-bckg-overlay position-absolute w-100">
        <div class="hero-img-text text-center">
                <h2 class="text-white shadowd"><?php if ($h2_title_slim) : ?><span class="slim"><?php echo $h2_title_slim; ?></span><?php endif; ?><br><?php if ($h2_title_bold) : ?><span class="bold"><?php echo $h2_title_bold; ?></slim><?php endif; ?></h2>
            <?php if ($h3_title) : ?>
                <h3 class="text-white slim shadowd"><?php echo $h3_title; ?></h3>
            <?php endif; ?>
        </div>
    </div>
</div>
