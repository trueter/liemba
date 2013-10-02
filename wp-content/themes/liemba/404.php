<?php get_header(); ?>

	<div id="sidebar-and-content">
		<?php get_sidebar(); ?>
		<!-- section -->
		<section role="main" id="content-wrapper" class="black-item">
		
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>
				
			</article>
			<!-- /article -->
			
		</section>
		<!-- /section -->
	</div>
	


<?php get_footer(); ?>