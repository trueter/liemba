<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Liemba meets Skrollr</title>
	<link href="css/skrollr-fixed-setup.css" rel="stylesheet" type="text/css">
	<link href="css/general-keyframes.php" rel="stylesheet" type="text/css" data-skrollr-stylesheet>
	<link href="css/master.less" rel="stylesheet/less" type="text/css">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/story-styles.less" rel="stylesheet/less" type="text/css">
	<link href="css/story-keyframes.php" rel="stylesheet/css" type="text/css" data-skrollr-stylesheet>
</head>


<body>
	<div id="offsetHelper" class="always-on-top">0</div>

    
	
	<div id="skollr-menu-wrapper" class="always-on-top">
		<ul>
		<?php for ($i=1; $i < 21; $i++) { ?>
			<li><a href="#railroadText" data-menu-top="<?=($i-1);?>000">#<?=$i;?></a></li>
		<?php } ?>
		</ul>
	</div>

    <div id="section-wrapper">
	   <?php require("stories.inc.php"); ?>
    </div>
	
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
