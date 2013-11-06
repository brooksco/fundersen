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

		$(this).find(".commercial-text").css("opacity", "1");
		$(this).off();

	},

	function() {

		$(this).find(".commercial-text").css("opacity", "0");

	});


}); // End ready