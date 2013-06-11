<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<nav class="nav" role="navigation">
		<?php html5blank_nav(); ?>
	</nav>

	<div id="donation-status-wrapper">
		<div class="donation-status green-item">
			<h1>Erreichte Summe:</h1>
			<p>4,5 Mio</p>
		</div>
		<div class="donation-status green-item">
			<a>Spenden</a>
		</div>
	</div>

	<div id="newsticker" class="white-item">
		<!--<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> -->
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	</div>
	    			
</aside>
<!-- /sidebar -->