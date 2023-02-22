<?php
/*Custom fields and save - remember to add new custom save after a new custom fields*/

/*Hero image - homepage*/
function custom_add_custom_fields() {
    $post_id = 21; 
    if ( get_the_ID() == $post_id ) {
        add_meta_box( 'custom_background_image', __( 'Główny obraz', 'textdomain' ), 'custom_render_background_image_meta_box', 'page', 'normal', 'high' );
    }
}
add_action( 'add_meta_boxes', 'custom_add_custom_fields' );

function custom_render_background_image_meta_box( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'custom_nonce' );
    $bg_image = get_post_meta( $post->ID, '_custom_background_image', true );
    $h2_title = get_post_meta( $post->ID, '_custom_h2_title', true );
    $h3_title = get_post_meta( $post->ID, '_custom_h3_title', true );
    
    echo '<label for="custom_background_image">' . __( 'Background Image', 'textdomain' ) . '</label> ';
    echo '<div>';
    echo '<input type="text" id="custom_background_image" name="custom_background_image" value="' . esc_attr( $bg_image ) . '" size="25" />';
    echo '<input type="button" class="button custom_media_button" value="' . __( 'Media Library', 'textdomain' ) . '" data-uploader_title="' . __( 'Choose an image', 'textdomain' ) . '" data-uploader_button_text="' . __( 'Use this image', 'textdomain' ) . '">';
    echo '</div>';
    
    echo '<label for="custom_h2_title">' . __( 'H2 Title', 'textdomain' ) . '</label> ';
    echo '<div>';
    echo '<input type="text" id="custom_h2_title" name="custom_h2_title" value="' . esc_attr( $h2_title ) . '" size="25" />';
    echo '</div>';
    
    echo '<label for="custom_h3_title">' . __( 'H3 Title', 'textdomain' ) . '</label> ';
    echo '<div>';
    echo '<input type="text" id="custom_h3_title" name="custom_h3_title" value="' . esc_attr( $h3_title ) . '" size="25" />';
    echo '</div>';
}


/*custom save*/
function custom_save_custom_fields( $post_id ) {
    if ( ! isset( $_POST['custom_nonce'] ) || ! wp_verify_nonce( $_POST['custom_nonce'], basename( __FILE__ ) ) ) {
        return $post_id;
    }
    
    $bg_image = isset( $_POST['custom_background_image'] ) ? sanitize_text_field( $_POST['custom_background_image'] ) : '';
    $h2_title = isset( $_POST['custom_h2_title'] ) ? sanitize_text_field( $_POST['custom_h2_title'] ) : '';
    $h3_title = isset( $_POST['custom_h3_title'] ) ? sanitize_text_field( $_POST['custom_h3_title'] ) : '';
    
    update_post_meta( $post_id, '_custom_background_image', $bg_image );
    update_post_meta( $post_id, '_custom_h2_title', $h2_title );
    update_post_meta( $post_id, '_custom_h3_title', $h3_title );
}
add_action( 'save_post', 'custom_save_custom_fields' );