<?php
/**
 * Template Name: Sign Up Page 1
 */
get_header('signup'); 
$num1= rand(1,9);
$num2=rand(1,9);
$num_total = $num1+$num2;

if($_GET['err']){
	$msg = '<div class="error">Wrong Anwser</div>';
}

?>


<div class="content clearfix">
	<div class="container">
    	        
        <div class="row">
        	<div class="col-lg-12">
            	 <?php    
                while ( have_posts() ) : the_post(); ?>
                	<h1><?php the_title(); ?></h1>
                    <?php 
					echo $msg;
					the_content(); ?>
                    
                <?php endwhile;?>
                
<hr />
            </div>
            <div class="col-lg-5">
            	<label>What type of account would you like?</label>
            </div>
            <div class="col-lg-2">
            	<a href="javascript:void(0)" data-id="musician" class="button button-form">A Musician</a>
            </div>
            <div class="col-lg-2"><a href="javascript:void(0)" data-id="band" class="button button-form">A Band</a></div>
            <div class="col-lg-2"><a href="javascript:void(0)" data-id="church" class="button button-form">A Church</a></div>
            <form id="form_step_1" method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>signup-step-2" onsubmit="return form_chck1()">
            <div class="col-lg-5">
            	<label>E-mail Address</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="user_email" type="email" />
            </div>
            
            <div class="col-lg-5">
            	<label>User Name</label>
            </div>
            <div class="col-lg-6">
            	<input required="required"  name="user_name" type="text" />
            </div>
            <div class="col-lg-5">
            	<label>Password</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="password" type="password" />
            </div>
            <div class="col-lg-5">
            	<label>First Name</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="first_name" type="text" value="" />
            </div>
            
            <div class="col-lg-5">
            	<label>Last Name</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="last_name" type="text" />
            </div>
            <div class="col-lg-5">
            	<label>Zip Code</label>
            </div>
            <div class="col-lg-6">
            	<input required="required" name="zip" type="text" />
            </div>
            
            <div class="col-lg-5">
            	<label>Anwser</label>
            </div>
             <div class="col-lg-1">
            	<div style="padding-top:12px; font-size:20px"><?php echo $num1.'+'.$num2; ?> =</div>
            </div>
            <div class="col-lg-4">
            	<input required="required"  type="text"  name="captcha_result" />
            </div>
           
            
            
            <div class="col-lg-5">
            	<p>By clicking on the "Sign up" button, you are indicating that you have read, 
understood and agreed with the WMA Terms of Service and Privacy Policy. </p>
            </div>
            <div class="col-lg-2 col-lg-offset-4">
            <input type="hidden" name="account_type" class="user-role" />
             <input type="hidden" name="captcha"  value="<?php echo $num_total ?>" />
            
            	<input type="submit" class="form-step1-button" value="Signup" />
            </div>
            </form>
            <!--
            <div class="col-lg-6 col-lg-offset-3">
            	<img src="images/ads.jpg" alt="" style="border:0;" />
            </div>
            -->
        </div>
    </div>
</div>


<?php
get_footer();
