<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Geschichte der Liemba</title>
	<link href="css/skrollr-fixed-setup.css" rel="stylesheet" type="text/css">
	<link href="css/general-keyframes.php" rel="stylesheet" type="text/css" data-skrollr-stylesheet>
	<link href="css/master.less" rel="stylesheet/less" type="text/css">
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/story-styles.less" rel="stylesheet/less" type="text/css">
	<link href="css/story-keyframes.php" rel="stylesheet/css" type="text/css" data-skrollr-stylesheet>

	<link href="favicon_32.png" sizes="32x32" type="image/png" rel="shortcut icon">
	<link href="favicon_16.png" sizes="16x16" type="image/png" rel="icon">
	<link href="favicon_57.png" sizes="57x57" type="image/png" rel="icon">
	<link href="favicon_72.png" sizes="72x72" type="image/png" rel="icon">
	<link href="favicon_114.png" sizes="114x114" type="image/png" rel="apple-touch-icon-precomposed">

</head>


<body>
	<div id="overlay">
		<div id="infobox"></div>
	</div>
	
	<div id="offsetHelper" class="always-on-top">0</div>

    <img src="img/scroll.png" id="scroll">
    <img src="img/ende.png" id="ende">
	
	
	
	<a href="../.">
		<img src="img/home.png" id="home_icon">
	</a>

	<img src="img/infobox.png" id="infobox_icon">

	<div id="timeline-wrapper" class="always-on-top">
		<div id="line">
			<a href="#1910" data-menu-top="1000"><div id="circle1" class="circle">
				<span>1910</span>
			</div></a>
			
			<a href="#1911" data-menu-top="2000"><div id="circle2" class="circle">
				<span>1911</span>
			</div></a>

			<a href="#1913" data-menu-top="3000"><div id="circle3" class="circle">
				<span>1913</span>
			</div></a>

			<a href="#1914" data-menu-top="4000"><div id="circle4" class="circle">
				<span>1914</span>
			</div></a>

			<a href="#1914" data-menu-top="5000"><div id="circle5" class="circle">
				<span>1914</span>
			</div></a>

			<a href="#1915" data-menu-top="6000"><div id="circle6" class="circle">
				<span>1915</span>
			</div></a>

			<a href="#1915" data-menu-top="7000"><div id="circle7" class="circle">
				<span>1915</span>
			</div></a>

			<a href="#1915" data-menu-top="8000"><div id="circle8" class="circle">
				<span>1915</span>
			</div></a>

			<a href="#1915" data-menu-top="9000"><div id="circle9" class="circle">
				<span>1915</span>
			</div></a>
			
			<a href="#1916" data-menu-top="10000"><div id="circle10" class="circle">
				<span>1916</span>
			</div></a>

			<a href="#1916" data-menu-top="11000"><div id="circle11" class="circle">
				<span>1916</span>
			</div></a>

			<a href="#1920" data-menu-top="12000"><div id="circle12" class="circle">
				<span>1920</span>
			</div></a>

			<a href="#1924" data-menu-top="13000"><div id="circle13" class="circle">
				<span>1924</span>
			</div></a>

			<a href="#1927" data-menu-top="14000"><div id="circle14" class="circle">
				<span>1927</span>
			</div></a>

			<a href="#1947" data-menu-top="15000"><div id="circle15" class="circle">
				<span>1947</span>
			</div></a>

			<a href="#1964" data-menu-top="16000"><div id="circle16" class="circle">
				<span>1964</span>
			</div></a>

			<a href="#1976" data-menu-top="17000"><div id="circle17" class="circle">
				<span>1976</span>
			</div></a>

			<a href="#1993" data-menu-top="18000"><div id="circle18" class="circle">
				<span>1993</span>
			</div></a>

			<a href="#1997" data-menu-top="19000"><div id="circle19" class="circle">
				<span>1997</span>
			</div></a>

			<a href="#2013" data-menu-top="20000"><div id="circle20" class="circle">
				<span>2013</span>
		</div></a>
		</div>
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
