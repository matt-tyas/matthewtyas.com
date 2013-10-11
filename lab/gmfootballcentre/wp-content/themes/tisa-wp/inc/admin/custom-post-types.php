<div class="wrap">
<div id="adminbg">
<form action="" enctype="multipart/form-data" method="post">
<input type="hidden" name="blackops_action" value="save2">
	<h2>Create Custom Post Types</h2>
    <div class="adminheader">Create Custom Post Type</div>
    <div class="admincontent">
    	<div class="singleitem">
            <div class="left">Enter Post Types</div>
            <div class="right">
            	<span class="description"> Type in custom page names seperated by commas (movies, websites, ...)
                </span><br />
            	<span class="description">
                    <input style="width: 400px;" name="custom_pages" id="custom_pages" value="<?php echo $this->options["custom_pages"]; ?>" type="text">
                </span>   
            </div>
        </div>
    </div>
    <p class="submit"><input type="submit" class="button-primary autowidth" value="Save Changes" /></p>
</form>
</div>
</div>