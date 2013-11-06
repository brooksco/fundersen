// @codekit-prepend "jquery-1.10.2.js"
// @codekit-prepend "enquire.js"
// @codekit-prepend "flowtype.js"

// Once the page has loaded...
$(document).ready(function() {


	$('#name').flowtype({
		// minimum   : 500,
	 	// maximum   : 400,
		// minFont   : 12,
		maxFont   : 50,
		fontRatio : 6.5,
		// lineRatio : 1.45
	});


	$(".commercial").hover(function() {
			$(this).off();

			$(this).css("display", "table");
			$(this).find(".commercial-text").css({
				"display" : "table-cell",
				"background-color" : "rgba(255, 255, 255, .85)"
			}).hide().fadeIn(400);

			// },

			// function() {
				
			// 	$(this).find(".commercial-text").fadeOut(400, function() {

			// 		$(this).css("display", "none");
			// 		$(this).parent().css("display", "block");

			// 	});
				
			});


}); // End ready