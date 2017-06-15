<?php

function client_assets() {

// js	
wp_register_script( 'pace', get_stylesheet_directory_uri() . '/js/pace.js', false, null, false);
wp_register_script( 'modernizr-custom', get_stylesheet_directory_uri() . '/js/modernizr.js', false, null, true);
wp_register_script( 'tether', get_stylesheet_directory_uri() . '/js/tether.min.js', false, null, true);
wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', false, null, true);
wp_register_script( 'imgloaded', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ));
wp_register_script( 'masonry', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' )); 
wp_register_script( 'headroom', get_stylesheet_directory_uri() . '/js/headroom.min.js', array( 'jquery' ));
wp_register_script( 'headroom-jQuery', get_stylesheet_directory_uri() . '/js/jQuery.headroom.js', array( 'jquery' ));
wp_register_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array( 'jquery' ));
wp_register_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ));
wp_register_script( 'ie10', get_stylesheet_directory_uri() . '/js/ie10-viewport-bug-workaround.js', false, null, true);
wp_enqueue_script('pace');	
// wp_enqueue_script('modernizr-custom');	
wp_enqueue_script('tether');
wp_enqueue_script('bootstrap');	
wp_enqueue_script('headroom');  
wp_enqueue_script('headroom-jQuery');
wp_enqueue_script('imgloaded');
wp_enqueue_script('masonry');
wp_enqueue_script('plugins');
wp_enqueue_script('script'); 
wp_enqueue_script('ie10'); 
	
// css
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );  
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
// wp_enqueue_style( 'fawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
wp_enqueue_style( 'ion-icons', get_template_directory_uri() . '/css/ionicons.min.css' );  
wp_enqueue_style( 'margin', get_template_directory_uri() . '/css/margins.css' );
wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
wp_enqueue_style( 'iefix', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css' );

}

add_action( 'wp_enqueue_scripts', 'client_assets' );

?>