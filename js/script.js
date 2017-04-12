jQuery(document).ready(function($) {
	
	$('button.hamburger').click(function() {
		 $(this).toggleClass('is-active');
	});	
	
	$('.navbar-margin').css({'margin-top': $('.navbar.fixed-top').innerHeight()});  
	
	$(".header").headroom();
  
	var $container = $('.masonry');
	$container.imagesLoaded( function() { 
		 $container.masonry({
		 	itemSelector: '.item'
		  });
	});
  
  // refresh after each img if using lazyloading
  $container.each(function(){
    var $module = $(this);

    var update = (function(){
        $module.masonry('layout');
        //return true;
    });

    this.addEventListener('load', update, true);   
  });
  
  
	/* smooth scroll */
	$('a[href*="#"]:not([href="#"])').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash;
	    var $target = $(target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
	
	
	setTimeout(function(){
		$('.wpcf7-response-output').slideUp(500);
	}, 8000);

	
	 
});

