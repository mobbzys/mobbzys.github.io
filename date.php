get_header(); ?>

	<section class="mb-5"><!--DATE SECTION-->
		<div class="container">
			<h1 class="text-center mt-5 mb-5">Blog</h1>
				<div class="row">
					
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							
							<div class="col-4 mb-5">
								<a href="<?php the_permalink(); ?>">
									<img src=""><?php the_post_thumbnail('medium', array('class' => 'img-responsive') ); ?>	
								</a>
								<h2 class="blog-post-title"><?php the_title() ;?></h2>
								<p class="blog-post-meta"><?php the_time('F j, Y'); ?></p>
								<p><?php the_excerpt() ;?></p> 			
							</div>		

					<?php endwhile; else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				
				</div><!--/row-->
		</div><!--/container-->
	</section>

<?php get_footer(); ?>