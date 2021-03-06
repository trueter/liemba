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

		
	// init donation sum
		var d = $("#donation-sum");
		var totalRequested = 0;
		var totalDonated = 0;
		var totalOpen = 0;
		
		$.get("https://api.betterplace.org/en/api_v4/organisations/"+htw.liemba.organisationID+"/projects.json", function(feedback){
			// console.log("calling:");

			var projects = feedback.data;


			$(projects).each(function(){

				// console.log("Parsing project " + this.title);
				var projectID = this.id;

				$.get("https://api.betterplace.org/en/api_v4/projects/"+projectID+"/needs.json" ,function(feedback){
					var needs = feedback.data;

					$(needs).each(function(){
						var need = this;
						// console.log("Parsed need "+need.title);
						totalRequested += need.requested_amount_in_cents;
						totalDonated += need.donated_amount_in_cents;
						totalOpen += need.open_amount_in_cents;
					});
				});
			});
			
		});
		

	$(document).ajaxStop(function() {
	  htw.liemba.percentDonated = totalDonated/totalRequested*100;
	});



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

