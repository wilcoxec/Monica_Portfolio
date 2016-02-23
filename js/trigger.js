$( document ).ready(function() {
    // Create a new jQuery.Event object with specified event properties.
	var e = jQuery.Event( "keydown", { keyCode: 37 } );
	 
	// trigger an artificial keydown event with keyCode 64
	jQuery( "body" ).trigger( e );
});