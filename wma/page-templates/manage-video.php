<?php
/**
 * Template Name: Manage Video
 */
get_header('user'); 
global $user_meta_data,$user_id,$msg;


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
