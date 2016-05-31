<?php

get_header();
global $base_url;
$all_data = $wp_query->query_vars;


//echo '<pre>';
//print_r($wp_query->query_vars);
//echo '</pre>';
?>

<div class="content clearfix">
	<div class="container">
    
    	<div class="row">
        	<div class="col-lg-12">
            <h1>Worship Musicians Association Communities</h1>
         <?php 
			if(isset($all_data['forum']) || isset($all_data['topic'])){   
				while ( have_posts() ) : the_post();
				
					the_content();
					
				endwhile;
			} else {
			?>
        	<table class="table table-striped">
                <tbody>
                <?php
                
                $args = array( 'post_type' => 'forum', 'posts_per_page' => 20 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();?>
                    
                    <tr>
                        <td width="80"><img src="<?php echo get_template_directory_uri(); ?>/images/msg-icon.png" /></td>
                        <td>
                        <a href="<?php bbp_topic_permalink(); ?>"><?php the_title() ?> </a>
                        <span class="forum-content"><?php bbp_topic_freshness_link(); ?></span>
                        </td>
                        <td width="200"><h6>by <?php bbp_topic_author() ?></h6></td>
                    </tr>
                    
                    <?php
                       // the_title();
                        //bbp_get_topic_author_link ( array( 'size' => '60' )  );
                    endwhile;
                
                ?>
                 </tbody>
          </table>
             <?php } ?>     
            </div>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>
