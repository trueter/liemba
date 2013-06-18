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

      var x = e.pageX - target.offset().left,
      y = e.pageY - target.offset().top;

      $('#hotspot-prepare-dialog').fadeOut(50);
      $('#hotspot-confirm-dialog').css({
        "top":y-40,
        "left":x-100
      }).fadeIn(200);

      var prepareX = (x-250<20)?20:(x-250);
      var prepareY = (y-100<20)?20:(y-110);

      $('#hotspot-prepare-dialog').css({
        "top":prepareY,
        "left":prepareX
      });

      $('#xOff').val(x);$('#yOff').val(y);
      return true;

  });

  $('.hotspots').on("click", function(e){
    console.log(e.target);
    /*if( ! target.hasClass("hotspots")){
        return false;
            alert("remove hotspot");*/
  });

  $('#hotspot-confirm-dialog-cancel').click(function(){
    $('#hotspot-confirm-dialog').fadeOut(50);
  });

  $('#hotspot-confirm-dialog-create').click(function(){
    htw.interactiveMap.prepareHotspot();
    $('#hotspot-confirm-dialog').fadeOut(50);
  });

  $('#hotspot-prepare-dialog-close').click(function(){
    $('#hotspot-prepare-dialog').fadeOut(50);
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

  