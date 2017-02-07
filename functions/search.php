<?php

function client_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
			<div class="row collapse widget-search">
				<div class="small-10 columns">
					<input class="form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'client') . '..." name="s" id="s" />
				</div>
				<div class="small-2 columns">
					<button class="button expand"  type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'client') .'"><i class="fi-magnifying-glass"></i></button>
				</div>
			</div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'client_search_form' );

?>