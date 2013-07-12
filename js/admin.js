$(function() {
  
//// Bind Hotspot Create Form

  $('#hotspot-form').submit(function(){
    var hsid = $(this).data("hotspot-id");

    if( hsid  === "new"){
      if (htw.interactiveMap.createHotspot($(this).serialize())){
        $('#hotspot-prepare-dialog').fadeOut(0);
      }
    }else{
      if (htw.interactiveMap.updateHotspot(hsid , $(this).serialize())){
        $('#hotspot-prepare-dialog').fadeOut(0);
      }
    }
    
    return false;
  });

// Bind Contentmenu

  $('.map').on("contextmenu", function(e){
    
      var target = $(e.target);

      if( e.button !== 2 ) return false;
      
      if( !target.hasClass("map")){
              return false;
      }
      $('#hotspot-prepare-dialog').fadeOut(0);


      var x = Math.round(e.pageX - target.offset().left),
          y = Math.round(e.pageY - target.offset().top);

      $('#hotspot-confirm-dialog').css({
        "top":e.pageY,
        "left":e.pageX,
      }).fadeIn(200);

      $('#hotspot-prepare-dialog').css({
        
        "top":e.pageY,
        "left":e.pageX,
      });

      htw.interactiveMap.cleanForm();
      $('#hotspot-form-x').val(x);
      $('#hotspot-form-y').val(y);
      $('#hotspot-form-map').val(e.target.id);
      return false;

  });

  $('#hotspot-confirm-dialog-cancel').click(function(){
    $('#hotspot-confirm-dialog').fadeOut(50);
  });

  $('#hotspot-confirm-dialog-create').click(function(){
    htw.interactiveMap.prepareHotspot();
  });

  $('#hotspot-prepare-dialog-close').click(function(){
    $('#hotspot-prepare-dialog').fadeOut(50);
  });

//// Hotspot destroy

   $("#map-wrapper").on( "click", ".hotspot-destroy", function(){

     htw.interactiveMap.deleteHotspot($(this).data("id"));

   });

//// Hotspot edit

   $("#map-wrapper").on( "click", ".hotspot-edit", function(e){

    var id = $(this).parent().data("id");
    htw.interactiveMap.editHotspot(id,e);

   });
});