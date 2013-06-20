$(function() {
  
  // Init Hotspots
  var response;
  $.get('./rest/hotspots', function(data) {
    response = data;
  }).success(function(){
    //htw.interactiveMap.init(response);
    if(htw.debug)console.log("initial request successfully called");
  }).fail(function(){
    if(htw.debug)console.log("initial request failed");
  });
  // Bind Hotspot Create Form
  $('#add-hotspot-form').submit(function(){
    htw.interactiveMap.addHotspot($(this).serialize());
    return false;
  });


  // Bind Hotspot Location Clicking
  $('.map').on("contextmenu", function(e){
    
      var target = $(e.target);
      console.log(target);

      if( e.button !== 2 ) return false;
      
      if( !target.hasClass("map")){
              return false;
      }
      $('#hotspot-prepare-dialog').fadeOut(0);


      var x = Math.round(e.pageX - target.offset().left),
      y = Math.round(e.pageY - target.offset().top);
      var prepareX = (x-80<20)?20:(x-80);
      var prepareY = (y-80<20)?20:(y-80);

      $('#hotspot-confirm-dialog').css({
        "top":e.pageY,
        "left":e.pageX,
      }).fadeIn(200);

      $('#hotspot-prepare-dialog').css({
        "top":prepareY,
        "left":prepareX
      });

      $('#xOff').val(x);$('#yOff').val(y);
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

  //Bind Navigation Scrolling anchors
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

  // Bind Hotspot Category Toggling
  $('#category-selection').find("li").click(function(){
    var category=$(this).data("category");

    if( ! $(this).hasClass("itemsHidden")){
      $(this).addClass("itemsHidden");
      htw.interactiveMap.hideHotspots( category );
    }else{
      $(this).removeClass("itemsHidden");
      htw.interactiveMap.showHotspots( category );
    }
  });
  /*

  // Bind Hotspot Hover effect

*/
  var hotspotHoverTimer;
  $(".hotspots").on( "mouseenter", function(){
      console.log("x");
      var that = $(this).stop().addClass("extended");
      clearTimeout(hotspotHoverTimer);

      hotspotHoverTimer = setTimeout(function(){
        that.children("h1, p").css("opacity", "1");
      },400);
   }).on("mouseleave", function(){
      console.log("y");
    var that = $(this).stop();

      that.children("h1, p").css("opacity", "0");

      clearTimeout(hotspotHoverTimer);
      hotspotHoverTimer = setTimeout(function(){
        that.removeClass("extended");
      },150);

   } );

});

$(window).load(function() {
  $("body").removeClass("preload");
});

  
