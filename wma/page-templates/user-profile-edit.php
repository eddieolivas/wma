<?php
/* Template Name: User Profie Edit */
get_header('user');
global $user_id,$msg;

if($_POST['musician_name']!=''){
	
	
	foreach($_POST as $post_key=>$post_value){
	//if($count > 6){
		 //echo $post_key.'=>'.$post_value.'<br>';
		 if(is_array($post_value)){
			//$_SESSION['user_data'][$post_key] = serialize($post_value);
			update_user_meta( $user_id, $post_key, serialize($post_value));
		}
		else {
			//$_SESSION['user_data'][$post_key] = $post_value;
			update_user_meta( $user_id, $post_key, sanitize_text_field($post_value));
		}
		 
	//}
	$count++;
	}
	$msg ='<p>Profile Updated</p>';
}

$user_meta_data = get_user_meta($user_id); 

$instrument_array = array('instrument1','instrument2','instrument3','instrument4','instrument5','instrument6','instrument7','instrument8');
$music_genre_array = array('music genre 1','music genre 2','music genre 3','music genre 4','music genre 5','music genre 6','music genre 7','music genre 8');
$genre_info_array = array('Acoustic Guitar 1','Acoustic Guitar 2','Acoustic Guitar 3','Acoustic Guitar 4','Acoustic Guitar 5','Acoustic Guitar 6','Acoustic Guitar 7',
'Acoustic Guitar 8');

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

?>

<div class="content clearfix">
	<div class="container">
    
    <div class="row">
        	<div class="col-lg-12">
            	<?php    
                while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php echo $msg; ?>
                <?php the_content(); ?>
                
                <?php endwhile;?>
            </div>
            
            
            <form  method="post" action="">
            <div class="col-lg-5">
            	<label>Musician's Name</label>
            </div>
            <div class="col-lg-6">
            
            	<input type="text" required="required" name="musician_name" value="<?php echo $user_meta_data['musician_name'][0] ?>" />
            </div>
            
            <div class="col-lg-5">
            	<label>State</label>
            </div>
            <div class="col-lg-6">
            	<select name="state">
                	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>City</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" name="city" value="<?php echo $user_meta_data['city'][0] ?>" />
            </div>
            <div class="col-lg-5">
            	<label>Zip Code</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" name="zip_code" value="<?php echo $user_meta_data['zip_code'][0] ?>" />
            </div>
            
            <div class="col-lg-5">
            	<label>Screen Name</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" required="required" value="<?php echo $user_meta_data['screen_name'][0] ?>" name="screen_name" />
                <p>http://www.worshipmusiciansassociation.com/armel1092882/<br />
Please, use only alphanumeric characters (a-z-0-9 -_)</p>
            </div>
            <div class="col-lg-5">
            	<label>Gender</label>
            </div>
            <div class="col-lg-6">
            	<select name="gender">
                	<option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>Birthdate</label>
            </div>
            <div class="col-lg-2">
            	<select name="month" id="month" onchange="" size="1">
    <option value="01">January</option>
    <option value="02">February</option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
