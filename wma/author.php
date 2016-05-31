<?php

get_header();
//$array_post_type = array('forum','topic'); 
//$post_type = get_post_type(get_the_ID());

global $wp_query;
$author_data = $wp_query->get_queried_object();
$user_email = $author_data->data->user_email;
$user_nicename = $author_data->data->user_nicename;
$user_meta_data = get_user_meta($author_data->data->ID); 
$user_meta_info_data = unserialize(unserialize($user_meta_data['user_info'][0]));
$birthDate = $user_meta_data['month'][0].'/'.$user_meta_data['bday'][0].'/'.$user_meta_data['birthyear'][0];
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));

$photo_gallery_album = get_user_photos($author_data->data->ID);
$video_album = get_user_videos($author_data->data->ID);
$audio_album =  get_user_music($author_data->data->ID);

?>


<div class="content clearfix">
	<div class="container">
    
         <?php    
		//while ( have_posts() ) : the_post(); ?>
        <div class="row">
        	<div class="col-lg-12 clearfix">
            	<h1><?php echo $user_nicename ?></h1>
            </div>
            <div class="clearfix"></div>
            <div class="white-bg profile-round-wrapper">
            <div class="col-lg-3 img-no-margin"><?php echo get_avatar($author_data->data->ID, 250); ?></div>
            <div class="col-lg-9">
            	<?php  
					foreach($audio_album as $audio){
						$custom_field_array = get_post_custom($audio->ID);
						$music_path =  end($custom_field_array['wpcf-uploaded-music-url']);
						
					}
				?>
           	<?php if ($music_path !=''){?>
           		<?php echo do_shortcode( '[audio src="'.$music_path.'"]' ); ?>
            <?php } else { ?>
           		<img style="border:none" src="<?php echo get_template_directory_uri()?>/images/no-audio-player.jpg" />
           <?php } ?>
           <br />
           <div class="user-profile-top">
            	<span><i class="fa fa-map-marker"></i><?php echo $user_meta_data['city'][0],', '.$user_meta_data['user_zip'][0] ?></span>
                <span><i class="fa fa-user"></i><?php echo $age; ?> years old <?php echo $user_meta_data['gender'][0] ?></span>
           </div>
                <ul>
                	<li><a href="#"><i class="fa fa-music"></i><?php echo ucfirst($user_meta_data['user_type'][0]) ?> </a></li>
                    
                </ul>
                <a class="button" href="#">Contact</a>
            </div>
            <div class="clearfix"></div>
            </div>
            <div class="col-lg-4 user-video-listing">
            	<h3>videos</h3>
                <ul>
					<?php 
                    $custom_field_array = '';
					
                    foreach($video_album  as $video_gallery){
						$video_count =0; 
                        $custom_field_array = get_post_custom($video_gallery->ID);
                        foreach($custom_field_array['wpcf-video-thumb'] as $video){
                            //echo $photo.'<br>';
                             echo '<li><a  class="ajax" href="'.get_template_directory_uri().'/play-video.php?video_url='.$custom_field_array['wpcf-upload-video'][$video_count].'" > <img src="'.$video.'" alt="" /></a></li>';
							  
                        }
                
                    }
                    ?>
                	
                </ul>
            </div>
            <div class="col-lg-8">
            	
                <h3>About</h3>
                <p><?php echo $user_meta_info_data['description'] ?></p>
                <h3>Influences</h3>
                <p><?php echo $user_meta_info_data['influences'] ?></p>
                <ul class="profile-detail">
                	<li><p><strong>Screen Name :</strong> <?php echo $user_nicename ?></p></li>
                    <li><p><strong>Name :</strong> <?php echo $user_meta_data['first_name'][0].' '.$user_meta_data['last_name'][0] ?></p></li>
                    
                </ul>
            </div>
            
            <div class="clearfix"></div>
        <div class="col-lg-12"><h1>Photos</h1></div>
        	<?php 
			$custom_field_array = '';
			foreach($photo_gallery_album  as $photo_gallery){ 
				$custom_field_array = get_post_custom($photo_gallery->ID);
				foreach($custom_field_array['wpcf-photo'] as $photo){
					//echo $photo.'<br>';
					 echo '<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center"><a  class="group1" href="'.$photo.'" title="" >
                    <img src="'.$photo.'" alt="" /></a></div>';
				}
		
			}
			?>
         
        
        </div>
    
    </div>
</div>


<?php
get_footer();
