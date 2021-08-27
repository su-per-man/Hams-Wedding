var $ = jQuery.noConflict();
$(document).ready(function() {
   "use strict";

  $(".animsition").animsition({
    inClass: 'fade-in-down-sm',
    outClass: 'fade-out-up-sm',
	linkElement: '.fade-page'
  });
  
  $( '.swipebox' ).swipebox();
  
   
  $('#defaultCountdown').countdown({until: new Date(2018, 9 - 1, 15, 21), format: 'y-o-d-h'});						   

	$("#weddingcarousel").owlCarousel({
	items : 4,
	itemsScaleUp : true,
	theme : "owl-themecarousel"
	});
  
  
});