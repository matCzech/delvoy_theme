<?php

/*
@package delvoy_aless_thm
    Theme support
*/

/*
#########################################################
                CUSTOM FUNCTIONS
#########################################################
*/

/*custom button to upload from media library*/
function custom_media_button_script() {
    ?>
    <script>
    jQuery(document).ready(function($){
        var custom_uploader;
        $('.custom_media_button').click(function(e) {
            e.preventDefault();
            var button = $(this);
            custom_uploader = wp.media({
                title: button.data('uploader_title'),
                button: {
                    text: button.data('uploader_button_text'),
                },
                multiple: false
            })
            .on('select', function() {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $(button).prev().val(attachment.url);
            })
            .open();
        });
    });
    </script>
    <?php
}
add_action( 'admin_footer', 'custom_media_button_script' );

