<!doctype html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if lt IE 7]><html class="no-js ie6 oldie" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="cleartype" content="on">
	
	<title>Guardian 24</title>
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Mobile viewport optimized: http://t.co/dKP3o1e -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSS compiled by SASS -->
    <link href="css/screen.css" rel="stylesheet" media="screen">
        
    <!-- HTML 5 polyfil -->
    <!--[if lt IE 9]>
	<script src="js/libs/html5shiv.js"></script>
	<![endif]-->
    
    <!-- CSS selector polyfil -->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <script src="js/libs/selectivizr-min.js"></script>
    <![endif]-->
    
    <link rel="shortcut icon" href="images/icons/favicon.ico">
	
	<!-- http://t.co/y1jPVnT -->
	<link rel="canonical" href="/">
	
	<!-- Libs -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.8.1.min.js"><\/script>')</script>
	<script>
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
       });
    
    </script>
</head>

<body class="bg">
<div class="wrap">


<header role="banner">
	<h1 class="brand"><a href="index.html">Guardian 24 - Lone worker support</a></h1>
	<div class="contact-cta">
		<span>Find out more on</span>
		<span class="phone">02890 466 460</span>
		<span>or complete the form below</span>
	</div>
</header><!-- header -->

<div role="main">

	<section class="masthead cf">
	
		<div class="slider">
			
			<img src="images/slider/image1.jpg" />
			
		</div>
		
		<div class="mobiles">
			
			<img src="images/mobiles.png" alt="mobile phone images" />
			
		</div>
		
		<div class="enquiry-form">
		
			<div id="result"></div>
			
			<form method="post" id="form" action="/lab/g24/site/contact.php">
			    <label for="name">Full name</label> 
			    <input type="text" name="name" id="name" required>
			    <label for="email">Email address</label>
			    <input type="email" name="email" id="email" required>
                <label for="telephone">Telephone</label>
			    <input type="text" name="telephone" id="telephone" required>
			    <label for="No-of-lone-worker-employees">No. of lone worker employees</label>
			    <select name="No-of-lone-worker-employees" id="employees">
			        <option value="1">- please select -</option>
			        <option value="1">1</option>
			        <option value="2">2</option>
			        <option value="3">3</option>
			        <option value="4">4</option>
			        <option value="5">5</option>
			        <option value="6">6</option>
			        <option value="7">7</option>
			        <option value="8">8</option>
			        <option value="9">9</option>
			        <option value="10+">10 +</option>
			    </select>
			    <input type='submit' value='Submit Form'>
			    
		   </form>
			
		</div>
		
	</section>
	
	<section class="benefits-information cf">
		
		<div class="col-25">
			<h3>How it works</h3>
			<div class="how-it-works">
			<dl>
				<dt>CHECK IN</dt>
				<dd>Lone worker logs an activity, meeting or visit with an agreed check-in time after the event.</dd>
				<dt>ALARM</dt>
				<dd>If the lone worker fails to check in on time, Guardian24 calls the user to verify their safety.</dd>
				<dt>PROTECT</dt>
				<dd>If the lone worker fails to respond, their device records live audio and emergency assistance is called.</dd>
			</dl>	
			</div>
		</div>
		
		<div class="col-25">
			<h3>Benefits for employers</h3>
			<div class="benefits">
				<ul>
					<li>Peace of mind for out of hours and lone working staff</li>
					<li>On-going support</li>
					<li>Bespoke reporting tool giving clear visibility to report on usage, add and delete users and manage your account</li>
					<li>Increase in motivation and confidence of staff</li>
					<li>Duty of care is adhered to by using Guardian24</li>
				</ul>
			</div>
		</div>
		
		<div class="col-25">
			<h3>Benefits for employees</h3>
			<div class="benefits">
				<ul>
					<li>Help with taking responsibility for your own personal safety</li>
					<li>Peace of mind whilst working</li>
					<li>Raised awareness of your risks whilst working alone</li>
					<li>Eliminates the chances of human error</li>
					<li>Confidence that when you press the panic button a robust response protocol will occur</li>
				</ul>
			</div>
		</div>
		
		<div class="col-25">
			<h3>Supported Devices</h3>
			<div class="supported">
				<iframe width="215" height="140" src="http://www.youtube.com/embed/zjrB8RuCDAc" frameborder="0" allowfullscreen></iframe>
				<img src="images/device-logos.png" alt="supported device logos" />
			</div>
		</div>
		
	</section>
	
</div><!-- main -->

<footer role="contentinfo">
	
</footer><!-- footer -->


</div><!--.wrap -->
    
    <!-- Plugins -->
    <script src="js/plugins-min.js"></script>
    
	<!-- Scripts -->
    <script src="js/scripts-min.js"></script>
    
    <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
         mathiasbynens.be/notes/async-analytics-snippet -->
    <script>
    /*
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script')); 
    */
    </script>
    
</body>
</html>