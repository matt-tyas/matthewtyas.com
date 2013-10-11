$(function() {	
	$('#contact-tab').toggle(function() {
		$(this).parent().animate({left:'0px'}, {queue:false, duration: 500}); // Slide it out
		$('#overlay').fadeIn('fast'); // fade in the overlay
		$('#contact-tab a').addClass("active"); // add the active class to the link
		return false; // remove the default link behaviour
	}, function() {
		$(this).parent().animate({left:'-300px'}, {queue:false, duration: 500}); // Slide it back in
		$('#overlay').fadeOut('fast'); // fade out the overlay
		$('#contact-tab a').removeClass("active"); // remove active class
		return false; // remove the default link behaviour
	});
});