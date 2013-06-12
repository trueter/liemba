<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<nav class="nav" role="navigation">
		<?php html5blank_nav(); ?>
		
		<ul id="donation-wrapper">
			<li class="donation-item">
				<a href="#">Spenden</a>
			</li>
			<li class="donation-item green-item clear">
				<h1>Erreichte Summe:</h1>
				<p>4,5 Mio</p>
			</li>
		</ul>
	</nav>


	<div id="news-ticker-wrapper" class="white-item">
		<h1>Neuigkeiten</h1>
		<?php if ( function_exists('insert_newsticker') ) { insert_newsticker(); } ?>
	</div>
	    			
</aside>
<!-- /sidebar -->