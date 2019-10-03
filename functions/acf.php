<?php

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Client Settings') );
}


function my_acf_init() {
	acf_update_setting('google_api_key', 'xxx');
}
//add_action('acf/init', 'my_acf_init');


?>
