jQuery(document).ready(function($) {
	
	$('button.hamburger').click(function() {
		 $(this).toggleClass('is-active');
	});	
	
	$('.navbar-margin').css({'margin-top': $('.navbar.fixed-top').innerHeight()});  
	
	
	var $container = $('.masonry');
	$container.imagesLoaded( function() { 
		 $container.masonry({
		 	itemSelector: '.item',
			isAnimated: true,
			  animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			  }
			
		  });
	});
	
	/* smooth scroll */
	$('a[href*="#"]:not([href="#"])').click(function(event) { 
		event.preventDefault();
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) { var target = $(this.hash); target = target.length ? target : $('[name=' + this.hash.slice(1) +']'); if (target.length) { $('html, body').animate({ scrollTop: target.offset().top -64 }, 800); return false; } } 
	});
	
	
	
	setTimeout(function(){
		$('.wpcf7-response-output').slideUp(500);
	}, 8000);

	
  
	
	 
});

