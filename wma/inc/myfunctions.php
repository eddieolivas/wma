<?php

function home_gallery(){
	wp_reset_query();
	global $wpdb;
	$custom_data ='';
	$gallery_rows = $wpdb->get_results( "SELECT ID,post_excerpt FROM wp_posts WHERE post_status = 'publish' AND post_type = 'photo-gallery' LIMIT 0,4" );
	return $gallery_rows;

}


function get_user_photos($user_id){
	global $wpdb;
	$custom_data ='';
	$photo_object = $wpdb->get_results( "SELECT ID,post_title,post_excerpt FROM wp_posts WHERE post_status = 'publish' AND post_type = 'photo-gallery' AND post_author = {$user_id}");	
	return $photo_object;
		
}

function get_user_videos($user_id){
	global $wpdb;
	$custom_data ='';
	$videos_object = $wpdb->get_results( "SELECT ID,post_title,post_excerpt FROM wp_posts WHERE post_status = 'publish' AND post_type = 'videos' AND post_author = {$user_id}");	
	return $videos_object;	
}

function get_user_music($user_id){
	global $wpdb;
	$custom_data ='';
	$music_object = $wpdb->get_results( "SELECT ID,post_title,post_excerpt FROM wp_posts WHERE post_status = 'publish' AND post_type = 'music-library' AND post_author = {$user_id}");	
	return $music_object;	
}


?>