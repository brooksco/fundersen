// @codekit-prepend "jquery-1.10.2.js"
// @codekit-prepend "enquire.js"

// Once the page has loaded...
$(document).ready(function() {

	enquire.register("screen and (max-width:600px)", {

    // OPTIONAL
    // If supplied, triggered when a media query matches.
    match : function() {
    	$('#social-navbar').prependTo('#footer');

    },      
                                
    // OPTIONAL
    // If supplied, triggered when the media query transitions 
    // *from a matched state to an unmatched state*.
    unmatch : function() {
    	$('#social-navbar').insertAfter('#outer-navbar');
    },    
    
      
});


}); // End ready