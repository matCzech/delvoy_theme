<?php

defined ('ABSPATH') or die();

function delvoy_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Header Phone', 'mytheme' ),
    'id'            => 'header-phone',
    'description'   => __( 'Add phone number to header', 'mytheme' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) ); 
  
  register_sidebar( array(
      'name'          => __( 'Footer 1', 'mytheme' ),
      'id'            => 'footer-1',
      'description'   => __( 'Add widgets here to appear in your footer.', 'mytheme' ),
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  
    register_sidebar( array(
      'name'          => __( 'Footer 2', 'mytheme' ),
      'id'            => 'footer-2',
      'description'   => __( 'Add widgets here to appear in your footer.', 'mytheme' ),
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  
    register_sidebar( array(
      'name'          => __( 'Footer 3', 'mytheme' ),
      'id'            => 'footer-3',
      'description'   => __( 'Add widgets here to appear in your footer.', 'mytheme' ),
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ) );
  }
  add_action( 'widgets_init', 'delvoy_widgets_init' );
  