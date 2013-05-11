window.htw = {};
window.htw.interactiveMap = {

	hotspots: {},
	map : null,

	initMap : function(hotspots){
		map = $('#map-wrapper');

		var currentHotspot
		$(hotspots).each(function (){
			var currentHotspot = $(this)[0] 
			var left = currentHotspot.xOff;
			var top = currentHotspot.yOff;

			var e = $('<div/>', {'class': 'map-hotspot-anchor',
										  'style': 'top:'+top+'px;left:'+left+'px'});

			map.append(e);


		});
	
	}
}

$(function() {
	var response;

	$.get('./rest/hotspots', function(data) {
		response = data;
	}).success(function(){
		htw.interactiveMap.initMap(JSON.parse(response));
	}).fail(function(){
		console.log("initial request failed");
	});


});