</select>
            </div>
            <div class="col-lg-2">
            	<select name="bday" id="bday" onchange="" size="1">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08">08</option>
    <option value="09">09</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
            </div>
            <div class="col-lg-2">
            
        <select id="birthyear" name="birthyear">
        <?php 
		
		for($i=2015;$i>1900;$i--){
			if( $user_meta_data['birthyear'][0] == $i){
				echo '<option selected="selected" value="'.$i.'">'.$i.'</option>';
			}
			else {
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
			
			
		}
		?>
        
       </select>
            </div>
            
            
            <div class="col-lg-5">
            	<label>Are you a studio musician?</label>
            </div>
            <div class="col-lg-6">
            	<select name="studio_musician">
                	<option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>Years Playing Music</label>
            </div>
            <div class="col-lg-6">
            	<select name="year_playing">
                	<option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5+">5+</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>Level of Commitmen</label>
            </div>
            <div class="col-lg-6">
            	<select name="level_commitment">
                	<option value="level_commitmen_1">Level of Commitmen 1</option>
                    <option value="level_commitmen_2">Level of Commitmen 2</option>
                    <option value="level_commitmen_3">Level of Commitmen 3</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>Soundcloud ID (optional)</label>
            </div>
            
            <div class="col-lg-6">
            	<input type="text" name="soundclude_id" value="<?php echo $user_meta_data['soundclude_id'][0]; ?>" />
            </div>
            <div class="clearfix"></div>
            <hr />
            <div class="col-lg-12">
            	<h2>Instruments played</h2>
                <p>Please, select at least 1 instrument.</p>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">   
            <?php
				$user_meta_instrument = unserialize(unserialize($user_meta_data['instrument'][0]));
				$checked = '';
				foreach($instrument_array as $instrument_key=>$instrument_value){
					if(array_key_exists($instrument_value,$user_meta_instrument)){
						$checked = 'checked="checked"';
					}
					else{
						$checked = '';
					}
				echo '<div class="checkbox">
					<label><input type="checkbox" '.$checked.'  name="instrument['.$instrument_value.']" value="1">'.$instrument_value.'</label>
				</div>';
				}
			 ?>    
                
            </div>
            
            
            
            <div class="col-lg-12">
            <h2>Music genre</h2>
            <p>Please select at least 1 genre. (You can select up to 4).</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">   
            <?php
				$user_music_genre = unserialize(unserialize($user_meta_data['music_genre'][0]));
				$checked = '';
				foreach($music_genre_array as $music_genre_key=>$music_genre_value){
					if(array_key_exists($music_genre_value,$user_music_genre)){
						$checked = 'checked="checked"';
					}
					else{
						$checked = '';
					}
				echo '<div class="checkbox">
					<label><input type="checkbox"  '.$checked.'  name="music_genre['.$music_genre_value.']" value="1">'.$music_genre_value.'</label>
				</div>';
				}
			 ?>       
                
            </div>
            
            
          <div class="clearfix"></div>
            <div class="col-lg-2"><a href="#" class="button">Skip Optional Fields</a></div>
            <div class="col-lg-12">
            <h2>Currently Seeking Information</h2>
            <p>Your listed genre and information will be added to this listing for potential bandmates to view. </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">  
            <?php
				$user_genre_info = unserialize(unserialize($user_meta_data['genre_info'][0]));
				$checked = '';
				foreach($genre_info_array as $genre_info_key=>$genre_info_value){
					if(array_key_exists($genre_info_value,$user_genre_info)){
						$checked = 'checked="checked"';
					}
					else{
						$checked = '';
					}
				echo '<div class="checkbox">
					<label><input type="checkbox"  '.$checked.' class="check-uncheck"  name="genre_info['.$genre_info_value.']" value="1">'.$genre_info_value.'</label>
				</div>';
				}
			 ?>         
               
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-2">
            	<input type="button" class="check-all"  data-ajax="check-uncheck" value="Check All" />
            </div>
            <div class="col-lg-2">
            	<input type="button" class="uncheck-all" data-ajax="check-uncheck" value="Unckeck All" />
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-5">
            	<label>Are you searching for another type 
of band or musician?</label>
            </div>
            <div class="col-lg-6">
            	<select name="band_or_musician">
                	<option value="yes" <?php if(strtolower($user_meta_data['band_or_musician'][0]) == 'yes') { ?> selected="selected" <?php } ?>>Yes</option>
                    <option value="no" <?php if(strtolower($user_meta_data['band_or_musician'][0]) == 'no') { ?> selected="selected" <?php } ?>>No</option>
                </select>
            </div>
            <div class="clearfix"></div>
            <hr />
            <?php $user_meta_info_data = unserialize(unserialize($user_meta_data['user_info'][0])); 	?>
            <div class="col-lg-12"><h2>Additional Profile information</h2></div>
            <div class="col-lg-5">
            	<label>Description</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info[description]" ><?php echo $user_meta_info_data['description'] ?></textarea>
            </div>
			<div class="col-lg-5">
            	<label>Influences</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info[influences]" ><?php echo $user_meta_info_data['influences'] ?></textarea>
            </div>
			<div class="col-lg-5">
            	<label>Equipment List</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info[equipment]"><?php echo $user_meta_info_data['equipment'] ?></textarea>
            </div>
			<div class="col-lg-5">
            	<label>How many gigs have you played?</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info[gigs]">
                	<option>50 to 100</option>
                    <option>100 to 150</option>
                    <option>150 to 200</option>
                </select>
            </div>
            <div class="col-lg-5">
            	<label>I tend to practice</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info[practice]">
                	<option>Once a Week</option>
                    <option>Once a Week</option>
                    <option>Once a Week</option>
                </select>
            </div>
            <div class="col-lg-5">
            	<label>How many nights a week can you gig?</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info[week_gigs]">
                	<option>Once a Week</option>
                    <option>Once a Week</option>
                    <option>Once a Week</option>
                </select>
            </div>
            <div class="col-lg-5">
            	<label>I am most available</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info[available]">
                	<option value="night" <?php if(strtolower($user_meta_info_data['available']) == 'night') { ?> selected="selected" <?php } ?>>Night</option>
                    <option value="day" <?php if(strtolower($user_meta_info_data['available']) == 'day') { ?> selected="selected" <?php } ?>>Day</option>
                </select>
            </div>
            <div class="col-lg-2">
            	<input type="submit" value="Update" />
            </div>
            </form>
            <div class="clearfix"></div>
            <div class="col-lg-6 col-lg-offset-3">
            	<!-- <img src="images/ads.jpg" alt="" style="border:0;" /> -->
            </div>
        </div>
    	
        
        
        
        
        
  
    </div>
</div>


<?php
get_footer();
