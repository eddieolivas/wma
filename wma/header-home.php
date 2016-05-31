<?php
/**
 * The template for displaying the header
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all" />
    <link rel="icon" type="image/png" sizes="192x192"  href="/demo/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/demo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/demo/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/demo/favicon-16x16.png">
    <link rel="icon" type="image/png" href="/demo/favicon.ico">
	<?php wp_head(); 
	global $base_url;
	$base_url= get_site_url().'/';
	?>
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
                <?php 
                $current_user = wp_get_current_user();
                if(!is_user_logged_in()) { ?>
                <a href="/demo/signup-now">Sign Up Free</a>
                <?php } else { ?>
                <a href="<?php echo '/demo/members/' . $current_user->user_login; ?>">My Account</a>
                <?php } ?>
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