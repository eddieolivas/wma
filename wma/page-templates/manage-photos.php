<?php
/**
 * Template Name: Manage Photo Gallay
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
	//$user_update_id = wp_update_user( array( 'ID' => $user_id, 'user_email' => $user_email ));
	
	//update_user_meta($user_id, 'first_name', $first_name);
	
	
	if ( is_wp_error($user_update_id) ) {
		$msg = 'Erro in updating information.';
	// There was an error, probably that user doesn't exist.
	} else {
		$msg = 'Information updated.' .$pmsg;
	}	
	
}
//set_query_var( 'user_meta_data', $user_meta_data);
//set_query_var( 'user_id', $user_id);
//set_query_var( 'msg', $msg);
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
          
        </div>
    </div>
</div>


<?php
get_footer();
