<?php
/**
 * Template Name: Thanks Page
 */
get_header(); 
?>


<div class="content clearfix">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<h1><?php the_title(); ?></h1>
               
                <?php the_content(); ?>
                
            </div>
            
        </div>
  
    </div>
</div>


<?php
get_footer();
