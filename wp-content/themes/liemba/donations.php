<?php /*
Template Name: Donations
*/

get_header(); ?>  

  
  <div id="sidebar-and-content" class="clear">
<?php get_sidebar(); ?>

  <!-- section -->
  <section id="content-wrapper" class="black-item" role="main">

    <ul id="project-list">
      
    </ul>
  

  </section>
  <!-- /section -->

  </div>
  <script type="text/javascript">
  $(document).ready(function(){

    var fetchedProjects;
    var list = $('#project-list');

    $.get("https://api.betterplace.org/en/api_v4/organisations/125/projects.json", function(feedback){
      fetchedProjects = feedback.data;
    }).success(function(){
      console.log(fetchedProjects);

      var source = $("#donation-item-template").html();
      var template = Handlebars.compile(source);

        var context = {projects : fetchedProjects};

        list.html(template(context));

    });

  });
  </script>
  <script id="donation-item-template" type="text/x-handlebars-template">
     {{#each projects}} 
      <div class="project-entry">
      
        <img src="dummy.jpg" alt="" class="project-image">
        <div class="project-content">
          <h3 class="project-title">{{title}}</h1>
          <div class="project-description">{{ safe description }}</div>
          <div class="project-donate-button green-item">Spenden</div>
        </div>
      </div>
    {{/each}}
  </script>



<?php get_footer(); ?>