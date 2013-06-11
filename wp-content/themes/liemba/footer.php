			<!-- footer -->
			<footer class="footer clear" role="contentinfo">

				<div id="search-and-info">
					<?php  get_template_part('searchform'); ?>
					<!-- copyright -->
					<span class="copyright blue-item">
						&copy; <?php echo date("Y"); ?> Run Liemba | Impressum | Kontakt
					</span>
					<!-- /copyright -->
				</div>
				<!-- footer widgets -->
				<div class="footer-widget-wrapper">
					<a class="footer-widget blue-item">
						Die Route<br>der Liemba
					</a>
					
					<a class="footer-widget blue-item">
						Die Geschichte<br>
						der Liemba
					</a>
				</div>
				<!-- /footer widgets -->

			</footer>
			<!-- /footer -->
		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>

		<!-- scripts -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main.js'?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery.backstretch.min.js'?>"></script>
		<!-- /scripts>
	
	</body>
</html>