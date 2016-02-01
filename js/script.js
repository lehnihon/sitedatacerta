( function( $ ) {
	$(function() {
        $(".anima-a").css('visibility','hidden');
        $(".anima-b").css('visibility','hidden');
        $(".anima-c").css('visibility','hidden');
        $(".anima-d").css('visibility','hidden');
        $(".anima-e").css('visibility','hidden');
        $(".anima-f").css('visibility','hidden');
        $(".anima-g").css('visibility','hidden');
        $(".anima-h").css('visibility','hidden');
        $(".anima-i").css('visibility','hidden');
	});


	$(window).scroll(function() {
		if ($(this).scrollTop() > 300 ) {
        	$(".anima-a").css('visibility','visible');
        	$(".anima-a").addClass('animated fadeIn');
		}

        if ($(this).scrollTop() > 600 ) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-b").css('visibility','visible');
	        	$(".anima-b").addClass('animated bounceInLeft');
	        	$(".anima-d").css('visibility','visible');
	        	$(".anima-d").addClass('animated bounceInRight');

				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-c").css('visibility','visible');
		        	$(".anima-c").addClass('animated fadeIn');
				    $('.counter').counterUp({
				        delay: 50,
				        time: 1500
				    }).removeClass('counter');			 
				}
			);

        }

        if ($(this).scrollTop() > 1300) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-e").css('visibility','visible');
	        	$(".anima-e").addClass('animated fadeIn');

				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-f").css('visibility','visible');
		        	$(".anima-f").addClass('animated fadeIn');		 
				}
			);

        }
		if ($(this).scrollTop() > 1900) {
			$(".anima-g").css('visibility','visible');
	        $(".anima-g").addClass('animated fadeIn');
		}
        if ($(this).scrollTop() > 2300) {
        	$(".anima-h").css('visibility','visible');
        	$(".anima-h").addClass('animated bounceInLeft');
        	$(".anima-i").css('visibility','visible');
        	$(".anima-i").addClass('animated bounceInRight');		 
        }

        if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
        	$(".anima-rino").addClass('animated wobble');
     	}
	});

} )( jQuery );