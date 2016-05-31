<?php
/**
 * Template Name: Search Result Page
 */
get_header();
?>
<div class="content clearfix">
	<div class="container">
   
    	<div class="row">
        	<div class="col-lg-9 search-listing">
            <?php   
		
			while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
	               
	                <?php the_content(); ?>
	         
				
			<?php endwhile;?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>


<?php
get_footer();