var htw;
htw = {debug: true};
htw.interactiveMap = function () {

  var map = null;
  
  return {

    init : function (hotspots) {
      

      $(hotspots).each(function () {
        var currentHotspot = $(this)[0],
            id = currentHotspot.id,
            map = currentHotspot.map?$('#'+currentHotspot.map):$('#map-1'),
            name = currentHotspot.name,
            description = currentHotspot.description || "No Description",
            special_icon_path = currentHotspot.special_icon_path || "no_icon_path",
            x = currentHotspot.xOff,
            y = currentHotspot.yOff,
            right = map.width()-x-16;
            bottom = map.height()-y+15;
            category = currentHotspot.category || "placeholder",
            h1 = $('<h1>'+name+'</h1>'),
            p = $('<p>'+description+'</p>'),
            arrow= $('<div/>', {"class":"hotspot-arrows"}),
            //imagestrip = $('<div/>', {"class":"image-strip"}),
            /* picture files ? */

            div = $('<div/>', {'id' : 'hotspot-' + id, 'data-id' : id,
                   'class': 'hotspots '+category,
                   'style': 'bottom:' + bottom + 'px;right:' + right + 'px' });
            

            div.append(h1);
            div.append(p);
            div.append(arrow);



             map.append(div);

      });
    },
    prepareHotspot : function(){
      $('#hotspot-prepare-dialog').fadeIn(100);
      $('#hotspot-confirm-dialog').fadeOut(50);
    },
    addHotspot : function (formdata) {
      console.log(formdata);
      $.post('./rest/hotspots', formdata ).success(function(feedback){

      var hotspot = feedback,
          map = hotspot.map?$(hotspot.map):$('#map-1'),
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
      if(category==="")return; //remove when all buttons are implemented
      
      $(".hotspots."+category).each(function(){
          $(this).css("display","none");
      });
    },
    showHotspots : function (category){
      if(category==="")return; //remove when all buttons are implemented
      
      $(".hotspots."+category).each(function(){
          $(this).css("display","block");
      });
    }
  };
}();
