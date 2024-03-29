<?php

/*
@package delvoy_aless_thm
    Admin Page
*/

defined ('ABSPATH') or die();

/*
#########################################################
                ADMIN ENQUEUE FUNCTIONS
#########################################################
*/

// load special admin CSS styles and JS scripts
function delvoy_load_admin_scripts($hook){
    if('toplevel_page_delvoy_aless' == $hook){

        wp_register_style('delvoy-admin', get_template_directory_uri() . '/css/delvoy.admin.css', array(), filemtime(get_template_directory().'/css/delvoy.admin.css'), 'all');
        wp_enqueue_style('delvoy-admin');

        wp_enqueue_media();

        wp_register_script('delvoy-admin-script', get_template_directory_uri() . '/js/delvoy.admin.js', array('jquery'), filemtime(get_template_directory().'/js/delvoy.admin.js'), true);
        wp_enqueue_script('delvoy-admin-script');

    }
    else if('theme-options_page_delvoy_custom_css' ==  $hook){


    }
    else{
        return;
    }
}
add_action('admin_enqueue_scripts', 'delvoy_load_admin_scripts');


/*
#########################################################
                FRONTEND ENQUEUE FUNCTIONS
#########################################################
*/

function delvoy_load_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.1.3', 'all');
    wp_enqueue_style('delvoy-css', get_template_directory_uri() . '/css/delvoy.css', array(), filemtime(get_template_directory() . '/css/delvoy.css'), 'all');
    
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap');
    wp_enqueue_style('roboto-condensed', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');

    wp_enqueue_script('delvoy-custom-js', get_template_directory_uri() . '/js/delvoy.js', array('jquery'), filemtime(get_template_directory() . '/js/delvoy.js'), true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.1.3', true);
}
add_action('wp_enqueue_scripts', 'delvoy_load_scripts');



/*
#########################################################
                CONDITIONAL EQUEUES  !check proper slug and script id!
#########################################################
*/

/*
function remove_CF7_js(){
    if(!is_page('contact-us')){
        wp_deregister_script('contact-form-7');
    }
}
add_action('wp_print_scripts', 'remove_CF7_js');

function remove_CF7_css(){
    if(!is_page('contact-us')){
        wp_deregister_style('contact-form-7');
    }
}
add_action('wp_print_styles', 'remove_CF7_css');
*/