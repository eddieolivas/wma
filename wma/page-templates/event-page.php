<?php
/**
 * Template Name: Events Page
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
                	<script type="text/javascript">
						var cca_params = {'height':'800px','width':'100%','mileage':'100','zip_code':null,'background_color':'FFFFFF','title_color':'333333','details_color':'666666','separator_color':'CCCCCC','page_links_color':'3B5998','reachout':''};
					</script>
					<script type="text/javascript" src="http://christianconcertalerts.com/js/widget.js"></script>
			
		<?php endwhile;?>
                
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();
