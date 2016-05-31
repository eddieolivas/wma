<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function gmw_remove_address_from_search_results( $address, $info, $gmw ) {
	
	if ( $gmw['prefix'] == 'fl' ) {
		$address = '';
	}
 
	return $address;
}
add_filter( "gmw_location_address", 'gmw_remove_address_from_search_results', 50, 3 );
?>