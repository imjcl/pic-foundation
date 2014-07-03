<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row clearfix">
					<div class="large-3 medium-3 columns clearfix">
						<?php get_sidebar('left'); ?>
					</div>
						
				    <div id="main" class="large-9 medium-9 columns clearfix" role="main">

				    	<h2 class="section-head">PIC Lab Policies</h2>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'simple' ); ?>
					
					    <?php endwhile; ?>	
					
					        <?php if (function_exists('joints_page_navi')) { ?>
					            <?php joints_page_navi(); ?>
					        <?php } else { ?>
					        
					            <nav class="wp-prev-next">
					                <ul class="clearfix">
					        	        <li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
					        	        <li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
					                </ul>
					            </nav>
					        <?php } ?>		
					
					    <?php else : ?>
					    
    						<?php get_template_part( 'partials/content', 'missing' ); ?>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>