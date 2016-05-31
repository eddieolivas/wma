<?php
/*
* Template Name: Blog Page Template
*/
get_header(); 
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
            	<div class="blog-content-left">
                <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                	
					<article>
						<div class="article-row">
                        	<div class="date"><span><?php the_time('d'); ?></span><span class="month"><?php the_time('F') ?></div>
                            <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="entry-meta">
                                    Posted   by  <span>admin</span> -
                                    
                                </div>
                        </div>
                        <div class="artcle-sp"></div>
                        <div class="article-row article-row-item">
                        	<?php 
							the_excerpt();
							//the_content('Read More'); ?>
                            <div class="readmore-wrapper"><a class="readmore-link" href="<?php echo get_permalink();?>">Read more...</a><span class="comments"><?php comments_popup_link( '<span class="leave-reply">' . __( '<i class="fa fa-comment-o"><span>0</span></i> comment', 'twentytwelve' ) . '</span>', __( '<i class="fa fa-comment-o"><span>1</span></i> comments', 'twentytwelve' ), __( '<i class="fa fa-comment-o"><span>%</span></i> comments', 'twentytwelve' ) ); ?></span></div>
                        </div>
                        <div class="artcle-sp"></div>
                        <div class="article-row tags">
                        	<span>Tags:</span> <?php the_tags('') ?>
                        </div>
					
					</article>
					<?php endwhile; ?>
                    <div class="pagination-wrapper">  <?php wp_pagenavi( array( 'query' => $wp_query ) );?> </div>
					<?php else : ?>
					<h2>No Posts Found</h2>
					<?php endif; ?>
                    
					<?php wp_reset_query(); ?>
                </div>
                
            </div>
            
        </div>
    </div>
</div>


<?php
get_sidebar();
get_footer();
