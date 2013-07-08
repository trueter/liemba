<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon_32.png" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon_140.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/wordpress_core.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/master.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tablets_and_desktops.css">
		<?php wp_head(); ?>

		<!-- custom scripts -->
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr();
		}()
		</script>
		<script>var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
		
	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">
	
			<!-- header -->
			<header class="header clear" role="banner">

					<div id="bomb">Initiative zum Erhalt des historischen Passagier- und Frachtschiffes "Liemba" als Träger von Entwicklung und Kulturaustausch am Tanganjika-See</div>
				
					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->

					<!-- social wrapper -->
					<div id="social-wrapper" class="white-item">
						<a href="http://www.facebook.com/Run.Liemba"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" alt="facebook"></a>
						<a href="http://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" alt="twitter"></a>
					</div>
					<!-- !social wrapper -->
					
			</header>
			<!-- /header -->