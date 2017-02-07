<?php
/**
 * © Client Template
 * URL: www.client.fi
*/

/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
 
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

}

/*------------------------------------*\
    Menu
\*------------------------------------*/

require_once('wp_bootstrap_navwalker.php');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/*------------------------------------*\
    Scripts
\*------------------------------------*/


// js
function theme_scripts() {
wp_register_script( 'pace', get_stylesheet_directory_uri() . '/js/pace.js', false, null, false);
wp_register_script( 'modernizr-custom', get_stylesheet_directory_uri() . '/js/modernizr.js', true, null, false);
wp_register_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', false, null, true);
wp_register_script( 'filestyle', get_stylesheet_directory_uri() . '/js/bootstrap-filestyle.min.js', false, null, true);
wp_register_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array( 'jquery' ));
wp_register_script( 'masonry', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' )); 
wp_register_script( 'fastclick', get_stylesheet_directory_uri() . '/js/fastclick.js', false, null, true);
wp_register_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'jquery' ));
wp_register_script( 'ie10', get_stylesheet_directory_uri() . '/js/ie10-viewport-bug-workaround.js', false, null, true);
wp_enqueue_script('pace');	
wp_enqueue_script('modernizr-custom');	   
wp_enqueue_script('bootstrap');	
wp_enqueue_script('plugins');
wp_enqueue_script('script'); 
wp_enqueue_script('ie10');  
	  
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
	
// css	
function theme_styles() {
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'fawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
wp_enqueue_style( 'margin', get_template_directory_uri() . '/css/margins.css' );
wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );
wp_enqueue_style( 'iefix', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


/*------------------------------------*\
    Widgets
\*------------------------------------*/


// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Footer 1', 'client'),
        'description' => __('Footer', 'client'),
        'id' => 'footer-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Footer 2', 'client'),
        'description' => __('Footer', 'client'),
        'id' => 'footer-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
	
	// Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Footer 3', 'client'),
        'description' => __('Footer', 'client'),
        'id' => 'footer-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
	
	// Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Footer 4', 'client'),
        'description' => __('Footer', 'client'),
        'id' => 'footer-4',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

/*------------------------------------*\
    Actions & Filters
\*------------------------------------*/

// Remove <p> tags from Excerpts
// remove_filter('the_excerpt', 'wpautop'); 

// add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar

// Remove Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action('wp_head', 'meta_generator_tag');

// Clean up head
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Sidebar
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)


/*------------------------------------*\
    Other
\*------------------------------------*/


// Add page slug to body class
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}
add_filter('body_class', 'add_slug_to_body_class'); 

// Remove the width and height attributes from inserted images
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter('post_thumbnail_html', 'remove_width_attribute', 10 ); 
add_filter('image_send_to_editor', 'remove_width_attribute', 10 ); 


// Numbered Pagination
if ( !function_exists( 'client_pagination' ) ) {
	
	function client_pagination() {
		
		$prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
		$next_arrow = is_rtl() ? '&larr;' : '&rarr;';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}


// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}
add_action('widgets_init', 'my_remove_recent_comments_style');


/* Change Excerpt length */
function custom_excerpt_length( $length ) {
return 28;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	if (ICL_LANGUAGE_CODE=='en'){
	return '... <div class="cf"></div><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'client' ) . '</a>';
	}
	if (ICL_LANGUAGE_CODE=='fi'){
	return '... <div class="cf"></div><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Lue lisää', 'client' ) . '</a>';
	}
	if (ICL_LANGUAGE_CODE=='sv'){
	return '... <div class="cf"></div><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Läs mer', 'client' ) . '</a>';
	}
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

// Custom View Article link to Post
function client_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('Read more', 'client') . '</a>';
}
add_filter('excerpt_more', 'client_view_article'); 


// Remove 'text/css' from our enqueued stylesheet
function client_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}
add_filter('style_loader_tag', 'client_style_remove'); 


// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); 


/*------------------------------------*\
 	Custom
\*------------------------------------*/

function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();
    
    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->category_nicename;
    }
    
    echo $thelist;
}

//disable single tuote
add_action( 'template_redirect', 'wpse_128636_redirect_post' );
 
function wpse_128636_redirect_post() {
  $queried_post_type = get_query_var('post_type');
  if ( is_single() && 'tuote' ==  $queried_post_type ) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}