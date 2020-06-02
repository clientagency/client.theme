<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// disable admin editor, use wp-config if need to
define( 'DISALLOW_FILE_EDIT', true );

/*
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
*/

function client_setup() {
	add_theme_support('post-thumbnails');
 	update_option('thumbnail_size_w', 600);
	update_option('thumbnail_size_h', 480);
	update_option('medium_size_w', 980);
	update_option('medium_size_h', 0);
	update_option('large_size_w', 1600);
	update_option('large_size_h', 0);
  // rss thingy
  add_theme_support('automatic-feed-links');
  //add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]
	);

	// Registers support for Gutenberg wide images
	add_theme_support('align-wide');

}
add_action('init', 'client_setup');


// Remove the width and height attributes from inserted images
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter('post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter('image_send_to_editor', 'remove_width_attribute', 10 );


/* Change Excerpt length */
function custom_excerpt_length( $length ) {
return 28;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Change Excerpt format */
function client_excerpt_readmore() {
	return '&nbsp; <a href="'. get_permalink() . '" class="read-more">' . '&hellip; ' . __('Read more', 'client') . ' <ion-icon name="chevron-forward-outline"></ion-icon>' . '</a>';
}
add_filter('excerpt_more', 'client_excerpt_readmore');

// Stop "read more" link jumping part-way down a single post
function remove_more_jump_link($link) {
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');


function custom_body_classes($classes)
{
    // the list of WordPress global browser checks
    // https://codex.wordpress.org/Global_Variables#Browser_Detection_Booleans
    $browsers = ['is_iphone', 'is_chrome', 'is_safari', 'is_NS4', 'is_opera', 'is_macIE', 'is_winIE', 'is_gecko', 'is_lynx', 'is_IE', 'is_edge'];

    // check the globals to see if the browser is in there and return a string with the match
    $classes[] = join(' ', array_filter($browsers, function ($browser) {
        return $GLOBALS[$browser];
    }));

    return $classes;
}

// call the filter for the body class
add_filter('body_class', 'custom_body_classes');

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

// mobile to body
function mobile_body_class( $classes ){

        /* using mobile browser */
        if ( wp_is_mobile() ){
            $classes[] = 'wp-is-mobile';
        }
        else{
            $classes[] = 'wp-is-not-mobile';
        }
        return $classes;
}
add_filter('body_class','mobile_body_class');


if ( ! function_exists( 'client_pagination' ) ) {
	function client_pagination() {
		global $wp_query;
		$big = 999999999;
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => True,
			'prev_text' => '<span class="prev"><i class="icon ion-android-arrow-back"></i> &nbsp;' . __( 'Back', 'client' ) . '</span> ',
      'next_text' => '<span class="next">' . __( 'More ', 'client' ) . ' &nbsp; <i class="icon ion-android-arrow-forward"></i></span> ',
			'type' => 'list'
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );
		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo '<div class="pagination-centered">';
			echo $paginate_links;
			echo '</div><!--// end .pagination -->';
		}
	}
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {
  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   *
   * Use in custom loops outside archive etc
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /**
   * We construct the pagination arguments to enter into our paginate_links
   * function.
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i> &nbsp; Newer'),
	'next_text' => __('Older &nbsp;<i class="fa fa-angle-right" aria-hidden="true"></i>'),
    'type'            => 'list',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  $paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );
		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo '<div class="pagination-centered">';
			echo $paginate_links;
			echo '</div><!--// end .pagination -->';
		}

}

?>
