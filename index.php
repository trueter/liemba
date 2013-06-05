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
	

	<div id="head">
		<img id="spiral" src="img/spiral05.png">
	</div>



	<div id="background">
		<img id="paper" src="img/paper03.png">
	</div>

	
	
	<div id="bookmarks" class="footer"</div>
		
	<div id="skollr-menu-wrapper" class="always-on-top">
		<ul>
			<li><a href="#railroadText" data-menu-top="1400">Fliegerbomben</a></li>
			<li><a href="#oceanText" data-menu-top="2000">Versenkung</a></li>
		</ul>
	</div>

	

	
	<?php require("scenes.inc.php"); ?>
	
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
