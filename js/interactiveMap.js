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
      if(category=="")return; //remove when all buttons are implemented
      
      $(".hotspots."+category).each(function(){
          $(this).css("display","none");
      });
    },
    showHotspots : function (category){
      if(category=="")return; //remove when all buttons are implemented
      
      $(".hotspots."+category).each(function(){
          $(this).css("display","block");
      });
    }
  }
}();
