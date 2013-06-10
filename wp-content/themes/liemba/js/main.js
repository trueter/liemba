

$(document).ready(function(){

	$('html').click(function(e){
		console.log(e.target);
	});

	if (screen.width >= 1024) {
		$.backstretch([
	    	"http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-002.jpg",
	    	"http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-052.jpg",
	    	"http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-063.jpg"
  		], {duration: 5000, fade: 1000});	
	}
	


    var mainNavItems = $('nav').find('.menu  > ul > li.page_item');
    

    $.each(mainNavItems, function(){
    	$(this).mouseenter(function(){
    		mainNavItems.removeClass("hover");
    		$(this).addClass("hover");
    	}).mouseleave(function(){
    		$(this).removeClass("hover");
    	});
   	});

});