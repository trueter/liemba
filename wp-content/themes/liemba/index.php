<?php get_header(); ?>	
	
<div id="sidebar-and-content">
<?php get_sidebar(); ?>

<!-- section -->
	<section id="content-wrap" class="clear" role="main">
	
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1> 
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->

</div>

<!-- social links -->
<div id="social-wrapper" class="white-item">
	<a href="http://www.facebook.com/Run.Liemba"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" alt="facebook"></a>
	<a href="http://twitter.com"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" alt="twitter"></a>
</div>
<!-- !social links -->

<?php get_footer(); ?>

<!--
<div class="sidebar-widget blue-item">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
</div>

<div class="sidebar-widget blue-item">
	<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
</div>

-->
