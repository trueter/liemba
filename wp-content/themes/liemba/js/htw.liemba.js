var htw = {};

htw.liemba = {
	organisationID : 125,
	production : true,

	init : function(){

		// init main navigation hover effect
		var mainNavItems = $('nav').find('.menu  > ul > li.page_item');
		$.each(mainNavItems, function(){
		  $(this).click(function(e){
		   	
		   	if(!$(this).hasClass("hover")) return false;
		   	
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
	if( htw.liemba.production ){

	// init backstretch
	var imageSources = ["http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-002.jpg", "http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-052.jpg", "http://studi.f4.htw-berlin.de/~s0535063/liemba/wp-content/themes/liemba/img/backgrounds/Tansania-Liemba-063.jpg"];
	$.backstretch(htw.liemba.helpers.randomizeArray(imageSources), {duration: 5000, fade: 1000});		

	// init donation sum
	var d = $("#donation-sum");
	var totalRequested = 0;
	var totalDonated = 0;
	var totalOpen = 0;
	
	$.get("https://api.betterplace.org/en/api_v4/organisations/125/projects.json", function(feedback){
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
	}

	setTimeout(function(){
		console.log("Done parsing needs.")
		console.log("Total Req: " + totalRequested/100 + " €");
		console.log("Total Don: " + totalDonated/100 + " €");
		console.log("Total   O: " + totalOpen/100 + " €");

	}, 5000);
	
	

	

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

