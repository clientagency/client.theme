<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/functions/class-wp-bootstrap-navwalker.php';

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>
