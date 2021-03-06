<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Admin changes
 */
function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_stylesheet_directory_uri().'/img/admin_logo.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');


function custom_login_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'custom_login_url' );

/* Admin login custom bg */
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/css/admin-login.css" />';
}
add_action('login_head', 'my_custom_login');


function custom_login_title() {
    return get_option( 'blogname' );
}
add_filter( 'login_headertitle', 'custom_login_title' );

// Admin footer modification
function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Made by <a href="https://client.studio" target="_blank">Client.Studio</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

add_action('admin_head', 'admin_custom_css');
function admin_custom_css() {
  echo '<style>
    a.acf-button.button-primary[data-name="add-layout"] {
        background: #19803E !important; border: 0;
        font-size: 120%;
    }
  </style>';
}

?>
