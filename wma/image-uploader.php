<?php
session_start();
require( '../../../wp-load.php' );
require_once(ABSPATH . 'wp-admin/includes/admin.php');
global $wpdb;

if($_POST['submit']== 'Continue'){
	// step one upload file to server
	$uploadedfile = $_FILES['profile_image'];
	$upload_overrides = array( 'test_form' => false );
	$file_return = wp_handle_upload( $uploadedfile, $upload_overrides );
	  if(isset($file_return['error']) || isset($file_return['upload_error_handler'])) {
		echo '<span class="error">Error in Uploading</span>';
	}
	else {
		$filename = $file_return['file'];
		 $attachment = array(
			'post_mime_type' => $file_return['type'],
			'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
			'post_content' => '',
			'post_status' => 'inherit',
			'guid' => $file_return['url']
		);
		$attach_id = wp_insert_attachment( $attachment, $file_return['url'] );
		// you must first include the image.php file
		// for the function wp_generate_attachment_metadata() to work
		require_once(ABSPATH . 'wp-admin/includes/image.php');
		$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
	   $result =  wp_update_attachment_metadata( $attach_id, $attach_data );
	   $_SESSION['user_data']['wp_user_avatar'] = $attach_id;
	 	//echo $attach_id;
	   echo '<span class="error">Uploaded successfully</span>';
	}
}
?>

<form name="upload_pic"  method="post" action="<?php echo get_template_directory_uri(); ?>/image-uploader.php" enctype="multipart/form-data">
        	<input name="profile_image" type="file" />
            <input type="submit" name="submit" value="Continue" />
           </form>
        