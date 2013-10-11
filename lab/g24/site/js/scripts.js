$(document).ready(function () {

	    $('#form').submit(function(e){
	
	        // Stop the form actually posting
	        e.preventDefault();
	
	        // Send the request
	        $.post('/lab/g24/site/contact.php', {
	            name: $('#name').val(),
	            email: $('#email').val(),
	            telephone: $('#telephone').val(),
	            employees: $('#employees').val()
	        }, function(d){
	            // Here we handle the response from the script
	            $('#result').html(d).fadeIn(200).delay(3000).fadeOut(200);
	            });
	          });
	          
	        $('.slider').cycle({
				fx: 'fade',
				timeout: 4000
			});
          
    });