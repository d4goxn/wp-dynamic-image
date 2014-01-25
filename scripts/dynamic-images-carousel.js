/* global jQuery */

jQuery( document ).ready( function( $ ) {
	'use strict';
	console.log( 'carousel' );

	function init( ctx ) {
		$( $( ctx ).children()[0] ).addClass( 'active' ); // The first child of this carousel is active.
		$( ctx ).addClass( 'active' ); // This carousel is active.

		setTimeout( function() {
			rotate( ctx );
		}, 8000 );
	}

	function rotate( ctx ) {
		console.log( 'rotating' );
		var bottom = $( $( ctx ).children().last() ).remove();
		$( ctx ).prepend( bottom );

		setTimeout( function() {
			rotate( ctx );
		}, 8000 );
	}

	$( '.dynamicImagesCarousel' ).each( function() {

		var that = this;
		function resizeCarousel() {
			// Set the height of the carousel to match it's contents.

			var height = $( that ).children( ':first' ).height();
			$( that ).height( height );
			console.log( height );
		}

		$( window ).resize( resizeCarousel ); // Resize the carousel whenever th browser window is resized.
		$( this ).children( ':first' ).load( resizeCarousel ); // Resize the carousel as soon as we know how tall the images are.
		resizeCarousel(); // Resize imediately in case the images have loaded before this function executes.

		init( this ); // Set up the carousel and start rotating images.
	});

});
