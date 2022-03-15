// Add your custom JS here.

// Add your custom JS here.


jQuery(function($){
	
  // Smooth anchor scrolling
	$('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top -140
	    }, 1000);
	    return false;
	});
	
});