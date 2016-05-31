<?php
/**
 * Template Name: Activation Page
 */
get_header(); 

$user_id = $_GET['user_id'];
global $base_url;
if(isset($user_id) && $user_id !=''){

$user_id  = base64_decode($user_id);

//$wp_capabilities = array('author'=>1,'bbp_keymaster'=>1);
$wp_capabilities = array('author'=>1,'bbp_moderator'=>1);
//echo serialize($wp_capabilities);

//$wp_capabilities = 'a:2:{s:6:"author";b:1;s:13:"bbp_keymaster";b:1;}';
$original_password = get_user_meta($user_id, 'original_password', $single); 
wp_set_password(base64_decode($original_password), $user_id );
update_user_meta($user_id, 'pw_user_status', 'approved');
update_user_meta($user_id, 'wp_capabilities', $wp_capabilities);
//update_user_meta(4, 'wp_capabilities', $wp_capabilities);
add_user_meta( $user_id, 'default_password_nag', 1);
add_user_meta( $user_id, 'pw_user_approve_password_reset', base64_decode($original_password));

}
else {
		$msg = 'No User Found for activation';
}

//$dd = unserialize(unserialize('s:60:"a:2:{s:11:"instrument1";s:1:"1";s:11:"instrument2";s:1:"1";}"'));
//print_r($dd);
?>


<div class="content clearfix">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<?php    
                while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                
                <?php 
				if(isset($user_id) && $user_id !=''){
					the_content(); 
				}
				else {
					echo $msg;
				}
				?>
                
                <?php endwhile;?>
                
            </div>
            
        </div>
  
    </div>
</div>


<?php
get_footer();
