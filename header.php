<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
 
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?></title>

  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" rel="shortcut icon">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
  <?php wp_head(); ?>
        
</head>
<body <?php body_class(); ?>>
    
  <header class="header" data-headroom>
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" role="navigation">
    	<div class="container">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            	<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/img/logo.png" class="img-fluid" alt="<?php bloginfo( 'name' ); ?>">
          </a>
      	 
          <button type="button" class="navbar-toggler hamburger" data-toggle="collapse" data-target="#header-menu">
            <span class="hamburger-box">
            	<span class="hamburger-inner"></span>
            </span>
          </button>
         
           <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'header-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse justify-content-end',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
           ?>
        
        </div>
    </nav>
    
  </header>