$(document).ready(function(){$("#logo-fittext").fitText(.8,{minFontSize:10,maxFontSize:"75px"});$.fn.slideFadeToggle=function(e,t,n){return this.animate({opacity:"toggle",height:"toggle"},e,t,n)};$("#menu-toggle").click(function(){$(".nav-menu").slideFadeToggle();$(this).toggleClass("open")})});