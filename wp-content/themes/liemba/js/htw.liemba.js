var htw = {};

htw.liemba = {

	init : function(){

		// init main navigation hover effect
		var mainNavItems = $('nav').find('.menu  > ul > li.page-item');
		$.each(mainNavItems, function(){
		  $(this).click(function(e){
		   	
		   	if(!$(this).hasClass("hover")) e.preventDefault();
		   	
		  	mainNavItems.removeClass("hover");
		   	$(this).addClass("hover");

		  })
		  .mouseenter(function(){

		  	mainNavItems.removeClass("hover");
		   	$(this).addClass("hover");})

		  .mouseleave(function(){

		    $(this).removeClass("hover");

		   });
		});

	// init backstretch
	var imageSources = ["http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-002.jpg", "http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-052.jpg", "http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-063.jpg"];
	$.backstretch(htw.liemba.helpers.randomizeArray(imageSources), {duration: 5000, fade: 1000});		

	},
	helpers : {
		randomizeArray : function(myArray) {
		  var i = myArray.length, j, temp;
		  if ( i === 0 ) return false;
		  while ( --i ) {
		     j = Math.floor( Math.random() * ( i + 1 ) );
		     temp = myArray[i];
		     myArray[i] = myArray[j]; 
		     myArray[j] = temp;
		   }
		   return myArray;
		}
	}
};

