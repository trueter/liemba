<?php /*
Template Name: Spenden Page
*/

get_header(); ?>  

  
  <div id="sidebar-and-content" class="clear">
<?php get_sidebar(); ?>

  <!-- section -->
  <section id="content-wrapper" class="black-item" role="main">
    <h1>Spendenprojekte</h1>
    <ul id="project-list">
      <div class="project-entry">
      
        <img src="https://asset1.betterplace.org/paperclip/000/314/157/profile_15.jpg" alt="" class="project-image">
        <div class="project-content">
          <h3 class="project-title">Instandsetzung</h1>
          <div class="project-description">Die Liemba ist eines der ältesten verkehrenden Passagie- und Transprotschiffe der Welt. Das Schiff wurd das letzte mal 1993, finanziert durch die dänischen Entwicklungshilfeorganisation DANIDA (Danish International Development Agency), generalüberholt und mit zwei Dieselmotoren bestückt. Seitdem ist es ununterbrochen im Einsatz.
          <br><a class="project-betterplace-link" href="http://www.betterplace.org/de/projects/13778-instandsetzung" target="_blank">Projekt auf betterplace.org betrachten</a>
        </div>
          <a href="./projekt?pid=13778">
            <button class="project-donate-button green-item">Spenden</button>
          </a>
        </div>
      </div>
      
    </ul>
  

  </section>
  <!-- /section -->

  </div>
  <script type="text/javascript">
  $(document).ready(function(){

    var fetchedProjects;
    var list = $('#project-list');
    var source = $("#donation-item-template").html();
    var template = Handlebars.compile(source);

    $.get("https://api.betterplace.org/en/api_v4/organisations/"+htw.liemba.organisationID+"/projects.json", function(feedback){
      fetchedProjects = feedback.data;
    }).success(function(){


        var context = {projects : fetchedProjects};

        list.append(template(context));

    }).error(function(){
      $('#content-wrapper').html("<h1>Konnte keine Verbindung zu Betterplace.org herstellen</h1>");
    });


  });
  </script>
  <script id="donation-item-template" type="text/x-handlebars-template">
     {{#each projects}} 
      <div class="project-entry">
      
        <img src="{{imageOf this}}" alt="" class="project-image">
        <div class="project-content">
          <h3 class="project-title">{{title}}</h1>
          <div class="project-description">{{ safe description }}<br><a class="project-betterplace-link" href="{{betterplaceLinkTo this}}" target="_blank">Projekt auf betterplace.org betrachten</a></div>
          <a href="./projekt?pid={{id}}">
            <button class="project-donate-button green-item">Spenden</button>
          </a>
        </div>
      </div>
    {{/each}}
  </script>
  



<?php get_footer(); ?>