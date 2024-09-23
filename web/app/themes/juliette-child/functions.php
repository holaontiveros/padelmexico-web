<?php //Start building your awesome child theme functions

add_action( 'wp_enqueue_scripts', 'juliette_enqueue_styles', 100 );
function juliette_enqueue_styles() {
    wp_enqueue_style( 'juliette-child-styles',  get_stylesheet_directory_uri() . '/style.css', array( 'nova-juliette-styles' ), wp_get_theme()->get('Version') );
}
