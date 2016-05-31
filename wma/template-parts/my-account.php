<div class="row">

        	<div class="col-lg-12">
            	                
         <?php  
		 echo 'test'.$msg;  
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
            	<input required="required" name="password" type="password" />
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
            	<input type="submit" class="form-step1-button" value="Signup" />
            </div>
            </form>
            <div class="col-lg-6 col-lg-offset-3">
            	
            </div>
        </div>