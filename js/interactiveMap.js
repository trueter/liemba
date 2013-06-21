var htw;
htw = {debug: true};
htw.interactiveMap = function () {

   return {

    init : function (hotspots) {
      $(hotspots).each(function () {
        var currentHotspot = $(this)[0];
        htw.interactiveMap.addHotspot(currentHotspot);
      });
    },
    prepareHotspot : function(){
      $('#hotspot-prepare-dialog').fadeIn(100);
      $('#hotspot-confirm-dialog').fadeOut(50);
    },
    createHotspot : function (formdata) {
      $.post('./rest/hotspots', formdata ).success(function(feedback){

      htw.interactiveMap.addHotspot(feedback);

      }).fail(function(){
        if(htw.debug)console.log("createHotspot:fail");
      }).error(function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      });
      return true;
    },
    addHotspot : function (h){
      var id = h.id,
          map = $('#'+h.map),
          name = h.name,
          description = h.description,
          category = h.category,
          special_icon_path = h.special_icon_path,
          x = h.xOff,
          y = h.yOff;

          
      var right = map.width()-x-16,
          bottom = map.height()-y+15;
          

      var h1 = $('<h1>'+name+'</h1>'),
          p = $('<p>'+description+'</p>'),
          arrow= $('<div/>', {"class":"hotspot-arrows"}),
          
          div = $('<div/>', {'id' : 'hotspot-' + id, 'data-id' : id,
                 'class': 'hotspots '+category,
                 'style': 'bottom:' + bottom + 'px;right:' + right + 'px;' });
          // (special_icon_path!=="")?('background-image:'+special_icon_path):''

          div.append(h1);
          div.append(p);
          div.append(arrow);

          map.append(div);
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
