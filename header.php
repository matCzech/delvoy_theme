<?php

/*
@package delvoy_aless_thm
    Template for header
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php wp_title(); ?></title>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php if(is_singular() && pings_open(get_queried_object())): ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="masthead" class="site-header">
            <div class="container-md">
                <div class="row align-items-center">
                    <div class="col-12 col-md-2">
                        <?php if ( has_custom_logo() ) : ?>
                            <div class="site-logo">
                                <?php the_custom_logo(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-8">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header-menu',
                                'menu_class'     => 'main-menu nav-font mx-auto justify-content-center',
                                'container'      => false,
                                'fallback_cb'    => '__return_false',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'          => 2,
                                'walker'         => new bootstrap_5_wp_nav_menu_walker(),
                            ) );
                        ?>
                    </div>
                    <div class="col-12 col-md-2">
                        <a href="tel:+48123456789" class="d-flex align-items-center">
                            <button class="header-button btn d-flex">
                            <span class="d-inline-block me-2"><img class="phone-ico" src="<?php echo home_url(); ?>/wp-content/uploads/2023/02/telefon.png" alt="Placeholder Image" class="header-button-image rounded-circle me-3"></span>
                            <span class="d-inline-block">ZADZWOŃ TERAZ</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </header>

