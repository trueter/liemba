$(function() {
  
  // Init Hotspots
  var response;
  $.get('./rest/hotspots', function(data) {
    response = data;
  }).success(function(){
    htw.interactiveMap.init(response);
    if(htw.debug)console.log("initial request successfully called");
  }).fail(function(){
    if(htw.debug)console.log("initial request failed");
  });

  

  // Bind Navigation Scrolling anchors
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

   // Bind Hotspot Hover effect
   var hotspotHoverTimer;
    $('.hotspots').hover(function(){
      var that = $(this).stop().addClass("extended");
      clearTimeout(hotspotHoverTimer);

      hotspotHoverTimer = setTimeout(function(){
        that.children("h1, p").css("opacity", "1");
      },400);
    }, function(){
      var that = $(this).stop();

      that.children("h1, p").css("opacity", "0");

      clearTimeout(hotspotHoverTimer);
      hotspotHoverTimer = setTimeout(function(){
        that.removeClass("extended");
      },150);
  });

});

$(window).load(function() {
  $("body").removeClass("preload");
});

/*
  // Init Events
  $('#add-hotspot-form').submit(function(){
    htw.interactiveMap.addHotspot($(this).serialize());
    return false;
  });*/