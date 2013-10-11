$(document).ready(function() {

		$("#logo-fittext").fitText(0.8, { minFontSize: 10, maxFontSize: '75px' });
		
		$.fn.slideFadeToggle  = function(speed, easing, callback) {
        return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
};

		$("#menu-toggle").click(function() {
			$(".nav-menu").slideFadeToggle();
			$(this).toggleClass("open");
			return false;
		});
	
		/*var audioplayer = document.getElementById("player");
		$("#play-btn").click(function(){
	    if (audioplayer.paused) {
	       audioplayer.play();
	    }   
	    else {
	       audioplayer.pause();
	    }
	    $(this).toggleClass('pause'); 	    
	    if (Modernizr.touch) {
	    		$(this).text("Your text here");
                $(this).text($(this).text() == 'AUDIO ON' ? 'AUDIO OFF' : 'AUDIO ON');
            } else {
            	$(this).text("Your text here");
                $(this).text($(this).text() == 'AUDIO OFF' ? 'AUDIO ON' : 'AUDIO OFF');
            }
	    
	    return false;
	    })*/
    
});