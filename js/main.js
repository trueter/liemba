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

  
