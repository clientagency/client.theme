<?php

/**
 * Admin changes
 */
function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/img/admin_logo.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');


function custom_login_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'custom_login_url' );

function custom_login_title() {
    return get_option( 'blogname' );
}
add_filter( 'login_headertitle', 'custom_login_title' );

// Admin footer modification
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">With &hearts; <a href="http://www.client.fi" target="_blank">Client Studio</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin')


?>