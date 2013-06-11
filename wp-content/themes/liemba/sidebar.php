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
			<a href="#">Spenden</a>
		</div>
	</div>

	<div id="news-ticker-wrapper" class="white-item">
		<h1>Neuigkeiten</h1>
		<?php if ( function_exists('insert_newsticker') ) { insert_newsticker(); } ?>
	</div>
	    			
</aside>
<!-- /sidebar -->