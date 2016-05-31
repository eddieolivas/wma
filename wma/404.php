<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>
<div class="content clearfix">
	<div class="container">
    
    	<div class="row">
        	<div class="col-lg-12">
         <section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'twentysixteen' ); ?></p>

					<?php //get_search_form(); ?>
				</div><!-- .page-content -->
			</section>
                
            </div>
            
        </div>
    </div>
</div>
	
<?php get_footer(); ?>