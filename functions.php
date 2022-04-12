<?php
// Enqueue own styles
function enqueue_custom_styles() {
    wp_enqueue_style( 'icons',get_template_directory_uri() .'/assets/vendors/themify-icons/css/themify-icons.css', array(),false,'all');
    wp_enqueue_style( 'devcrudstyles',get_template_directory_uri() .'/assets/css/pigga.css', array(),false,'all');
    wp_enqueue_style( 'raquelstyles',get_template_directory_uri() .'/assets/css/styles.css', array(),false,'all');
                      
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );
                
?>