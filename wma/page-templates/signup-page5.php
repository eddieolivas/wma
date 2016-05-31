<?php
/**
 * Template Name: Sign Up Page 5
 */
get_header('signup'); 
if(!isset($_SESSION['user_data']['user_type']) && $_SESSION['user_data']['user_type']  == ''){
	header('Location:'.$base_url.'signup-now');
}

 ?>


<div class="content clearfix">
	<div class="container">
    	
        
        <div class="row">
         <form  id="form_step_5"  method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>confirmation">
        	<div class="col-lg-12">
            	<?php    
                while ( have_posts() ) : the_post(); ?>
                	<h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    
                <?php endwhile;?>
               
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="forum-box" data-ajax="Free||0||Limited Contact Functions">
                	<h3>FREE <br />Membership</h3>
                    <hr />
                    <span>Limited Contact Functions</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="forum-box" data-ajax="Monthly||12.95||Billed $12.95 | month">
                	<h3>Premier Monthly<br />$12.95 / Month</h3>
                    <hr />
                    <span>Billed $12.95 | month.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="forum-box" data-ajax="Quarterly||11.32||Billed $33.95 | 3 months">
                	<h3>Premier Quarterly<br />$11.32 / Month</h3>
                    <hr />
                    <span>Billed $33.95 | 3 months.</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="forum-box" data-ajax="Annually||7.50||Billed $89.95 | 12 months">
                	<h3>Premier Annually<br />$7.50 / Month</h3>
                    <hr />
                    <span>Billed $89.95 | 12 months.</span>
                </div>
            </div>
            <div class="col-lg-4">
            	<img src="<?php echo get_template_directory_uri(); ?>/images/payment-images.jpg" style="border:0;" />
            </div>
            <div class="col-lg-2 col-lg-offset-6">
            <input name="membership_type"  type="hidden" class="membership-type" value="" />
            	<input type="submit" class="form-step5-button" value="Continue" />
            </div>
            <div class="col-lg-6 col-lg-offset-3">
            	
            </div>
            </form>
        </div>
        
        
    </div>
</div>


<?php
get_footer();
