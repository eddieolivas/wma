<?php
/**
 * Template Name: Sign Up Page 2
 */
get_header('signup');
global $base_url;
if(!isset($_POST['account_type']) && $_POST['account_type']  ==''){
	header('Location:'.$base_url.'signup-now');
}

if($_POST['captcha_result'] != $_POST['captcha']){
	header('Location:'.$base_url.'signup-now?err=2');
	}


$_SESSION['user_data']['user_email'] = $_POST['user_email'];
$_SESSION['user_data']['user_name']= $_POST['user_name'];
$_SESSION['user_data']['user_password'] = md5($_POST['password']);
$_SESSION['user_data']['nickname']= $_POST['user_name'];
$_SESSION['user_data']['first_name'] = $_POST['first_name'];
$_SESSION['user_data']['last_name'] = $_POST['last_name'];



//post meta
//_wp_attached_file =>2016/01/blog-1-1.jpg
//_wp_attachment_metadata=>
//_wp_attachment_wp_user_avatar = >user id
 	
$_SESSION['user_data']['original_password'] = base64_encode($_POST['password']);
$_SESSION['user_data']['user_type'] = $_POST['account_type'];
$_SESSION['user_data']['user_zip'] = $_POST['zip'];

$instrument_array = array('instrument1','instrument2','instrument3','instrument4','instrument5','instrument6','instrument7','instrument8');
$music_genre_array = array('music genre 1','music genre 2','music genre 3','music genre 4','music genre 5','music genre 6','music genre 7','music genre 8');
$genre_info_array = array('Acoustic Guitar 1','Acoustic Guitar 2','Acoustic Guitar 3','Acoustic Guitar 4','Acoustic Guitar 5','Acoustic Guitar 6','Acoustic Guitar 7',
'Acoustic Guitar 8');

?>

 <?php echo get_the_author_link(); ?> 
<div class="content clearfix">
	<div class="container">
    	
        <div class="row">
        	<div class="col-lg-12">
            	<?php    
                while ( have_posts() ) : the_post(); ?>
                	<h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    
                <?php endwhile;?>
            </div>
            
            
            <form  method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>signup-step-3">
            <div class="col-lg-5">
            	<label>Musician's Name</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" required="required" name="musician_name" />
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
            	<input type="text" name="city" />
            </div>
            <div class="col-lg-5">
            	<label>Zip Code</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" name="zip_code" />
            </div>
            
            <div class="col-lg-5">
            	<label>Screen Name</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" required="required" name="screen_name" />
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
			echo '<option value="'.$i.'">'.$i.'</option>';
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
            	<label>Soundcloud ID (optional)</label>
            </div>
            <div class="col-lg-6">
            	<input type="text" name="soundclude_id" />
            </div>
            <div class="clearfix"></div>
            <hr />
            <div class="col-lg-6">
            	<h2>Instruments played</h2>
                <p>Please, select at least 1 instrument.</p>
            
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">   
	            <?php
					foreach($instrument_array as $instrument_key=>$instrument_value){
					echo '<div class="checkbox">
						<label><input type="checkbox"  name="instrument['.$instrument_value.']" value="1">'.$instrument_value.'</label>
					</div>';
					}
				 ?>    
	                
	            </div>
            </div>
            
            
            
            <div class="col-lg-6">
	            <h2>Music genre</h2>
	            <p>Please select at least 1 genre. (You can select up to 4).</p>
	            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">   
	            <?php
					foreach($music_genre_array as $music_genre_key=>$music_genre_value){
					echo '<div class="checkbox">
						<label><input type="checkbox"  name="music_genre['.$music_genre_value.']" value="1">'.$music_genre_value.'</label>
					</div>';
					}
				 ?>       
	                
	            </div>
            </div>
            
            
          <div class="clearfix"></div>
            <div class="col-lg-2"><a href="#" class="button">Skip Optional Fields</a></div>
            <div class="col-lg-12">
            <h2>Currently Seeking Information</h2>
            <p>Your listed genre and information will be added to this listing for potential bandmates to view. </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">  
            <?php
				foreach($genre_info_array as $genre_info_key=>$genre_info_value){
				echo '<div class="checkbox">
					<label><input type="checkbox" class="check-uncheck"  name="genre_info['.$genre_info_value.']" value="1">'.$genre_info_value.'</label>
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
                	<option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            <div class="clearfix"></div>
            <hr />
            <div class="col-lg-12"><h2>Additional Profile information</h2></div>
            <div class="col-lg-5">
            	<label>Description</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info[description]" ></textarea>
            </div>
			<div class="col-lg-5">
            	<label>Influences</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info[influences]" ></textarea>
            </div>
			<div class="col-lg-5">
            	<label>Equipment List</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info[equipment]"></textarea>
            </div>
			<div class="col-lg-5">
            	<label>How many gigs have you played?</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info[gigs]">
                	<option>50 to 100</option>
                    <option>50 to 100</option>
                    <option>50 to 100</option>
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
                	<option>Night</option>
                    <option>Day</option>
                </select>
            </div>
            <div class="col-lg-2">
            	<input type="submit" value="Continue" />
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
