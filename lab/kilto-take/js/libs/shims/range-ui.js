(function(e){"use strict";var t=0,n={_create:function(){t++,this.id="range"+t,this.thumb=e('<span class="ws-range-thumb" />'),this.element.addClass("ws-range").html(this.thumb),this.updateMetrics(),this.addDrag()},addDrag:function(){var t=this,n=this.options,r=function(){e(document).off("mousemove",i)},i=function(e){var n=o+e.pageX-s;n<0&&o>0?n=0:n>t.maxLeft&&o<t.maxLeft&&(n=t.maxLeft),n>=0&&n<=t.maxLeft&&(s=e.pageX,o=n,t.thumb.css({left:o}))},s,o;this.thumb.on({mousedown:function(u){!n.readOnly&&!n.disabled&&(s=u.pageX,o=parseFloat(t.thumb.css("left"),10),e(document).on({mouseup:r,mousemove:i}))}})},updateMetrics:function(){this.rangeWidth=this.element.innerWidth(),this.thumbWidth=this.thumb.outerWidth(),this.maxLeft=this.rangeWidth-this.thumbWidth}};e.fn.rangeUI=function(t){return this.each(function(){e.webshims.objectCreate(n,{element:{value:e(this)}},t||{})})},console.log("range-ui")})(jQuery);