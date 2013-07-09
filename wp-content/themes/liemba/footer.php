			<!-- footer -->
			<footer class="footer clear" role="contentinfo">

				<!-- footer widgets -->
				<div class="footer-widget-wrapper clear">
					<a href="<?= get_bloginfo('url'); ?>/map/" target="_blank" class="footer-widget blue-item">
						Die Route<br>der Liemba
					</a>
					
					<a href="<?= get_bloginfo('url'); ?>/history/" target="_blank" class="footer-widget blue-item">
						Die Geschichte<br>
						der Liemba
					</a>
				</div>
				<!-- /footer widgets -->
				
				<div id="info" class="blue-item">
					<?php # get_template_part('searchform'); ?>
					<a href="<?php echo get_page_link(334); ?>">Impressum</a> | <a href="<?php echo get_page_link(84); ?>">Kontakt</a><br>
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