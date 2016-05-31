<?php

get_header(); ?>


<div class="content clearfix">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            <h1>Photo Gallery</h1>
          
            <?php while ( have_posts() ) : the_post(); 
			$custom_field_array = get_post_custom($post->ID);
			if (has_post_thumbnail()){
				$album_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'single-post-thumbnail');
			 }
			else {
				$album_image[0] = get_template_directory_uri().'/images/img-2.jpg';
				
			}
			//print_r($custom_field_array);
			?>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><img src="<?php echo $album_image[0] ?>" alt="<?php the_title(); ?>" /></a>
                </div>	
               
                
            	<?php  endwhile; ?>
     		
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();
