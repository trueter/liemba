<?php /*
Template Name: Donation Form
*/

if( isset($_GET['pid']) ){
  $pid = $_GET['pid'];
}else{
  header("location: ./spenden");
}


get_header(); ?>  

  
  <div id="sidebar-and-content" class="clear">
<?php get_sidebar(); ?>

  <!-- section -->
  <section id="content-wrapper" class="black-item" role="main">
    
    <script type="text/javascript">
      var _bp_iframe         = _bp_iframe || {};
      _bp_iframe.project_id  = <?= $pid ?>;
      _bp_iframe.lang        = 'de';

      (function() {
        var bp = document.createElement('script'); bp.type = 'text/javascript'; bp.async = true;
        bp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.betterplace.org/assets/load_donation_iframe.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bp, s);
      })();
    </script>
  <div id="betterplace_donation_iframe">
    <a href="https://www.betterplace.org/de/projects/13705-unterstutzung-der-instandsetzung-des-ms-liemba/donations/new">Jetzt Spenden für &bdquo;Unterstützung der Instandsetzung des MS Liemba&ldquo; bei unserem Partner betterplace.org</a>
  </div>

  </section>
  <!-- /section -->

  </div>

<?php get_footer(); ?>



