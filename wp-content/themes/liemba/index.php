<?php get_header(); ?>	
	
<div id="sidebar-and-content">
<?php get_sidebar(); ?>

<!-- section -->
	<section id="content-wrapper" class="clear white-item" role="main">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); // Anfang des Loop ?>

			<h1><?php the_title(); ?></h1>

			<?php the_time('d. F Y') ?> von <?php the_author() ?>

			<div class="post-content"><?php the_content('Mehr erfahren.. &raquo;'); ?></div>

			<p class="post-metadata">
				<!--Abgelegt in <?php the_category(', ') ?>  <strong>|</strong> -->
				<?php edit_post_link('Bearbeiten','',''); ?> 
				<!--<?php comments_popup_link('Keine Kommentare »', '1 Kommentar »', '% Kommentare »'); ?>-->
			</p>

		<?php endwhile; // Ende des Loop ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','','&laquo; Seite vor') ?></div>
			<div class="alignright"><?php posts_nav_link('','Weiter &raquo;','') ?></div>
		</div>

	<?php else : ?>
		<h1>Keine News gefunden</h1>
	<?php endif; ?>

	</section>
	<!-- /section -->

</div>

<?php get_footer(); ?>

<!--
<div class="sidebar-widget blue-item">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
</div>

<div class="sidebar-widget blue-item">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
</div>

-->



