$(document).ready(function(){ 
	$('ul.menu').supersubs({ 
			minWidth:    12,
			maxWidth:    27, 
			extraWidth:  1     
		}).superfish({ speed: 'normal', delay: 0, animation: {opacity:'show',height:'show'}});
	
	Cufon.replace('.posttext h1, h2, h3, .posttext h4, .posttext h5, .posttext h6, ul#menu-navigation>li>a, #teasertext', {
		hover: true,
		align: 'left',
		textShadow: '1px 1px #fff'
	});
	Cufon.replace('ul#menu-navigation ul a', {
		hover: true
	});
	$('a[href$="top"]').click( function() {
		$.scrollTo( $('#header'), {speed:1000} );
	});
	
	$("#fullwidth a[rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'facebook',slideshow:5000});
	
	$("div.icons a").simpletooltip();
	
	jQuery(".toggle_body").hide(); 

	jQuery("h4.toggle").toggle(function(){
		jQuery(this).addClass("toggle_active");
		}, function () {
		jQuery(this).removeClass("toggle_active");
	});
	
	jQuery("h4.toggle").click(function(){
		jQuery(this).next(".toggle_body").slideToggle();

	});

});
/**
*
*	simpleTooltip jQuery plugin, by Marius ILIE
*	visit http://dev.mariusilie.net for details
*
**/
(function($){ $.fn.simpletooltip = function(){
	return this.each(function() {
		var text = $(this).attr("title");
		$(this).attr("title", "");
		if(text != undefined) {
			$(this).hover(function(e){
				var tipX = e.pageX + 12;
				var tipY = e.pageY + 12;
				$(this).attr("title", ""); 
				$("body").append("<div id='simpleTooltip' style='position:absolute; z-index: 100; display: none;'>" + text + "</div>");
				if($.browser.msie) var tipWidth = $("#simpleTooltip").outerWidth(true)
				else var tipWidth = $("#simpleTooltip").width()
				$("#simpleTooltip").width(tipWidth);
				$("#simpleTooltip").css("left", tipX).css("top", tipY).fadeIn("medium");
			}, function(){
				$("#simpleTooltip").remove();
				$(this).attr("title", text);
			});
			$(this).mousemove(function(e){
				var tipX = e.pageX - 0;
				var tipY = e.pageY - 40;
				var tipWidth = $("#simpleTooltip").outerWidth(true);
				var tipHeight = $("#simpleTooltip").outerHeight(true);
				if(tipX + tipWidth > $(window).scrollLeft() + $(window).width()) tipX = e.pageX - tipWidth;
				if($(window).height()+$(window).scrollTop() < tipY + tipHeight) tipY = e.pageY - tipHeight;
				$("#simpleTooltip").css("left", tipX).css("top", tipY).fadeIn("medium");
			});
		}
	});
}})(jQuery);