<?php
/**
 * Template Name: Confirmation Page
 */
get_header('signup'); 
global $base_url;
if(!isset($_SESSION['user_data']['user_type']) && $_SESSION['user_data']['user_type']  == ''){
	header('Location:'.$base_url.'signup-now');
}
$membership_type = explode('||',$_POST['membership_type']);
$_SESSION['user_data']['membership_type'] = serialize($membership_type);

//$user_id = wp_create_user ( $email_address, $password, $email_address );
$user_data = array(
                'ID' => '',
				'user_login' => sanitize_text_field($_SESSION['user_data']['user_name']),
                'user_pass' => sanitize_text_field($_SESSION['user_data']['user_password']),
				'user_nicename' => sanitize_text_field($_SESSION['user_data']['screen_name']),
				'user_email' => sanitize_text_field($_SESSION['user_data']['user_email']),
                'display_name' => sanitize_text_field($_SESSION['user_data']['screen_name']),
                'first_name' => sanitize_text_field($_SESSION['user_data']['first_name']),
                'last_name' => sanitize_text_field($_SESSION['user_data']['last_name']),
                'role' => 'author' // Use default role or another role, e.g. 'editor'
            );
$user_id = wp_insert_user( $user_data );
$count = 1;
foreach($_SESSION['user_data'] as $meta_key=>$meta_value){
	if($count > 6){
		// echo $meta_key.'=>'.$meta_value.'<br>';
		 add_user_meta( $user_id, $meta_key, $meta_value);
	}
	$count++;
}
//update_user_meta($user_id,'wp_user_avatar',$_SESSION['user_data']['wp_user_avatar']);
//add_post_meta($_SESSION['user_data']['wp_user_avatar'], '_wp_attachment_wp_user_avatar', $user_id );
$activation_url = $base_url.'user-activation/?user_id='.base64_encode($user_id);			
$to = $_SESSION['user_data']['user_email'];
$subject = 'Account Registration Info WMA';
$email_body = '<h3>Welcome to WMA</h1><p>Please activate your account <a href="'.$activation_url.'"> click here</a></p>';
$headers = array('Content-Type: text/html; charset=UTF-8');
wp_mail($to,$subject,$email_body,$headers );

unset($_SESSION['user_data']);


?>


<div class="content clearfix">
	<div class="container">
    	<div class="row">
        <a href="$base_urluser-activation/?$user_id"
        	<div class="col-lg-12">
            	<?php    
                while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                
                <?php the_content(); ?>
				
                
                <?php endwhile;?>
                
            </div>
            
        </div>
  
    </div>
</div>


<?php
get_footer();
