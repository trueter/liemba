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
				
				<div id="info" class="blue-item">
					<?php # get_template_part('searchform'); ?>
					<a href="<?php get_permalink( get_page_by_title( 'Impressum' ) ); ?>">Impressum</a> | <a href="<?php get_permalink( get_page_by_title( 'Kontakt' ) ); ?>">Kontakt</a><br>
					&copy; <?php echo date("Y"); ?> Run Liemba
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