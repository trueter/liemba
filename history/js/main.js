// Executed on document.ready event
$(function() {

	$(document).scroll(function(){	
		var doc = document.documentElement, body = document.body;
		var top = (doc && doc.scrollTop  || body && body.scrollTop  || 0);
		$('#offsetHelper').html(top);
	});

	// Used to center elements
/*
	var nav = $('#skollr-menu-wrapper');
	var x = -1*(nav.outerWidth() / 2);
	nav.css("margin-left", x);
*/
	var circle = $('#instruction-circle');
	var x = -1*(circle.outerWidth() / 2);
	circle.css("margin-left", x);
	
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
    animate: true, //skrollr will smoothly animate to the new position using `animateTo`.
    duration: 500, //How long the animation should take in ms.
    easing: 'sqrt' //The easing function to use.
});

// used in skrollr.stylesheets.js to keep skrollr data attributes clean
String.prototype.killWhiteSpace = function() {
    return this.replace(/\s/g, '');
};