window.htw = {};
window.htw.debug = true;
window.htw.interactiveMap = function () {

  var map = null;
  
  return {

    init : function (hotspots) {
      map = $('#map-wrapper');

      $(hotspots).each(function () {
        var currentHotspot = $(this)[0],
            id = currentHotspot.id,
            name = currentHotspot.name,
            left = currentHotspot.xOff,
            top = currentHotspot.yOff,
            e = $('<div/>', {'id' : 'hotspot-' + id, 'data-id' : id, 'data-name' : name, 
                   'class': 'map-hotspot-anchor',
                   'style': 'top:' + top + 'px;left:' + left + 'px' });

        map.append(e);

      });
    },
    addHotspot : function (formdata) {
      
      $.post('./rest/hotspots', formdata ).success(function(feedback){

      var hotspot = feedback,
          id = hotspot.id,
          name = hotspot.name,
          top = hotspot.yOff,
          left = hotspot.xOff,
          e = $('<div/>', {'id' : 'hotspot-' + id, 'data-id' : id, 'data-name' : name,
                   'class': 'map-hotspot-anchor',
                   'style': 'top:' + top + 'px;left:' + left + 'px' });

        map.append(e);
      

      }).fail(function(){
        if(htw.debug)console.log("addHotspot:fail");
      
      }).error(function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      });

      
    },
    removeHotspot : function (id){
      $.ajax('./rest/hotspots/'+id, {type: 'DELETE'}).success(function(){

        $('#hotspot-'+id).remove();
        if(htw.debug)console.log("removeHotspot:success");
      
      }).fail(function(){
        if(htw.debug)console.log("removeHotspot:fail");
      
      }).error(function (xhr, ajaxOptions, thrownError){
        if(htw.debug)console.log("xhr status" +xhr.status);
        if(htw.debug)console.log("thrown error" +thrownError);
      
      });
      
    }, 
    hideHotspots : function (category){
      if(category=="")return;
      
      $(".hotspots."+category).each(function(){
          $(this).css("display","none");
      });
    },
    showHotspots : function (category){
      if(category=="")return;
      
      $(".hotspots."+category).each(function(){
          $(this).css("display","block");
      });
    }

  } // return
}();

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

  // Init Events
  $('#add-hotspot-form').submit(function(){
    htw.interactiveMap.addHotspot($(this).serialize());
    return false;
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
      $(this).addClass("itemsHidden")
      htw.interactiveMap.hideHotspots( category );
    }else{
      $(this).removeClass("itemsHidden")
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
    },300);
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