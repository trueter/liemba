window.htw = {};
window.htw.interactiveMap = {

	init : function (_hotspots){
		map = $('#map-wrapper');

		var currentHotspot
		$(_hotspots).each(function (){
			var currentHotspot = $(this)[0];
			var id = currentHotspot.id;
			var name = currentHotspot.name;
			var left = currentHotspot.xOff;
			var top = currentHotspot.yOff;

			var e = $('<div/>', {'id' : 'hotspot-'+id, 'data-id' : id, 'data-name' : name, 
								 'class': 'map-hotspot-anchor',
								 'style': 'top:'+top+'px;left:'+left+'px' });

			map.append(e);


		});
	},
	addHotspot : function (_formdata) {
		
		$.post('./rest/hotspots', _formdata ).success(function(feedback){

		var hotspot = feedback;
		var id = hotspot.id;
		var name = hotspot.name;
		var top = hotspot.yOff;
		var left = hotspot.xOff;

		
		var e = $('<div/>', {'id' : 'hotspot-'+id, 'data-id' : id, 'data-name' : name,
						  	 'class': 'map-hotspot-anchor',
						  	 'style': 'top:'+top+'px;left:'+left+'px' });

		map.append(e);

		}).fail(function(){
			console.log("addHotspot:fail");
		}).error(function (xhr, ajaxOptions, thrownError){

            alert(xhr.status);
            alert(thrownError);
       


		});
	},
	removeHotspot : function (id){
		$.ajax('./rest/hotspots/'+id, {type: 'DELETE'}).success(function(feedback){

			$('#hotspot-'+id).remove();

		}).fail(function(){
			console.log("removeHotspot:fail");
		});
	}, 
	showHotspotDetails : function (){

	}
}

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