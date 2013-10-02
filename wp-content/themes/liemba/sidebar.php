<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<nav class="nav" role="navigation">
		<?php html5blank_nav(); ?>
		<!--
		<ul id="donation-wrapper" class="clear">
			<li class="donation-item green-item">
				<h1>Sum:</h1>
				<p id="donation-sum">4,5 Mio</p>
			</li>
			<li class="donation-item green-item ">
				<a href="./spenden">Spenden</a>
			</li>
		</ul>
		-->
	</nav>

	<?php if ( is_front_page() ){?>

		<div id="news-ticker-wrapper" class="white-item">
			<h1>Neuigkeiten</h1>
			<?php if ( function_exists('insert_newsticker') ) { insert_newsticker(); } ?>
		</div>

	<?php } ?>
	    			
</aside>
<!-- /sidebar -->