<?php

    $bg_image = get_post_meta( $post->ID, '_custom_background_image', true );
    $h2_title = get_post_meta( $post->ID, '_custom_h2_title', true );
    $h3_title = get_post_meta( $post->ID, '_custom_h3_title', true );
    
    if ( ! empty( $bg_image ) ) {
        echo '<div class="custom-background-image" style="background-image: url(' . esc_url( $bg_image ) . ');">';
        
        if ( ! empty( $h2_title ) ) {
            echo '<h2>' . esc_html( $h2_title ) . '</h2>';
        }
        
        if ( ! empty( $h3_title ) ) {
            echo '<h3>' . esc_html( $h3_title ) . '</h3>';
        }
        
        echo '</div>';
    }
