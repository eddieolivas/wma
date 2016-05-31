<?php
/**
 * Template Name: Search Result Page
 */
get_header();
global $base_url;
$user_type = $_REQUEST['user_type_dd'];
$location = $_REQUEST['zipcode'];
	if($location!='' && $user_type!=''){
	$sql="SELECT u.ID, um1.meta_value as zipcode, um2.meta_value as usercity, um3.meta_value as account_type FROM wp_users u 
	INNER JOIN wp_usermeta um1 ON u.ID = um1.user_id AND um1.meta_key = 'user_zip'  
	INNER JOIN wp_usermeta um2 ON u.ID = um2.user_id
	INNER JOIN wp_usermeta um3 ON u.ID = um3.user_id  
	WHERE um3.meta_value = '{$user_type}' AND (um1.meta_value = '{$location}' OR um2.meta_value = '{$location}') GROUP BY um1.user_id";
	$results = $wpdb->get_results($sql);
	$total_records =  count($results);
	}
	
	if($location!='' && $_REQUEST['sidebar_search']== 'sidebar'){
		$sql="SELECT u.ID, um1.meta_value as zipcode, um2.meta_value as usercity FROM wp_users u 
		INNER JOIN wp_usermeta um1 ON u.ID = um1.user_id AND um1.meta_key = 'user_zip'  
		INNER JOIN wp_usermeta um2 ON u.ID = um2.user_id
		WHERE um1.meta_value = '{$location}' OR um2.meta_value = '{$location}' GROUP BY um1.user_id";
		$results = $wpdb->get_results($sql);
		$total_records =  count($results);
	}
//echo $sql;

?>
<div class="content clearfix">
	<div class="container">
   
    	<div class="row">
        	<div class="col-lg-12 search-listing">
            <h1><?php the_title(); ?></h1>
            <ul>
         	<?php 
		
			if($total_records > 0){
				foreach($results as $user){
					$user_info = get_userdata($user->ID);
					
					if($user_info->roles[0] !='administrator'){
					//echo $user->ID;
					$user_meta_data = get_user_meta($user->ID);
					
					//echo '<pre>';
					//print_r($user_meta_data);
					echo '<li><div class="user-item">';
					echo get_avatar($user->ID, 60);
					
					echo '<h3>' .$user_meta_data['first_name'][0].' '.$user_meta_data['last_name'][0].'</h3>';
					echo '<div class="user-content">';
					//echo $user_info->roles[0];
					?>
                    
                    <span>Screen Name: <a href="<?php echo get_author_posts_url($user->ID); ?>"><?php the_author_meta( 'display_name', $user->ID); ?></a></span>
					<?php echo '</div></div></li>';
					
					
					}
				}
			}
			else {
				echo '<p> Sorry no record found.</p>';
			}
			
			?>
               </ul>
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();