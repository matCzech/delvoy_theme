<?php

defined ('ABSPATH') or die();

/*Hero image - homepage*/
function hero_shortcode() {
    ob_start();
    get_template_part( 'template-parts/shortcodes/hero-image' );
    $content = ob_get_contents();
    ob_end_clean();
    
    return $content;
}
add_shortcode( 'hero_image', 'hero_shortcode' );