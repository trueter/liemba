<?php /*
Template Name: Project Page
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

    $.get("https://api.betterplace.org/en/api_v4/organisations/"+htw.liemba.organisationID+"/projects.json", function(feedback){
      fetchedProjects = feedback.data;
    }).success(function(){

      var source = $("#donation-item-template").html();
      var template = Handlebars.compile(source);

        var context = {projects : fetchedProjects};

        list.html(template(context));

    }).error(function(){
      $('#content-wrapper').html("<h1>Konnte keine Verbindung zu Betterplace.org herstellen</h1>");
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
          <a href="./donation-form?project_id={{id}}">
            <button class="project-donate-button green-item">Spenden</button>
          </a>
        </div>
      </div>
    {{/each}}
  </script>
  



<?php get_footer(); ?>