<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

function chicdressing_gfonts_scripts() {
    wp_dequeue_style( 'ashe-playfair-font');
    wp_dequeue_style( 'ashe-opensans-font');

    // Load Kalam if selected
    	wp_dequeue_style( 'ashe-kalam-font');

    // Load Rokkitt if selected
    	wp_dequeue_style( 'ashe-rokkitt-font');
}
add_action( 'wp_dequeue_scripts', 'chicdressing_gfonts_scripts' );


