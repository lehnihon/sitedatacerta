( function( $ ) {

	$(function() {

	    $('.contador').bind('oanimationend animationend webkitAnimationEnd', function() { 
			$('.counter').counterUp( {delay: 10, time: 2000 }).removeClass('counter');
		});

	});

} )( jQuery );