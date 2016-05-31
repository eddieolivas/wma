<?php

get_header(); ?>


<div class="content clearfix">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            
            <?php 
			//echo $post->ID;
			$custom_field_array = get_post_custom($post->ID);
			while ( have_posts() ) : the_post(); 
			
			if (has_post_thumbnail()){
				$album_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'single-post-thumbnail');
			 }
			else {
				$album_image = get_template_directory_uri().'/images/img-2.jpg';
				
			}
			
			?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); 
				$count =  0;
				$video_url  = '';
				foreach($custom_field_array['wpcf-video-thumb'] as $gallery_image){
					$video_url = $custom_field_array['wpcf-upload-video'][$count];
					?>
                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
                    <a  class="ajax" href="<?php echo get_template_directory_uri()?>/play-video.php?video_url=<?php echo $video_url ?>" title="" >
                    <img src="<?php echo $gallery_image ?>" alt="<?php the_title(); ?>" /></a>
                </div>	
               <?php } ?>
                
            	<?php  endwhile; ?>
     		
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();
