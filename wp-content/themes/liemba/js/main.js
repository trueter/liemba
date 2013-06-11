

$(document).ready(function(){

	$('html').click(function(e){
		console.log(e.target);
	});

  var mainNavItems = $('nav').find('.menu  > ul > li.page-item');

	if (document.width < 1024) {

    $.each(mainNavItems, function(){

    var a = $("<div class='nav-mobile-anchor'></div>");
    a.click(function(){
      var that = $(this);
      if( that.parents("li").hasClass("expanded") ){
        that.parents("li").removeClass("expanded");
      }else{
        that.parents("li").addClass("expanded");
      }
    });

    $(this).append(a);


    });

  }else{
		var imageSources = ["http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-002.jpg", 
							"http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-052.jpg",
							"http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-063.jpg"];
		randomizeArray(imageSources)
		$.backstretch(imageSources, {duration: 5000, fade: 1000});	
	
    $.each(mainNavItems, function(){
      $(this).mouseenter(function(){
        mainNavItems.removeClass("hover");
        $(this).addClass("hover");
      }).mouseleave(function(){
        $(this).removeClass("hover");
      });
    });

  }

  
  



});

function randomizeArray(myArray) {
  var i = myArray.length, j, temp;
  if ( i === 0 ) return false;
  while ( --i ) {
     j = Math.floor( Math.random() * ( i + 1 ) );
     temp = myArray[i];
     myArray[i] = myArray[j]; 
     myArray[j] = temp;
   }
}