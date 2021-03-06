<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
 wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


function client_assets() {

// js
wp_register_script( 'popper', 'https://unpkg.com/@popperjs/core@2', array( 'jquery' ));
wp_register_script( 'pace', get_stylesheet_directory_uri() . '/js/pace.js', false, null, false);
wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ));
wp_register_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array( 'jquery' ));
wp_register_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ));
wp_register_script( 'ionicons', 'https://unpkg.com/ionicons@5.1.2/dist/ionicons.js', false, null, false);

wp_enqueue_script('popper');
wp_enqueue_script('pace');
//wp_enqueue_script('ionicons');
wp_enqueue_script('bootstrap');
wp_enqueue_script('plugins');
wp_enqueue_script('script');

// css
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'ionicon', 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' );
wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

}
add_action( 'wp_enqueue_scripts', 'client_assets' );


function client_theme_add_map() {
wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=XXXXXXXXXXXXXXXXXXXXX', array(), '3', true );
wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/js/googlemap.js', array('google-map', 'jquery'), '0.1', true );
}
//add_action( 'wp_enqueue_scripts', 'client_theme_add_map' );


?>
