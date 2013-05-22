"use strict";

$(function(){

	    var options = {
	        autoPlay: false,
	        nextButton: true,
	        prevButton: true,
	        preloader: true,
	        navigationSkip: false,
	        cycle: true
	    };
	    var sequence = $("#sequence").sequence(options).data("sequence");

	    sequence.afterLoaded = function(){
	        $(".sequence-prev, .sequence-next").fadeIn(500);
	    }

});

/*

var module = angular.module('HistoryApp', [])
	.directive('repeatDone', function() {
		return function(scope, element, attrs) {
	        if (scope.$last) { // all are rendered
	            scope.$eval(attrs.repeatDone);
	        }
	    }
	});

*/