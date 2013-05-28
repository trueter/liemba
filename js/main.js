$(function() {

		$(document).scroll(function(){
		
		var doc = document.documentElement, body = document.body;
		var top = (doc && doc.scrollTop  || body && body.scrollTop  || 0);

		$('#offsetHelper').html(top);
	});
});

var s = skrollr.init({
	edgeStrategy: 'set',
	/*easing: {
		WTF: Math.random,
		inverted: function(p) {
			return 1-p;
		}
	}*/
});


skrollr.menu.init(s, {
    animate: true, //skrollr will smoothly animate to the new position using `animateTo`.
    duration: 500, //How long the animation should take in ms.
    easing: 'sqrt' //The easing function to use.
});