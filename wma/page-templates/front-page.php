<?php
/**
 * Template Name: Front Page
 */

get_header('home'); ?>


<?php
	if ( is_front_page() ) {
	}
?>

<div class="header clearfix">
	<img src="<?php echo get_template_directory_uri(); ?>/images/slider.jpg" />
            	<div class="logo">
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
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
<div class="content clearfix">
	<div class="container effect-list">
    	<div class="row">
        	 <div class="col-lg-4">
                	<div class="content-inner">
                	<div class="view third-effect">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider-image-1.jpg" />
                        <div class="mask">
                            <h2>READ THE LATEST POSTS</a></h2>
                            <!--<p><span>REad the</span> latist Posts</p>-->
                        </div>
                    </div>
                    <div class="effect-bottom">
                    	<h3><a href="<?php echo $base_url ?>blog">Start Reading Now!</a></h3>
                    </div>
                </div>
             </div>
             <div class="col-lg-4">
                	<div class="content-inner">
                	<div class="view third-effect">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider-image-2.jpg" />
                        <div class="mask">
                            <h2>Connect</h2>
                            <p><span>With ARtists, </span><br />Bands, Churches</p>
                        </div>
                    </div>
                    <div class="effect-bottom">
                    	<h3>Start Reading Now!</h3>
                    </div>
                </div>
             </div>
             <div class="col-lg-4">
                	<div class="content-inner">
                	<div class="view third-effect">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider-image-3.jpg" />
                        <div class="mask">
                            <h2>Checkout Latest Events</a></h2>
                            <!--<p><span>Checkout Latest </span><br />Events</p>-->
                        </div>
                    </div>
                    <div class="effect-bottom">
                    	<h3><a href="<?php echo $base_url ?>events">Start Reading Now!</a></h3>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
       	<?php
			$album_data = home_gallery();
			foreach($album_data as $album){
				$album_image = wp_get_attachment_image_src( get_post_thumbnail_id($album->ID),'single-post-thumbnail');
			
			?>
				<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6 text-center">
            	<a href="<?php the_permalink($album->ID); ?>"><img src="<?php echo $album_image[0]?>" alt="<?php echo $album->title ?>" /></a>
            </div>
				
		<?php }?>
        	
        </div>
    </div>
</div>

<?php
get_footer();
