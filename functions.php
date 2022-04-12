<?php
// Enqueue own styles
function enqueue_custom_styles() {
    wp_enqueue_style( 'icons',get_template_directory_uri() .'/assets/vendors/themify-icons/css/themify-icons.css', array(),false,'all');
    wp_enqueue_style( 'devcrudstyles',get_template_directory_uri() .'/assets/css/pigga.css', array(),false,'all');
    wp_enqueue_style( 'raquelstyles',get_template_directory_uri() .'/assets/css/styles.css', array(),false,'all');
                      
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );


// Enqueue own scripts
function enqueue_custom_scripts() {
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() .'/assets/vendors/jquery/jquery-3.4.1.js', array(),true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() .'/assets/vendors/bootstrap/bootstrap.bundle.js', array(),true);
    wp_enqueue_script( 'bootstrapaffixjs', get_template_directory_uri() .'/assets/vendors/bootstrap/bootstrap.affix.js', array(),true);
    wp_enqueue_script( 'devcrudjs', get_template_directory_uri() .'/assets/js/pigga.js', array(),true);
                      
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );
                
// Add menus
add_theme_support('menus');

function register_nav_menus() {

    $locations = array(
           'top-menu' => __( 'Top Menu', 'theme' ),
           'bottom-menu' => __( 'Bottom Menu', 'theme' ),
        
    );
    register_nav_menus( $locations );

}
add_action( 'init', 'register_nav_menus' );
?>