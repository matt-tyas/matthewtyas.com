$(document).ready(function(){

	/* Toggle navigation menu < 800
	------------------------------------ */
	$('.mobile-nav__target').click(function() {
		 $(this).toggleClass('is-pressed');
		 $(this).next().toggleClass('is-open');
		 return false;
	});

	/* Sliding panel functionality
	------------------------------ */
	$('.slider__target').next().hide();
	$('.slider__target').click(function() {
		$(this).toggleClass('is-pressed');
		$(this).next().slideToggle('normal');
		return false;
	});
	
	/* Accordion functionality
	-------------------------- */
	$('.accordion__content').hide();
	// .accordion--open to the anchor of the panel you want open, the .is-pressed class is added
	$('.accordion--open').addClass('is-pressed').next().show(); 
	$('.accordion__target').click(function(){ 
    	// If the next container is closed
    	if( $(this).next().is(':hidden') ) {     
	    	// Remove all .is-pressed classes and slide up the immediate next container
	    	$('.accordion__target').removeClass('is-pressed').next().slideUp();    
	    	// Add .is-pressed class to clicked target and slide down the immediate next container
	    	$(this).toggleClass('is-pressed').next().slideDown();   
		}
    	else if( $(this).next().is(':visible') ) {
    		// Close the container that is visible 
			$('.accordion__target').removeClass('is-pressed').next().slideUp();  
		}
	return false;    
	});
	
	/* Lightbox
  	----------- */
	$('.fancybox').fancybox();
	
	/* Tabs
	----------- */
	$("ul.nav--tabs").tabs("div.panes > div");
	
	/* Tooltip
	----------- */
	$(".tooltip__target").tooltip();

	/* Helpers
	---------- */
	$('.helpers').hide();
	$('.help__target').click(function(){
    	$('.helpers').slideToggle();
    return false; 
  	});
  	
  	/* Show alert pane
  	------------------- */
	$(".alert-hide").fadeIn();

  	/* Close alert pane
  	------------------- */
	$('.close-pane').click(function() {
		$(".alert-hide").fadeOut();
		return false;
	});
  	

  	/* THE BELOW FUNCTIONS ARE FOR DEMO IN THE PROTOTYPE
  	----------------------------------------------------
  	   Should be grouped into generic functions and rewritten when the 
  	   system is being developed
  	*/

  	// Fakes adding event to timeline
	$('#add').click(function() {
		$(this).text($(this).text() == 'Add to timeline' ? 'Cancel' : 'Add to timeline'); 
		$('#add-to-timeline').slideToggle();
		return false;
	});

	// Fakes the booking and deleting of an appointment 
	$('.book_confirm').click(function() {
    	$(this).html($(this).html() == 'Book this slot' ? 'Slot Booked <a class="delete-booking"><span class=" i  i--bin "></span>' : 'Book this slot'); 
    	return false;
    });
    
	$('.add-to-timeline__btn').click(function() {
		$('#add-to-timeline').fadeOut();
		$('#add-success').fadeIn();
		$("#add").text('Add to timeline');
		return false;
	});
	
	// Fakes adding event to timeline
	$('#export').click(function() {
		$(this).text($(this).text() == 'Export timeline' ? 'Cancel export' : 'Export timeline'); 
		$('#export-timeline').slideToggle();
		return false;
	});

	$('.export-timeline__btn').click(function() {
		$('#export-timeline').fadeOut();
		$('#export-success').fadeIn();
		$('#export-success').fadeOut(5000);
		$("#export").text('Export timeline');
		return false;
	});

	$('.add-to-timeline__btn').click(function() {
		$('#export-timeline').fadeOut();
		$('#add-success').fadeIn();
		$('#add-success').fadeOut(5000);
		$("#export").text('Export timeline');
		return false;
	});
     
	// Dropdown filter for tutor dash.
	$("#filter-select").bind("change", function() {
	    $("." + this.value).show();
	    $("div.student:not(." + this.value + ")").hide();
	});

	// Dropdown filter for timeline.
	$("#filter-select").bind("change", function() {
	    $("." + this.value).show();
	    $(".timeline__entry:not(." + this.value + ")").hide();
	});
	
/*	
 * This does not quite work properly.... 
 */
    
   	var $window = $(window);

    function checkWidth() {
    
        var windowsize = $window.width();
        
        if (windowsize < 800) {
        
        	$('.booking-toggle').click(function() {
	        	$(this).toggleClass('on');
	        	$(this).next().toggle();
	        return false;
		});   
            
        }
        
        if (windowsize > 800) {  
            
          // Booking overlay.
			$(".events a, .timeline-actions a").overlay({
				
				 // custom top position
			    top: 260,
			    
			    left: 300,
			 
			    // some mask tweaks suitable for facebox-looking dialogs
			    mask: {
			 
			    // load mask a little faster
			    loadSpeed: 200,
			 
			    }
			 
			});
  
        }
        
    }
    
    // Execute on load
    checkWidth();
    
    // Bind event listener
    $(window).resize(checkWidth);  
    
    
    
    
      
}); // End onload