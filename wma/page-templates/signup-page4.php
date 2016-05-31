<?php
/**
 * Template Name: Sign Up Page 4
 */
get_header('signup'); 
if(!isset($_SESSION['user_data']['user_type']) && $_SESSION['user_data']['user_type']  == ''){
	header('Location:'.$base_url.'signup-now');
}
$_SESSION['user_data']['profile_image'] = $_POST['profile_image'];
//echo session_id();
//echo '<br>';
//echo '<pre>';

//print_r($_SESSION);
//print_r($_POST);
//echo '</pre>';
$hear_about_array = array('hear about 1','hear about 2','hear about 3','hear about 4','hear about 5','hear about 6','hear about 7','hear about 8');
?>


<div class="content clearfix">
	<div class="container">
    	
        
        <div class="row">
         <form  method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>signup-step-5">
        	<div class="col-lg-12">
            	<?php    
                while ( have_posts() ) : the_post(); ?>
                	<h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    
                <?php endwhile;?>
                
            </div>
            
            <div class="col-lg-12">
            	<div class="yellow-bg">
                	<h6>Important!</h6>
                    <p>To make sure that our mail reaches your inbox correctly and is not blocked by mistake,</p>
<p>please add our e-mail address <a href="#">support@worshipmusiciansassociation.com</a> and <a href="#">info@worshipmusiciansassociation.com</a> to your address book.</p> 
                </div>
            </div>
            <div class="col-lg-12">
            <h2>Where did you hear about us?</h2>
            <p>While you wait for the confirmation e-mail, please let us know where you heard about us (Optional)</p> 
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> 
             <?php
			 $count = 1;
				foreach($hear_about_array as $hear_about_key=>$hear_about_value){
					if($count == 4){
						echo '</div><div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">';
						$count = 1;
					}
					echo '<div class="checkbox">
						<label><input type="checkbox"  name="hear_about['.$hear_about_value.']" value="1">'.$hear_about_value.'</label>
						</div>';
					$count++;
				}
			 ?>    
                             
            </div>
      
           
            <div class="col-lg-2"><input type="submit" value="Continue" /></div>
            <div class="clearfix"></div>
            <div class="col-lg-6 col-lg-offset-3">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/ads.jpg" alt="" style="border:0;" />
            </div>
            </form>
        </div>
        
        
    </div>
</div>


<?php
get_footer();
