			<!-- footer -->
			<footer class="footer clear" role="contentinfo">

				<!-- footer widgets -->
				<div class="footer-widget-wrapper clear">
					<a class="footer-widget blue-item">
						Die Route<br>der Liemba
					</a>
					
					<a class="footer-widget blue-item">
						Die Geschichte<br>
						der Liemba
					</a>
				</div>
				<!-- /footer widgets -->
				
				<div id="search-and-info">
					<?php  get_template_part('searchform'); ?>
					<!-- copyright -->
					<span class="copyright blue-item">
						&copy; <?php echo date("Y"); ?> Run Liemba | Impressum | Kontakt
					</span>
					<!-- /copyright -->
				</div>

			</footer>
			<!-- /footer -->
		
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- scripts -->
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main.js'?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/jquery.backstretch.min.js'?>"></script>
		<!-- /scripts>
	
	</body>
</html>