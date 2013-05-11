window.htw = {};
window.htw.interactiveMap = {

	hotspots: {},
	map : null,

	init : function (_hotspots){
		map = $('#map-wrapper');

		var currentHotspot
		$(_hotspots).each(function (){
			var currentHotspot = $(this)[0];
			var id = currentHotspot.id;
			var name = currentHotspot.name;
			var left = currentHotspot.xOff;
			var top = currentHotspot.yOff;

			var e = $('<div/>', {'class': 'map-hotspot-anchor',
										  'id' : 'hotspot-'+id,
										  'style': 'top:'+top+'px;left:'+left+'px',
										  'data-id' : id,
										  'data-name' : name});

			map.append(e);


		});
	},
	addHotspot : function (_formdata) {
		
		$.post('./rest/hotspots', _formdata ).success(function(feedback){

		var hotspot = JSON.parse(feedback)[0];
		var id = hotspot.id;
		var name = hotspot.name;
		var top = hotspot.yOff;
		var left = hotspot.xOff;

		
		var e = $('<div/>', {'class': 'map-hotspot-anchor',
									  'id' : 'hotspot-'+id,
									  'style': 'top:'+top+'px;left:'+left+'px',
									  'data-id' : id,
									  'data-name' : name});

		map.append(e);

		}).fail(function(){
			console.log("addHotspot:fail");
		}).always(function(){
			console.log("addHotspot:always");
		});
	},
	removeHotspot : function (id){
		$.ajax('./rest/hotspots/'+id, {type: 'DELETE'}).success(function(feedback){

			$('#hotspot-'+id).remove();

		}).fail(function(){
			console.log("removeHotspot:fail");
		}).always(function(){
			console.log("removeHotspot:always");
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
		htw.interactiveMap.init(JSON.parse(response));
	}).fail(function(){
		console.log("initial request failed");
	});

	// Init Events
	$('#add-hotspot-form').submit(function(){
		htw.interactiveMap.addHotspot($(this).serialize());
		return false;
	});


});