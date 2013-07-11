$(function() {
  
//// Init Hotspots


  var response;
  $.get('./rest/hotspots', function(data) {
    response = data;
  }).success(function(){
    htw.interactiveMap.init(response);
    if(htw.debug)console.log("initial request successfully called");
  }).fail(function(){
    if(htw.debug)console.log("initial request failed");
  });

//// Bind Hotspot Create Form

  $('#hotspot-form').submit(function(){
    var hsid = $(this).data("hotspot-id");

    if( hsid  === "new"){
      if (htw.interactiveMap.createHotspot($(this).serialize())){
        $('#hotspot-prepare-dialog').fadeOut(0);
      }
    }else{
      if (htw.interactiveMap.updateHotspot(hsid , $(this).serialize())){
        $('#hotspot-prepare-dialog').fadeOut(0);
      }
    }
    
    return false;
  });

// Bind Contentmenu

  $('.map').on("contextmenu", function(e){
    
      var target = $(e.target);

      if( e.button !== 2 ) return false;
      
      if( !target.hasClass("map")){
              return false;
      }
      $('#hotspot-prepare-dialog').fadeOut(0);


      var x = Math.round(e.pageX - target.offset().left),
          y = Math.round(e.pageY - target.offset().top);

      $('#hotspot-confirm-dialog').css({
        "top":e.pageY,
        "left":e.pageX,
      }).fadeIn(200);

      $('#hotspot-prepare-dialog').css({
        
        "top":e.pageY,
        "left":e.pageX,
      });

      htw.interactiveMap.cleanForm();
      $('#hotspot-form-x').val(x);
      $('#hotspot-form-y').val(y);
      $('#hotspot-form-map').val(e.target.id);
      return false;

  });

  $('#hotspot-confirm-dialog-cancel').click(function(){
    $('#hotspot-confirm-dialog').fadeOut(50);
  });

  $('#hotspot-confirm-dialog-create').click(function(){
    htw.interactiveMap.prepareHotspot();
  });

  $('#hotspot-prepare-dialog-close').click(function(){
    $('#hotspot-prepare-dialog').fadeOut(50);
  });

////Bind Navigation Scrolling anchors

  $("#navigation-anchor-up").hover(function(){
      $("#navigation-stops").animate({ scrollTop: "-500px" }, 1000, "linear");
  },function(){
      $("#navigation-stops").stop();
  });
  $("#navigation-anchor-down").hover(function(){
      $("#navigation-stops").animate({ scrollTop: "500px" }, 1000, "linear");
  },function(){
      $("#navigation-stops").stop();
  });

//// Bind Hotspot Category Toggling

  $('#category-selection').find("li").click(function(){
    var category = $(this).data("category");

    if( ! $(this).hasClass("itemsHidden")){
      $(this).addClass("itemsHidden");
      htw.interactiveMap.hideHotspots( category );
    }else{
      $(this).removeClass("itemsHidden");
      htw.interactiveMap.showHotspots( category );
    }
  });
 
//// Live-bind .hotspots Hover Effect

  $("#map-wrapper").on( "mouseenter", ".hotspots", function(){
      var that = $(this).stop().addClass("extended");

      setTimeout(function(){
        that.children("h1, p").css("opacity", "1");
      },400);
   }).on("mouseleave", ".hotspots", function(){
    var that = $(this).stop();
      that.children("h1, p").css("opacity", "0");

      setTimeout(function(){
        that.removeClass("extended");
      },150);

   } );

//// Hotspot destroy

   $("#map-wrapper").on( "click", ".hotspot-destroy", function(){

     htw.interactiveMap.deleteHotspot($(this).data("id"));

   });

//// Hotspot edit

   $("#map-wrapper").on( "click", ".hotspot-edit", function(e){

    var id = $(this).parent().data("id");
    htw.interactiveMap.editHotspot(id,e);

   });

//// Move Dooads 
/*
  setInterval(function(){
    $apes = $(".apes");
    $apes.each(function(){
      $(this).animate({
        transform : translateY(-10px);
      },4500).animate({
        transform : translateY(0px);
      },4500)
    });
  },4000);
*/
});

$(window).load(function() {
  $("body").removeClass("preload");
});

  
