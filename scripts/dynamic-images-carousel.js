/* global jQuery */

jQuery( document ).ready( function( $ ) {
	'use strict';
	console.log( 'carousel' );

	function init( ctx ) {
		$( $( ctx ).children()[0] ).addClass( 'active' ); // The first child of this carousel is active.
		var period = $( ctx ).attr( 'data-period' ) || 3000;

		setTimeout( function() {
			rotate( ctx, period );
		}, period );
	}

	function rotate( ctx, period ) {
		console.log( 'rotating' );
		var current = $( ctx ).children( '.active' );
		var next = current.next();

		if( next.length === 0 ) {
			next = $( ctx ).children( ':first-child' );
		}

		current.toggleClass( 'active' );
		next.toggleClass( 'active' );

		setTimeout( function() {
			rotate( ctx, period );
		}, period );
	}

	$( '.dynamicImagesCarousel' ).each( function() {
		init( this ); // Set up the carousel and start rotating images.
	});
});
