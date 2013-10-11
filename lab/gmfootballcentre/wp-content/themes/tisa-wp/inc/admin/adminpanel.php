<?php 
require_once('../../../../../wp-config.php');  
        $wp->init();  
        $wp->parse_request();  
        $wp->query_posts();  
        $wp->register_globals(); 
header("Content-type: text/css");
?>
<?php echo "
#adminbg {
	background: #dadfe5;
	float: left;
	padding: 30px 40px;
	width: 818px;
	border: 1px solid #999;
	margin: 20px 0px;
	border-radius: 5px;
	-moz-border-radius:  5px;
	-webkit-border-radius: 5px;
}
#adminbg h2 {
	color: #222;
	font-size: 32px;
	font-family: Verdana;
	font-style: normal;
	padding: 0px;
	margin: 0px 0px 30px 0px;
}
#adminbg .adminheader {
	background: #666 url(images/headerbg.png) top left repeat-x;
	height: 29px;
	width: 798px;
	float: left;
	font-size: 14px;
	border-top: 1px solid #404040;
	border-left: 1px solid #404040;
	border-right: 1px solid #404040;
	padding: 10px 0px 0px 10px;
	color: #fff;
	text-shadow:#111 1px 1px 0px;
	font-weight: bold;
	border-top-right-radius: 5px;
	-moz-border-radius-topright:  5px;
	-webkit-border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	-moz-border-radius-topleft: 5px;
	-webkit-border-top-left-radius:  5px;
}
#adminbg .admincontent {
	float: left;
	width: 808px;
	background: #7c7d82;
	border-bottom: 1px solid #404040;
	border-left: 1px solid #404040;
	border-right: 1px solid #404040;
	border-top-right-radius: 5px;
	-moz-border-radius-bottomright:  5px;
	-webkit-border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius:  5px;
	margin-bottom: 20px;
}
#adminbg .singleitem {
	float: left;
	width: 808px;
}
#adminbg .left {
	float: left;
	width: 180px;
	padding: 20px 10px;
	color: #f2f2f2;
	font-weight: bold;
	text-shadow:#111 1px 1px 0px;
	border-top: 1px solid #404040;
}
#adminbg .right {
	float: left;
	width: 578px;
	padding: 20px 10px 20px 20px;
	background: #c2c6cc;
	color: #222;
	font-weight: bold;
	border-top: 1px solid #404040;
}
#adminbg .right img {
	float: left;
}
#adminbg .right span.description {
	color: #222;
}
#adminbg .right input {
	background: #b6babf url(images/alert-overlay.png);
	border: 1px solid #919499;
	padding: 7px;
	margin: 5px 0px;
	color: #333;
}
#adminbg .right textarea {
	background: #b6babf;
	border: 1px solid #919499;
	padding: 7px;
	margin: 5px 0px;
	color: #333;
}
#adminbg .right input:focus, .right textarea:focus {
	border: 1px solid #fff;
}
.has-js label { display: block; float: left; padding-right: 20px; font-weight: bold; font-style: normal; margin: 10px 0px; }
.has-js .label_check,
.has-js .label_radio    { padding-left: 34px; }
.has-js .label_radio    { background: url(images/radio-off.png) no-repeat; height: 31px; }
.has-js .label_check    { background: url(images/check-off.png) no-repeat; }
.has-js label.c_on      { background: url(images/check-on.png) no-repeat;  }
.has-js label.r_on      { background: url(images/radio-on.png) no-repeat; height: 31px;}
.has-js .label_check input,
.has-js .label_radio input  { position: absolute; left: -9999px; }

" ?>