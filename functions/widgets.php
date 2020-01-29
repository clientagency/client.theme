<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

function client_widgets_init() {

  	/*
    Footer
    */
    register_sidebar( array(
      'name' 					=> __( 'Footer1', 'client' ),
      'id' 						=> 'footer-widget-area-1',
      'description' 	=> __( 'Footer 1 area', 'client' ),
      'before_widget' => '<div class="%1$s %2$s">',
      'after_widget' 	=> '</div>',
      'before_title' 	=> '<h4>',
      'after_title' 	=> '</h4>',
    ) );

	register_sidebar( array(
      'name' 					=> __( 'Footer2', 'client' ),
      'id' 						=> 'footer-widget-area-2',
      'description' 	=> __( 'Footer 2 area', 'client' ),
      'before_widget' => '<div class="%1$s %2$s">',
      'after_widget' 	=> '</div>',
      'before_title' 	=> '<h4>',
      'after_title' 	=> '</h4>',
    ) );

}
add_action( 'widgets_init', 'client_widgets_init' );

?>
