window.htw = {};
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
        console.log("addHotspot:fail");
      }).error(function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      });
    },
    removeHotspot : function (id){
      $.ajax('./rest/hotspots/'+id, {type: 'DELETE'}).success(function(){

        $('#hotspot-'+id).remove();
        console.log("removeHotspot:success");
      }).fail(function(){
        console.log("removeHotspot:fail");
      }).error(function (xhr, ajaxOptions, thrownError){
        console.log("xhr status" +xhr.status);
        console.log("thrown error" +thrownError);
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
    console.log("initial request failed");
  });

  // Init Events
  $('#add-hotspot-form').submit(function(){
    htw.interactiveMap.addHotspot($(this).serialize());
    return false;
  });
});