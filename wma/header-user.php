<?php
if (!is_user_logged_in()) {
	wp_redirect( home_url() ); exit;
}
 session_start(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
     <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<?php wp_head(); 
	global $base_url;
	$base_url= get_site_url().'/';
	?>
    <script type="text/javascript">
	$(document).ready(function(e) {
       $('.button-form').click(function(){
		   $('.button-form').removeClass('button-active');
		   $('.user-role').val($(this).attr('data-id'));
		   $(this).addClass('button-active');
	   });
	   $('.form-step1-button').click(function(e){
		   if($('.user-role').val()==''){
			  alert('Please select type.');
			   e.preventDefault();
		  }
		  else {
			  $('#form_step_1').submit();
		  }
		   
	   });
	   $('.check-all').click(function(e){
		   var target_class = $(this).attr('data-ajax');
		   $('.'+target_class).attr("checked", true);
	   });
	   $('.uncheck-all').click(function(e){
		   var target_class = $(this).attr('data-ajax');
		   $('.'+target_class).attr("checked", false);
	   });
	   
	    $('.form-step5-button').click(function(e){
		   if($('.membership-type').val()==''){
			  alert('Please select membership');
			   e.preventDefault();
		  }
		  else {
			  $('#form_step_5').submit();
		  }
		   
	   });
	   
	   $('.forum-box').click(function(e){
		   var fvalue = $(this).attr('data-ajax');
		  
		   $('.forum-box').removeClass('forum-box-active');
		    $('.membership-type').val(fvalue);
		   $(this).addClass('forum-box-active');
		   
		   
	   });
	   
	    $(".man-icon a").click(function(){
        	$(".sidebar-profile").slideToggle();
    	});
	   
	   
    });
	
	</script>
</head>
<?php  
global $user_id;
$user_id = get_current_user_id();
global $user_meta_data;
$user_meta_data = get_user_meta($user_id); 
?>
<body <?php body_class(); ?>>
<div class="top clearfix">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            	<label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
			<?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    //'link_after'     => '&#65516;',
                ) );
            ?>
             <div class="login-button">
                <a href="/wma/signup-now">Sign Up Free</a>
            </div>
            <div class="login-link">
            	<?php if (is_user_logged_in()) {?>
                	<a href="<?php echo wp_logout_url(); ?>">Log Out</a>
                <?php } else {?>
                	<a href="<?php echo $base_url ?>/login-2">Log In</a>
				<?php } ?>                
            </div>
            
            </div>
        </div>
    </div>
</div>

<div class="header clearfix">
	<img src="<?php echo get_template_directory_uri(); ?>/images/inner-slider.jpg" />
            	<div class="logo">
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" ><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
                </div>
                <div class="header-right">
                	<h2>Search Thousands of<br />
Musicians and Bands</h2>
					<div class="team_icon">
                		<div class="team_icon_fb"><a href="http://www.facebook.com" target="_blank"></a></div>
							  <div class="team_icon_twt"><a href="https://www.twitter.com/" target="_blank"></a></div>
                              <div class="team_icon_youtube"><a href="https://www.youtube.com/" target="_blank"></a></div>
							 <div class="clearfix"></div>
                </div>
                	<div class="clearfix"></div>
                	<?php get_template_part( 'template-parts/user-search', 'none' ); ?>
                    </div>
                    <a href="<?php echo $base_url ?>signup-now"><input type="submit" value="Signup Now" /></a>
                </div>
</div>


<div class="profile_menu clearfix">
	<div class="container">
    	<div class="row">
        	<div class="col-lg-10">
            	<label for="show-menu2" class="show-menu2">Profile</label>
	<input type="checkbox" id="show-menu2" role="button">
    		<?php
             wp_nav_menu(array(
                        'menu' => 'User Menu',
                        'menu_class' => 'menu'
                    ));
            ?> 
			

            </div>
            <div class="col-lg-2 col-md-2">
            	<div class="man-icon">
     
                	<a href="#_"><?php echo get_avatar($user_id, 32 ); ?></a>
                    <div class="sidebar-profile">
                	<ul>
                    
                    	<li><a href="<?php echo $base_url ?>author/<?php echo the_author_meta( 'user_nicename' , $user_id); ?>"><i class="username"></i>Username</a></li>
                        <li><a href="<?php echo $base_url ?>wp-admin"><i class="dashboard"></i>Dashboard</a></li>
                        <li><a href="messages.html"><i class="messages"></i>Messages</a></li>
                        <li><a href="<?php echo wp_logout_url(); ?>"><i class="signout"></i>Signout</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>