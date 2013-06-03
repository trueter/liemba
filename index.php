<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Liemba meets Skrollr</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/skrollr-fixed-setup.css" rel="stylesheet" type="text/css">
	<link href="css/skrollr-keyframes.css" rel="stylesheet" type="text/css" data-skrollr-stylesheet>
	<link href="css/main.less" rel="stylesheet/less" type="text/css" data-skrollr-stylesheet>
</head>

<body>
	<div id="nav" class="always-on-top"></div>
	<div id="offsetHelper" class="always-on-top">0</div>
		
	<div id="skollr-menu-wrapper" class="always-on-top">
		<ul>
			<li><a href="#railroadText" data-menu-top="200">Railroad</a></li>
			<li><a href="#oceanText" data-menu-top="1400">Ocean</a></li>
		</ul>
	</div>

<<<<<<< HEAD:index.html
	
	<!-- ocean scene -->
	<div id="oceanBackground" class="background"></div>
	<div id="clouds"></div>
	<div id="bombs"></div>
	<div id="oceanShip"></div>
	<div id="water"></div>
	<div id="oceanText" class="historyText">
		<h1>Bombenangriff</h1>
		<h2>10. Juni 1916</h2>
		<p>Am 10. Juni 1916 flogen vier belgische Wasserflugzeuge einen ersten Bombenangriff gegen das DS „Goetzen“, das zu diesem Zeitpunkt im Hafen von Kigoma lag.</p>
	</div>
	
=======
	<div id="instruction-circle" class="always-on-top">
		<p>Scrollen sie hinunter, um die Reise zu starten</p>
		<p>Scroll down to start the journey</p>
	</div>

	<?php require("scenes.inc.php"); ?>
>>>>>>> e277c18919da4f194a171464cb78dffd33896c43:index.php
	
	<script type="text/javascript" src="js/vendor/less-1.3.3.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/vendor/skrollr.stylesheets.js"></script>
	<script type="text/javascript" src="js/vendor/skrollr.min.js"></script>
	<script type="text/javascript" src="js/vendor/skrollr.menu.js"></script>
	<script type="text/javascript" src="js/vendor/prefixfree.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/vendor/skrollr.ie.js"></script>
	<![endif]-->
</body>
</html>
