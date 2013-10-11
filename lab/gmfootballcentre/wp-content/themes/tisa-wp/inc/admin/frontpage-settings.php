<?php $themePath = get_bloginfo('template_url'); ?>
<div class="wrap">
<div id="adminbg">
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="blackops_action" value="save3">
	<h2>BlackOps Frontpage Settings</h2>
    
    <div class="adminheader">Slider Settings</div>
    <div class="admincontent">
    	<div class="singleitem">
            <div class="left">Auto Advance</div>
            <div class="right">
            	<span class="description"> Select if you want the front page slider to auto advance</span>
            	<span class="description">
                <fieldset class="radios">
                    <label class="label_radio" for="disable_auto"><input type="radio" value="true" name="auto" id="disable_auto" 
                    <?php if ($this->options["auto"]=="true"):?> checked="checked" <?php endif; ?> /> OFF</label> 
                    <label class="label_radio" for="enable_auto"><input type="radio" value="false" name="auto" id="enable_auto" 
                    <?php if ($this->options["auto"]=="false" || $this->options["auto"]== ""):?> checked="checked" <?php endif; ?>/> ON</label> 
                </fieldset>
                </span>
                
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Transition Speed</div>
            <div class="right">
            	<span class="description"> Enter transition time for slider in milliseconds. (1 second = 1000 milliseconds) Default is 500.</span><br />
  
                <span class="description">
                <input type="text" name="sliderspeed" value="<?php echo $this->options["sliderspeed"]; ?>" class="input" size="50" /> 
                </span>
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Image Slider Links</div>
            <div class="right">
                <span class="description"> Number of Posts in the Slider?</span><br />
            	<span class="description">
                <input type="text" name="slidercount" value="<?php echo $this->options["slidercount"]; ?>" class="input" size="50" /> 
                </span>
            </div>
        </div>
    </div>
 	
    <div class="adminheader">Teaser Text</div>
    <div class="admincontent">
    	<div class="singleitem">
            <div class="left">Enter Text</div>
            <div class="right">
            	<span class="description"> Enter text here to display a teaser text below the slider.</span><br />
            	<span class="description">
                	<input type="text" name="teaser" value="<?php echo $this->options["teaser"]; ?>" class="input" size="50" /> 
                </span>
                
            </div>
        </div>
    </div>
    <p class="submit"><input type="submit" class="button-primary autowidth" value="Save Changes" /></p>
</form>
</div>
</div>
<script>
    var d = document;
    var safari = (navigator.userAgent.toLowerCase().indexOf('safari') != -1) ? true : false;
    var gebtn = function(parEl,child) { return parEl.getElementsByTagName(child); };
    onload = function() {
        
        var body = gebtn(d,'body')[0];
        body.className = body.className && body.className != '' ? body.className + ' has-js' : 'has-js';
        
        if (!d.getElementById || !d.createTextNode) return;
        var ls = gebtn(d,'label');
        for (var i = 0; i < ls.length; i++) {
            var l = ls[i];
            if (l.className.indexOf('label_') == -1) continue;
            var inp = gebtn(l,'input')[0];
            if (l.className == 'label_check') {
                l.className = (safari && inp.checked == true || inp.checked) ? 'label_check c_on' : 'label_check c_off';
                l.onclick = check_it;
            };
            if (l.className == 'label_radio') {
                l.className = (safari && inp.checked == true || inp.checked) ? 'label_radio r_on' : 'label_radio r_off';
                l.onclick = turn_radio;
            };
        };
    };
    var check_it = function() {
        var inp = gebtn(this,'input')[0];
        if (this.className == 'label_check c_off' || (!safari && inp.checked)) {
            this.className = 'label_check c_on';
            if (safari) inp.click();
        } else {
            this.className = 'label_check c_off';
            if (safari) inp.click();
        };
    };
    var turn_radio = function() {
        var inp = gebtn(this,'input')[0];
        if (this.className == 'label_radio r_off' || inp.checked) {
            var ls = gebtn(this.parentNode,'label');
            for (var i = 0; i < ls.length; i++) {
                var l = ls[i];
                if (l.className.indexOf('label_radio') == -1)  continue;
                l.className = 'label_radio r_off';
            };
            this.className = 'label_radio r_on';
            if (safari) inp.click();
        } else {
            this.className = 'label_radio r_off';
            if (safari) inp.click();
        };
    };
</script>