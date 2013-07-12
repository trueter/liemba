var currentOffset;
// Executed on document.ready event
$(function() {

	$(document).scroll(function(){
		var doc = document.documentElement, body = document.body;
		currentOffset = (doc && doc.scrollTop  || body && body.scrollTop  || 0);
		$('#offsetHelper').html(currentOffset);
	});

	$('#infobox_icon').click(function(){
		displayInfobox( parseInt(Math.round(currentOffset/1000)) );
	});

});

$(window).resize(function() {
	// $('#scenes-wrapper').css('height', window.innerHeight+'px');
});

// initialize skrollr
var s = skrollr.init({
	edgeStrategy: 'set',
	/*easing: {
		WTF: Math.random,
		inverted: function(p) {
			return 1-p;
		}
	}*/
}); 
// & menu
skrollr.menu.init(s, {
    animate: true,//skrollr will smoothly animate to the new position using `animateTo`.
    duration: 500,//How long the animation should take in ms.
    easing: 'sqrt'//The easing function to use.
});

// used in skrollr.stylesheets.js to keep skrollr data attributes clean
String.prototype.killWhiteSpace = function() {
    return this.replace(/\s/g, '');
};


function displayInfobox(n){
	console.log("display infobox");
	var infobox = $('#infobox');
	var overlay = $('#overlay');
	var closebutton = $('<div id="infobox_close">zurück</div>').click(function(){hideInfobox();});

	infobox.html($('#historyText-'+n).html()).append(closebutton);
	overlay.show();
}

function hideInfobox(n){
	console.log("hide infobox");
	var overlay = $('#overlay');
	overlay.hide();
}
