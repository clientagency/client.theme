<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
 
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?></title>

  <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" rel="shortcut icon">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
  <?php wp_head(); ?>
        
</head>
<body <?php body_class(); ?>>
    
  <header class="header">
    
    <nav class="navbar navbar-toggleable-sm navbar-light fixed-top" role="navigation">
    	<div class="container">
        
          <button type="button" class="navbar-toggler navbar-toggler-right hamburger hamburger--slider" data-toggle="collapse" data-target="#header-menu">
            <span class="hamburger-box">
            	<span class="hamburger-inner"></span>
            </span>
          </button>
          
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            	<img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" class="img-responsive" alt="<?php bloginfo( 'name' ); ?>">
          </a>
      	 
           <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'header-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse mr-auto justify-content-end',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
           ?>
        
        </div>
    </nav>
    
  </header>