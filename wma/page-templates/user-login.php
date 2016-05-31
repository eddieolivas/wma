<?php
/**
 * Template Name: User Login
 */
get_header();

?>


<div class="content clearfix">
	<div class="container">
    
    	<div class="row">
        	<div class="col-lg-12">
         <?php    
		while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
               
                <?php the_content(); ?>
                <div class="login-form"><?php echo do_shortcode('[wp-members page=login]'); ?></div>
                <?php //echo do_shortcode('[wp-members page=user-profile]'); ?>
			
		<?php endwhile;?>
        
                
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();
