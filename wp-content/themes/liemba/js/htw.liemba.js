var htw = {};

htw.liemba = {
	organisationID : 14570,
	production : true,
	percentDonated : null,

	init : function(){

		// init main navigation hover effect
		var mainNavItems = $('nav').find('.menu  > ul > li.page_item');
		var donationButtonClass = "page-item-327";
		var donationButtonOldValue = $('.'+donationButtonClass).find("a").html();

		$.each(mainNavItems, function(){
		  $(this)
		  .mouseenter(function(){

		  	mainNavItems.removeClass("hover");
		   	$(this).addClass("hover");


		   	if( $(this).hasClass(donationButtonClass) && htw.liemba.percentDonated !== null )
		   		$(this).find("a").html(htw.liemba.percentDonated +" % !");
		   	

		   })

		  .mouseleave(function(){

		    $(this).removeClass("hover");

		    if( $(this).hasClass(donationButtonClass) && htw.liemba.percentDonated !== null )
		   		$(this).find("a").html(donationButtonOldValue);
		   	
		   });

		});

	// init backstretch
	var baseURL = "http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/backstretch/";
	var imageSources = [baseURL + "background_boat.jpg", 
						baseURL + "background_damage.jpg", 
						baseURL + "background_deck.jpg", 
						baseURL + "background_full.jpg", 
						baseURL + "background_panoramic.jpg", 
						baseURL + "background_passengers.jpg", 
						baseURL + "background_passengers2.jpg" ];
	$.backstretch(htw.liemba.helpers.randomizeArray(imageSources), {duration: 7500, fade: 750});		

	
	var d = $("#donation-sum"),
		totalRequested = 0,
		totalDonated = 0,
		totalOpen = 0;	
	$(document).ajaxStop(function() {
	  htw.liemba.percentDonated = totalDonated/totalRequested*100;
	});


	setTimeout(function(){
		/*console.log("Done parsing needs.")
		console.log("Total Req: " + totalRequested/100 + " €");
		console.log("Total Don: " + totalDonated/100 + " €");
		console.log("Total   O: " + totalOpen/100 + " €");*/
		
		
		// init spenden hover button
		
	}, 2000);
	
	

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

