<?php

/*
@package delvoy_aless_thm
    Theme support
*/

/*
#########################################################
                THEME SUPPORT OPTIONS
#########################################################
*/


add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo' );


/*Activate nav menu option*/
function delvoy_register_nav_menu(){
    register_nav_menu('main_nav', 'Main header navigation');
}
add_action('after_setup_theme', 'delvoy_register_nav_menu');

/*Load dashicons for nonregistered users*/
function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'ww_load_dashicons', 999);