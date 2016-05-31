<?php
/*
* Template Name: Blog Page Template
*/
get_header();
global $base_url; 
if (has_post_thumbnail()){
	$banner_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'single-post-thumbnail');
 }
else {
	$banner_img[0] = get_template_directory_uri().'/images/about-banner.jpg';
	
}

?>
 

<div class="content clearfix">

	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            
            	<h1>Blogs</h1>
            
            	<div class="col-lg-7 blog-content-left">
                <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); 
				//$author = get_the_author(); 
				$author_id=$post->post_author; 
				$categories = get_the_category( $post->ID );
				//print_r($categories[0]);
				?>
                	
					<article>
						<div class="article-row">
                        	<div class="date" style="display:none"><span><?php the_time('d'); ?></span><span class="month"><?php the_time('F') ?></div>
                            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                             
                             <?php twentysixteen_post_thumbnail(); ?>
                                <div class="entry-meta">
                                    <span class="author"><i class="fa fa-user"></i><?php echo the_author_meta( 'user_nicename' , $author_id ); ?> </span>
                                    <span class="category"><i class="fa fa-folder-open"></i><a href="<?php echo $base_url ?>category/<?php echo $categories[0]->slug  ?>"><?php echo $categories[0]->name ?></a></span>
                                    <span class="tags"><i class="fa fa-tag"></i><?php the_tags('') ?></span>
                                   <span class="comments"><?php comments_popup_link( '<span class="leave-reply">' . __( '<i class="fa fa-comment"></i><span>0</span> comment', 'twentytwelve' ) . '</span>', __( '<i class="fa fa-comment"></i><span>1</span> comments', 'twentytwelve' ), __( '<i class="fa fa-comment"></i><span>%</span> comments', 'twentytwelve' ) ); ?></span></span>
                                    
                                </div>
                        </div>
                        
                        <div class="artcle-sp"></div>
                        <div class="article-row article-row-item">
                        	<?php the_excerpt();//the_content('Read More'); ?>
                            <div class="readmore-wrapper"><a class="readmore-link" href="<?php echo get_permalink();?>">Read more...</a></div>
                        </div>
                        <div class="artcle-sp"></div>
                        
					
					</article>
                     <hr />
					<?php endwhile; ?>
                    <div class="pagination-wrapper">
						<?php
                        
                         the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'twentysixteen' ),
                        'next_text'          => __( 'Next page', 'twentysixteen' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
                        ) );
                            
                        ?>
                    
                    
                     <?php //wp_pagenavi();?> </div>
					<?php else : ?>
					<h2>No Posts Found</h2>
					<?php endif; ?>
                    
					<?php wp_reset_query(); ?>
                </div>
                
                
                <div class="col-lg-4 col-lg-offset-1">
                <?php get_sidebar('blog'); ?>
              	</div>
                
            </div>
            
        </div>
    </div>
</div>


<?php
//get_sidebar();
get_footer();
