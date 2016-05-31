<?php
/**
 * Template Name: My Account
 */
get_header('user'); 
global $user_meta_data,$user_id,$msg;
//print_r($user_meta_data);
if($_POST['account_type']!=''){
	$user_email = $_POST['user_email'];
	$user_password = $_POST['password'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$user_type = $_POST['account_type'];
	$zip = $_POST['zip'];
	$user_update_id = wp_update_user( array( 'ID' => $user_id, 'user_email' => $user_email ));
	if($_POST['password'] !=''){
		wp_set_password($user_password, $user_id );
		$pmsg = '(You need to log in again as your password has been updated)';
	}
	update_user_meta($user_id, 'first_name', sanitize_text_field($first_name));
	update_user_meta($user_id, 'last_name', sanitize_text_field($last_name));
	update_user_meta($user_id, 'user_zip', sanitize_text_field($zip));
	update_user_meta($user_id, 'user_type', sanitize_text_field($user_type));
	
	if ( is_wp_error($user_update_id) ) {
		$msg = 'Erro in updating information.';
	// There was an error, probably that user doesn't exist.
	} else {
		$msg = 'Information updated.' .$pmsg;
	}	
	
}
//set_query_var( 'user_meta_data', $user_meta_data);

?>


<div class="content clearfix">
	<div class="container">
        <?php //get_template_part( 'template-parts/my-account', 'none' ); ?>
        <div class="row">

        	<div class="col-lg-12">
            	                
         <?php  
		 
		while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
            <div><?php echo $msg  ?></div>
               
                <?php the_content(); ?>
			
		<?php endwhile;?>
                
<hr />
            </div>
            <div class="col-lg-5">
            	<label>What type of account would you like?</label>
            </div>
            <div class="col-lg-2">
            	<a href="javascript:void(0)" data-id="musician" class="button button-form <?php if($user_meta_data['user_type'][0] =='musician') echo 'button-active';?>">A Musician</a>
            </div>
            <div class="col-lg-2"><a href="javascript:void(0)" data-id="band" class="button button-form <?php if($user_meta_data['user_type'][0] =='band') echo 'button-active';?>">A Band</a></div>
            <div class="col-lg-2"><a href="javascript:void(0)" data-id="church" class="button button-form <?php if($user_meta_data['user_type'][0] =='church') echo 'button-active';?>">A Church</a></div>
            <form id="form_step_1" method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>my-account" onsubmit="return form_chck1()">
            <div class="col-lg-5">
            	<label>E-mail Address</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="user_email" type="email" value="<?php echo the_author_meta( 'user_email' , $user_id); ?>" />
            </div>
            
            <div class="col-lg-5">
            	<label>User Name</label>
            </div>
            <div class="col-lg-6">
            	<input required="required"  name="user_name" type="text" readonly="readonly" value="<?php echo the_author_meta( 'user_login' , $user_id); ?>" />
            </div>
            <div class="col-lg-5">
            	<label>Password</label>
            </div>
            <div class="col-lg-6">
            	<input  name="password" type="password" />
            </div>
            <div class="col-lg-5">
            	<label>First Name</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="first_name" type="text" value="<?php echo $user_meta_data['first_name'][0] ?>" />
            </div>
            
            <div class="col-lg-5">
            	<label>Last Name</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="last_name" type="text" value="<?php echo $user_meta_data['last_name'][0] ?>" />
            </div>
            <div class="col-lg-5">
            	<label>Zip Code</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="zip" type="text" value="<?php echo $user_meta_data['user_zip'][0] ?>" />
            </div>
            <!--
            <div class="col-lg-5">
            	<label>Confirmation Code</label>
            </div>
            <div class="col-lg-4">
            	<input  type="text" />
            </div>
            <div class="col-lg-2">
            	<img src="images/captcha.jpg" style="border:0;" />
            </div>
            -->
            
            <div class="col-lg-5"></div>
            <div class="col-lg-6">
            <input type="hidden" name="account_type" class="user-role" value="<?php echo $user_meta_data['user_type'][0] ?>" />
            	<input type="submit" class="form-step1-button" value="Update" />
            </div>
            </form>
            <div class="col-lg-6 col-lg-offset-3">
            	
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
