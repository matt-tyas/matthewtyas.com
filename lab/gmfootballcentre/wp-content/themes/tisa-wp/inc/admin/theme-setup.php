<?php $themePath = get_bloginfo('template_url'); ?>
<div class="wrap">
<div id="adminbg">
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="blackops_action" value="save">
	<h2>BlackOps General Settings</h2>
    
    <div class="adminheader">Header Settings</div>
    <div class="admincontent">
    	<div class="singleitem">
            <div class="left">Custom Logo</div>
            <div class="right">
            	<span class="description"> Enter full url of your logo image. Leave blank if you want to use the theme's default image. <br />The default logo is 320 x 120 pixels and located in /images/header.png
                </span>
            	<span class="description">
                    <input type="text" name="logo" value="<?php echo $this->options["logo"]; ?>" class="input" size="50" />
                </span>
                
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Current Logo</div>
            <div class="right">
            	
            	<span class="description">
                    <img src="<?php if(!$this->options["logo"]) { echo $themePath.'/images/header.png'; } else { echo $this->options["logo"]; } ?>" />
                </span>    
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Navigation Menu Icons</div>
            <div class="right">
                <span class="description"> Enter URLS to link the icons. Leave Blank to remove the icon.</span>
            	<span class="description">
                    <input type="text" name="twitter" value="<?php echo $this->options["twitter"] ?>" size="50" /> Twitter<br />
    				<input type="text" name="rss" value="<?php echo $this->options["rss"] ?>" size="50" /> RSS<br />
    				<input type="text" name="heart" value="<?php echo $this->options["heart"] ?>" size="50" /> Heart<br />
    				<input type="text" name="fb"  value="<?php echo $this->options["fb"] ?>" size="50" /> Facebook<br />
                </span>
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Banner</div>
            <div class="right">
            	<span class="description"> Banner area on the Top Right corner.</span>
            	<span class="description">
                    <textarea cols="64" rows="5" name="banner" id="banner" class="input" /><?php echo $this->options["banner"] ?></textarea>
                </span>
            </div>
        </div>
    </div>
    
    <div class="adminheader">Blog Post Settings</div>
    <div class="admincontent">
    	<div class="singleitem">
            <div class="left">Social Share Icons</div>
            <div class="right">
            	<span class="description"> Please select if you would like to display Social Share Icons in Single Page View (not homepage).</span>
            	<span class="description">
                <fieldset class="radios">
                    <label class="label_radio" for="disable_singlesocial"><input type="radio" value="disable" name="singlesocial" id="disable_singlesocial" 
                    <?php if ($this->options["singlesocial"]=="disable"):?> checked="checked" <?php endif; ?> /> OFF</label> 
                    <label class="label_radio" for="enable_singlesocial"><input type="radio" value="enable" name="singlesocial" id="enable_singlesocial" 
                    <?php if ($this->options["singlesocial"]=="enable" || $this->options["singlesocial"]== ""):?> checked="checked" <?php endif; ?>/> ON</label> 
                </fieldset>
                </span>
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Related Posts</div>
            <div class="right">
            	<span class="description"> Please select if you would like to display Related Posts before Comments.</span>
            	<span class="description">
                <fieldset class="radios">
                    <label class="label_radio" for="disable_rel"><input type="radio" value="disable" name="rel" id="disable_rel" 
                    <?php if ($this->options["rel"]=="disable"):?> checked="checked" <?php endif; ?> /> OFF</label>  
                    <label class="label_radio" for="enable_rel"><input type="radio" value="enable" name="rel" id="enable_rel" 
                    <?php if ($this->options["rel"]=="enable" || $this->options["rel"]== ""):?> checked="checked" <?php endif; ?>/> ON</label>
                </fieldset>
                </span>
            </div>
        </div>
    </div>
    
    <div class="adminheader">Footer Settings</div>
    <div class="admincontent">
        <div class="singleitem">
                <div class="left">Footer Sidebar</div>
                <div class="right">
                	<span class="description"> This option will display the Footer Sidebar, the dark grey area with widgets.</span>
                    <span class="description">
                    <fieldset class="radios">
                        <label class="label_radio" for="disable_footer"><input type="radio" value="disable" name="footer" id="disable_footer" 
                        <?php if ($this->options["footer"]=="disable"):?> checked="checked" <?php endif; ?> /> OFF</label>
                        <label class="label_radio" for="enable_footer"><input type="radio" value="enable" name="footer" id="enable_footer" 
                        <?php if ($this->options["footer"]=="enable" || $this->options["footer"]== ""):?> checked="checked" <?php endif; ?>/> ON</label>
                    </fieldset>
                    </span>
                </div>
            </div>
        <div class="singleitem">
            <div class="left">Copyright Text</div>
            <div class="right">
            	<span class="description">
                    <input type="text" name="copyright" value="<?php echo $this->options["copyright"]; ?>" class="input" size="50" />
                </span>
                <br />
                <span class="description"> Please enter your Company name or desired text to display at the bottom left of your blog.   
                </span>
            </div>
        </div>
        <div class="singleitem">
            <div class="left">Google Analytics</div>
            <div class="right">
            	<span class="description">
                    <textarea cols="64" rows="5" name="google_analytics" id="google_analytics" class="input" /><?php echo $this->options["google_analytics"] ?></textarea>
                </span>
                <br />
                <span class="description"> Please copy &amp; paste your Google Analytics code to track your blog's traffic.   
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