<?php
/**
 * Template Name: Sign Up Page 3
 */
get_header('signup'); 
global $base_url;
if(!isset($_POST['musician_name']) && $_POST['musician_name']  ==''){
	header('Location:'.$base_url.'signup-step-2');
}

foreach($_POST as $post_key=>$post_value){
	if(is_array($post_value)){
		$_SESSION['user_data'][$post_key] = serialize($post_value);
	}
	else {
		$_SESSION['user_data'][$post_key] = $post_value;
	}
	
}
// on submit button call ajax and for uploading image

?>


<div class="content clearfix">
	<div class="container">
    	
        
        <div class="row">
       <form  method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>signup-step-4" enctype="multipart/form-data">
        	<div class="col-lg-12">
                <?php    
                while ( have_posts() ) : the_post(); ?>
                	<h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    
                <?php endwhile;?>
            </div>
            
            <div class="col-lg-5">
            	<h4>Browse Picture</h4>
            </div>
            <div class="col-lg-6">
            	<input name="profile_image" type="file" />
                <p>Select a JPEG file from your hard drive.<br />
Please note that this file cannot exceed the size of 8 Megabytes.<br />
The image will be automatically scaled down if it is larger than 1400x1000 pixels.</p>
            </div>
            <div class="col-lg-12">
            <hr />
            <h2>Or choose from our stock images...</h2>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/img-1.jpg" alt="" />
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/img-2.jpg" alt="" />
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/img-3.jpg" alt="" />
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/img-4.jpg" alt="" />
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/img-5.jpg" alt="" />
            </div>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/img-6.jpg" alt="" />
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
