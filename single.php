<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row clearfix">
					<div class="large-3 medium-3 columns">
						<?php get_sidebar('left'); ?>
					</div>

					<div id="main" class="large-9 medium-9 columns first clearfix" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'partials/content', 'missing' ); ?>

					    <?php endif; ?>
			
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>