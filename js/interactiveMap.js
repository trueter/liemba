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
      $('#hotspot-form').data("hotspot-id", "new");
      $('#hotspot-form-submit').val("Hotspot Erstellen");
      $('#hotspot-prepare-dialog').fadeIn(100);
      $('#hotspot-confirm-dialog').fadeOut(50);
    },
    createHotspot : function (formdata) {
      $.post('./rest/hotspots', formdata ).success(function(feedback){
        htw.interactiveMap.addHotspot(feedback);
        console.log(feedback);

      }).fail(function(){
        if(htw.debug)console.log("createHotspot:fail");
      }).error(function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      });
      return true;
    },
    updateHotspot : function(id, formdata){
      console.log("update hotspot called");
      $.post('./rest/hotspots/id', formdata ).success(function(feedback){
        htw.interactiveMap.removeHotspot(id);
        htw.interactiveMap.addHotspot(feedback);

      }).fail(function(){
        if(htw.debug)console.log("createHotspot:fail");
      }).error(function (xhr, ajaxOptions, thrownError){
        alert(xhr.status);
        alert(thrownError);
      });
      return true;
    },
    editHotspot : function(id){
      $('#hotspot-prepare-dialog').fadeIn(100);
      $('#hotspot-form').attr("data-hotspot-id",  id);
      $('#hotspot-form-submit').val("Hotspot updaten");

      var h = $('#hotspot-'+id);
      console.log(h.data("x"));

      $("#hotspot-form-name").val(h.data("name"));
      $("#hotspot-form-description").val(h.data("description"));
      $("#hotspot-form-category").val(h.data("category"));
      $("#hotspot-form-special_icon_path").val(h.data("special_icon_path"));
      $("#hotspot-form-x").val(h.data("x"));
      $("#hotspot-form-y").val(h.data("y"));
      $("#hotspot-form-map").val(h.data("map"));

    },
    addHotspot : function (h){

      var id = h.id,
          map = h.map,
          name = h.name,
          description = h.description,
          category = h.category,
          special_icon_path = h.special_icon_path,
          x = h.xOff,
          y = h.yOff;

      var mapE = $('#'+h.map);

          
      var right = mapE.width()-x-16,
          bottom = mapE.height()-y+15;
          

      var h1       = $('<h1>'+name+'</h1>'),
          p        = $('<p>'+description+'</p>'),
          arrow    = $('<div/>', {"class":"hotspot-arrows"}),
          destroy  = $('<div/>', {"class":"hotspot-destroy", 'data-id' : id}),
          edit     = $('<div/>', {"class":"hotspot-edit", 'data-id' : id}),
          div      = $('<div/>', {'id'       : 'hotspot-' + id,
                                    'data-id': id,
                                  'data-name': name,
                           'data-description': description,
                              'data-category': category,
                                     'data-x': x,
                                     'data-y': y,
                                   'data-map': map,
                     'data-special_icon_path': special_icon_path,
                                      'class': 'hotspots '+category,
                                      'style': 'bottom:' + bottom + 'px;right:' + right + 'px;' });

          div.append(h1);
          div.append(p);
          div.append(arrow);
          div.append(edit);
          div.append(destroy);

          mapE.append(div);

    },
    removeHotspot : function (id){
       $('#hotspot-'+id).remove();
    },
    deleteHotspot : function (id){
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
    },
    cleanForm : function(){
      $("#hotspot-form-name").val();
      $("#hotspot-form-description").val();
      $("#hotspot-form-category").val();
      $("#hotspot-form-special_icon_path").val();
      $("#hotspot-form-x").val();
      $("#hotspot-form-y").val();
      $("#hotspot-form-map").val();
    }
  };
}();
