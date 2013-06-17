window.htw = {};
window.htw.interactiveMap = function () {

  var map = null;
  var debug = false;
  
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
        if(debug)console.log("addHotspot:fail");
      
      }).error(function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      });

      
    },
    removeHotspot : function (id){
      $.ajax('./rest/hotspots/'+id, {type: 'DELETE'}).success(function(){

        $('#hotspot-'+id).remove();
        if(debug)console.log("removeHotspot:success");
      
      }).fail(function(){
        if(debug)console.log("removeHotspot:fail");
      
      }).error(function (xhr, ajaxOptions, thrownError){
        if(debug)console.log("xhr status" +xhr.status);
        if(debug)console.log("thrown error" +thrownError);
      
      });
      
    }, 
    showHotspotDetails : function (){

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
  }).fail(function(){
    if(debug)console.log("initial request failed");
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

  $('.hotspots').hover(function(){
    var that = $(this).addClass("extended");
    setTimeout(function(){
      that.children("h1, p").css("opacity", "1");
    },400);
  }, function(){
    var that = $(this)
      that.children("h1, p").css("opacity", "0");
      setTimeout(function(){
        that.removeClass("extended");
      },200);
  });

});

$(window).load(function() {
  $("body").removeClass("preload");  
});