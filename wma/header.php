<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/colorbox.css" type="text/css" media="all" />
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.colorbox-min.js"></script>
    <link rel="icon" type="image/png" sizes="192x192"  href="/demo/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/demo/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/demo/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/demo/favicon-16x16.png">
	<?php wp_head(); 
	global $base_url;
	$base_url= get_site_url().'/';
	?>
    <script type="text/javascript">
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
				
				
				
				
			});
			
			

		
		</script>
    
</head>
<?php include('inc/myfunctions.php'); ?> 
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
                    <!--<a href="<?php echo $base_url ?>signup-now"><input type="submit" value="Signup Now" /></a> -->
                </div>
</div>