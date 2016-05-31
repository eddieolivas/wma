<?php
/**
 * Template Name: Sign Up Page 2
 */


get_header('signup');
$_SESSION['user_data']['user_role'] = $_POST['account_type'];
$_SESSION['user_data']['user_email'] = $_POST['user_email'];
$_SESSION['user_data']['user_name']= $_POST['user_name'];
$_SESSION['user_data']['user_password'] = $_POST['password'];
$_SESSION['user_data']['user_firstname'] = $_POST['first_name'];
$_SESSION['user_data']['user_lastname'] = $_POST['last_name'];
$_SESSION['user_data']['user_zip'] = $_POST['zip'];
$data = unserialize('a:5:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";i:4;s:15:"title-attribute";}');
echo '<pre>';
print_r($_SESSION);
print_r($data );
echo '</pre>';

?>


<div class="content clearfix">
	<div class="container">
    	
        <div class="row">
        	<div class="col-lg-12">
            	<h1><?php the_title(); ?></h1>
                <h2>Profile Information</h2>
                <?php the_content(); ?> 
            </div>
            
            <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>signup-step-3">
            <input type="text" /></input>
            <input type="submit" />
            </form>
            <form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>signup-step-3">
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
                	<option>Male</option>
                    <option>Female</option>
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
            	<select name="day" id="day" onchange="" size="1">
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
        <option value="2015">2015</option>
    	<option value="2014">2014</option>
    	<option value="2013">2013</option>
    	<option value="2012">2012</option>
    	<option value="2011">2011</option>
    	<option value="2010">2010</option>
    	<option value="2009">2009</option>
    	<option value="2008">2008</option>            
    	<option value="2007">2007</option>
    	<option value="2006">2006</option>
    	<option value="2005">2005</option>
    	<option value="2004">2004</option>
    	<option value="2003">2003</option>
    	<option value="2002">2002</option>
    	<option value="2001">2001</option>
    	<option value="2000">2000</option>
    	<option value="1999">1999</option>
    	<option value="1998">1998</option>
    	<option value="1997">1997</option>
    	<option value="1996">1996</option>
    	<option value="1995">1995</option>
    	<option value="1994">1994</option>
    	<option value="1993">1993</option>
    	<option value="1992">1992</option>
    	<option value="1991">1991</option>
    	<option value="1990">1990</option>
    	<option value="1989">1989</option>
    	<option value="1988">1988</option>
    	<option value="1987">1987</option>
    	<option value="1986">1986</option>
    	<option value="1985">1985</option>
    	<option value="1984">1984</option>
    	<option value="1983">1983</option>
    	<option value="1982">1982</option>
    	<option value="1981">1981</option>
    	<option value="1980">1980</option>
    	<option value="1979">1979</option>
    	<option value="1978">1978</option>
    	<option value="1977">1977</option>
    	<option value="1976">1976</option>
    	<option value="1975">1975</option>
    	<option value="1974">1974</option>
    	<option value="1973">1973</option>
    	<option value="1972">1972</option>
    	<option value="1971">1971</option>
    	<option value="1970">1970</option>
    	<option value="1969">1969</option>
    	<option value="1968">1968</option>
    	<option value="1967">1967</option>
    	<option value="1966">1966</option>
    	<option value="1965">1965</option>
    	<option value="1964">1964</option>
    	<option value="1963">1963</option>
    	<option value="1962">1962</option>
    	<option value="1961">1961</option>
    	<option value="1960">1960</option>
    	<option value="1959">1959</option>
    	<option value="1958">1958</option>
    	<option value="1957">1957</option>
    	<option value="1956">1956</option>
    	<option value="1955">1955</option>
    	<option value="1954">1954</option>
    	<option value="1953">1953</option>
    	<option value="1952">1952</option>
    	<option value="1951">1951</option>
    	<option value="1950">1950</option>
    	<option value="1949">1949</option>
    	<option value="1948">1948</option>
    	<option value="1947">1947</option>
    	<option value="1946">1946</option>
    	<option value="1945">1945</option>
    	<option value="1944">1944</option>
    	<option value="1943">1943</option>
    	<option value="1942">1942</option>
    	<option value="1941">1941</option>
    	<option value="1940">1940</option>
    	<option value="1939">1939</option>
    	<option value="1938">1938</option>
    	<option value="1937">1937</option>
    	<option value="1936">1936</option>
    	<option value="1935">1935</option>
    	<option value="1934">1934</option>
    	<option value="1933">1933</option>
    	<option value="1932">1932</option>
    	<option value="1931">1931</option>
    	<option value="1930">1930</option>
    	<option value="1929">1929</option>
    	<option value="1928">1928</option>
    	<option value="1927">1927</option>
    	<option value="1926">1926</option>
    	<option value="1925">1925</option>
    	<option value="1924">1924</option>
    	<option value="1923">1923</option>
    	<option value="1922">1922</option>
    	<option value="1921">1921</option>
    	<option value="1920">1920</option>
    	<option value="1919">1919</option>
    	<option value="1918">1918</option>
    	<option value="1917">1917</option>
    	<option value="1916">1916</option>
    	<option value="1915">1915</option>
    	<option value="1914">1914</option>
    	<option value="1913">1913</option>
    	<option value="1912">1912</option>
    	<option value="1911">1911</option>
    	<option value="1910">1910</option>
    	<option value="1909">1909</option>
    	<option value="1908">1908</option>
    	<option value="1907">1907</option>
    	<option value="1906">1906</option>
    	<option value="1905">1905</option>
    	<option value="1904">1904</option>
    	<option value="1903">1903</option>
    	<option value="1902">1902</option>
    	<option value="1901">1901</option>
    	<option value="1900">1900</option>
       </select>
            </div>
            
            
            <div class="col-lg-5">
            	<label>Are you a studio musician?</label>
            </div>
            <div class="col-lg-6">
            	<select name="studio_musician">
                	<option>Yes</option>
                    <option>No</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>Years Playing Music</label>
            </div>
            <div class="col-lg-6">
            	<select name="year_playing">
                	<option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>5+</option>
                </select>
            </div>
            
            <div class="col-lg-5">
            	<label>Level of Commitmen</label>
            </div>
            <div class="col-lg-6">
            	<select name="level_commitment">
                	<option>Level of Commitmen</option>
                    <option>Level of Commitmen</option>
                    <option>Level of Commitmen</option>
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
            <div class="col-lg-12">
            	<h2>Instruments played</h2>
                <p>Please, select at least 1 instrument.</p>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" required="required" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"   name="instrument[]"  value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]"  value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]"  value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="instrument[]" value="">Acoustic Guitar</label>
                </div>
            </div>
            <div class="col-lg-12">
            <h2>Music genre</h2>
            <p>Please select at least 1 genre. (You can select up to 4).</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="music_genre[]" value="">Acoustic Guitar</label>
                </div>
            </div>
          <div class="clearfix"></div>
            <div class="col-lg-2"><a href="#" class="button">Skip Optional Fields</a></div>
            <div class="col-lg-12">
            <h2>Currently Seeking Information</h2>
            <p>Your listed genre and information will be added to this listing for potential bandmates to view. </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" name="genre_info[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="genre_info[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="genre_info[]" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">       
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" value="">Acoustic Guitar</label>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-2">
            	<input type="submit" value="Check All" />
            </div>
            <div class="col-lg-2">
            	<input type="submit" value="Unckeck All" />
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
            	<textarea rows="4" name="user_info['user_info']['description']" ></textarea>
            </div>
			<div class="col-lg-5">
            	<label>Influences</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info['user_info']['influences']" ></textarea>
            </div>
			<div class="col-lg-5">
            	<label>Equipment List</label>
            </div>
            <div class="col-lg-6">
            	<textarea rows="4" name="user_info['user_info']['equipment']"></textarea>
            </div>
			<div class="col-lg-5">
            	<label>How many gigs have you played?</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info['user_info']['gigs']">
                	<option>50 to 100</option>
                    <option>50 to 100</option>
                    <option>50 to 100</option>
                </select>
            </div>
            <div class="col-lg-5">
            	<label>I tend to practice</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info['user_info']['practice']">
                	<option>Once a Week</option>
                    <option>Once a Week</option>
                    <option>Once a Week</option>
                </select>
            </div>
            <div class="col-lg-5">
            	<label>How many nights a week can you gig?</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info['user_info']['week_gigs']">
                	<option>Once a Week</option>
                    <option>Once a Week</option>
                    <option>Once a Week</option>
                </select>
            </div>
            <div class="col-lg-5">
            	<label>I am most available</label>
            </div>
            <div class="col-lg-6">
            	<select name="user_info['user_info']['available']">
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
