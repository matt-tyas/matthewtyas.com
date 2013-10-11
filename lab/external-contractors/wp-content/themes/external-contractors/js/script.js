$(document).ready(function(){

	/* Sliding panel functionality
	------------------------------ */
	$('.accordion__target').next().hide();
	$('.accordion__target').click(function() {
		$(this).toggleClass('is-pressed');
		$(this).next().slideToggle('normal');
		return false;
	});
	
});