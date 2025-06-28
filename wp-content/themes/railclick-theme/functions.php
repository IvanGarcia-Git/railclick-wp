<?php

function railclick_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'railclick_enqueue_styles' );
