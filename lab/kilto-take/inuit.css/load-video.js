$(function() {
    var BV = new $.BigVideo();
	BV.init();
	if (Modernizr.touch) {
	    BV.show('images/bg/fallback.jpg');
	    window.alert("sometext");
	} else {
	    BV.show('video/kilto-take.mp4',{ambient:true});
	}
});
/*$(function() {
    var BV = new $.BigVideo();
	BV.init();
	BV.show('video/kilto-take.mp4',{ambient:true});
});*/