<?php
get_header();

?>
<div class="content clearfix">

	<div class="container">
    	<div class="row">
        	<div class="col-lg-12">
            
            	
            
            	<div class="col-lg-7 blog-content-left">
                <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); 
				$author_id=$post->post_author; 
				$categories = get_the_category( $post->ID );
				?>
                	
					<article>
						                        
                        <div class="article-row">
                        	
                            <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                             
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
                        	<?php 
							the_content();
							//the_content('Read More'); ?>
                            
                        </div>
                        <div class="artcle-sp"></div>
                        
						
					</article>
                    <?php 
						if ( comments_open() || get_comments_number() ) {
							comments_template();
							}

					?>
                   
					<?php endwhile; ?>
                   
					<?php else : ?>
					<h2>No Posts Found</h2>
					<?php endif; ?>
                    
					
                </div>
                
                
             
            	<div class="col-lg-4 col-lg-offset-1">
                <?php get_sidebar('blog'); ?>
              	</div>
            </div>
                
            </div>
            
        </div>
    </div>
</div>


<?php
get_footer();
