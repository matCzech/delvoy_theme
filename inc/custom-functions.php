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


//custom logo in login page
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a { 
            background-image:url('.get_bloginfo('template_directory').'/twoje-logo.png) !important; 
            background-size: contain !important; 
            width: 100% !important; 
            height: auto !important; 
        }
        .login h1 a {
            background-color: #fff !important; // Domyślny kolor tła
            padding-bottom: 10px;
        }
    </style>';
}
add_action('login_head', 'custom_login_logo');


function custom_loginlogo_url($url) {
    return get_home_url();
}
add_filter('login_headerurl', 'custom_loginlogo_url');


function custom_loginlogo_title($title) {
    return get_bloginfo('name');
}
add_filter('login_headertext', 'custom_loginlogo_title');


