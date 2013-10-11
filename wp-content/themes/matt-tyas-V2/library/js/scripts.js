/*
matthewtyas.com scripts file
Author: Matt Tyas
*/

// Modernizr.load loading the right scripts only if you need them
Modernizr.load([
	{
    // Let's see if we need to load selectivizr
    test : Modernizr.borderradius,
    // Modernizr.load loads selectivizr and Respond.js for IE6-8
    nope : ['libs/selectivizr-min.js']
	}
]);

/* imgsizer (flexible images for fluid sites) */
var imgSizer={Config:{imgCache:[],spacer:"/path/to/your/spacer.gif"},collate:function(aScope){var isOldIE=(document.all&&!window.opera&&!window.XDomainRequest)?1:0;if(isOldIE&&document.getElementsByTagName){var c=imgSizer;var imgCache=c.Config.imgCache;var images=(aScope&&aScope.length)?aScope:document.getElementsByTagName("img");for(var i=0;i<images.length;i++){images[i].origWidth=images[i].offsetWidth;images[i].origHeight=images[i].offsetHeight;imgCache.push(images[i]);c.ieAlpha(images[i]);images[i].style.width="100%";}
if(imgCache.length){c.resize(function(){for(var i=0;i<imgCache.length;i++){var ratio=(imgCache[i].offsetWidth/imgCache[i].origWidth);imgCache[i].style.height=(imgCache[i].origHeight*ratio)+"px";}});}}},ieAlpha:function(img){var c=imgSizer;if(img.oldSrc){img.src=img.oldSrc;}
var src=img.src;img.style.width=img.offsetWidth+"px";img.style.height=img.offsetHeight+"px";img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')"
img.oldSrc=src;img.src=c.Config.spacer;},resize:function(func){var oldonresize=window.onresize;if(typeof window.onresize!='function'){window.onresize=func;}else{window.onresize=function(){if(oldonresize){oldonresize();}
func();}}}}

// as the page loads, call these scripts
$(document).ready(function() {

// Tools toggle

$('#tools').click(function() {
	$(this).toggleClass('on');
		 $(this).next().slideToggle('normal', function() {  
	});
return false;
});

// Portfolio slider

$('.flexslider').flexslider({
    animation: "fade"
});

// Portfolio Filtering

$(function(){
// cache container
var $container = $('#portfolio-list');

// images loaded plugin - fixes the lack of height on the img elements
$container.imagesLoaded( function(){

// initialize isotope
$container.isotope({
  // options...
  resizable: false, // disable normal resizing
  // set columnWidth to a percentage of container width
  masonry: { columnWidth: $container.width() / 4 }
});

}); // end images loaded

// update columnWidth on window resize
$(window).smartresize(function(){
  $container.isotope({
    // update columnWidth to a percentage of container width
    masonry: { columnWidth: $container.width() / 4 }
  });
});

$(function(){ // set current link style
	$("#portfolio-filter > li > a").click(function(e){
	  $("#portfolio-filter > li > a").addClass("current").not(this).removeClass("current");
	  e.preventDefault();
	});
});

// filter items when filter link is clicked
$('#portfolio-filter li a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
	$("#work").find("h4 span").text($(this).attr('href').replace('#', ''));
	$("#work").find("h4 span:contains('Work')").prepend('All ');
  // return false;
});

});

// Smooth Scroll
$('#going-up').smoothScroll({
      scrollTarget: '#container'
    });

// Testimonials fader
/*
$("#testimonial > blockquote:gt(0)").hide();

setInterval(function() { 
  $('#testimonial > blockquote:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#testimonial');
},  3000);
*/

/* PIE CSS 3 */

$(function() {
    if (window.PIE) {
        $('header .nav a, header #sidebar1 ul a, #sidebar1 header ul a, a#tools, .socialmedia-buttons a, a#going-up').each(function() {
            PIE.attach(this);
        });
    }
});
	
});