<?php ?>
				</div><!-- #main .wrapper -->
				<div class="cta">
					<div class="table">
					<ul class="nav social-nav">
						<li>
					<a href="http://www.youtube.com/user/kiltotake" target="_blank">
						<i aria-hidden="true" class="icon-youtube-sign"></i>
						<span class="screen-reader-text">You Tube</span>
                    </a>
					</li>
					<li>
						<a href="https://twitter.com/kiltotake/" target="_blank">
							<i aria-hidden="true" class="icon-twitter"></i>
							<span class="screen-reader-text">Twitter</span>
	                    </a>
					</li>
					<li>
						<a href="http://www.facebook.com/kiltotake" target="_blank">
							<i aria-hidden="true" class="icon-facebook"></i>
							<span class="screen-reader-text">Facebook</span>
	                    </a>
					</li>
					<li>
						<a href="https://soundcloud.com/kiltotake" target="_blank">
							<i aria-hidden="true" class="icon-soundcloud"></i>
							<span class="screen-reader-text">Soundcloud</span>
	                    </a>
					</li>
					</ul>
				</div>
				</div><!-- #page -->
				
				<?php if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) )
				return; ?>
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<?php endif; ?>
				
				<div class="audio-player">
				<?php // if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
				<? // php dynamic_sidebar( 'sidebar-3' ); ?>
				<?php // endif; ?>
				
					<div class="audio-player-hide">
						<audio id="player" controls autoplay="true">
							<source src="<?php echo get_template_directory_uri(); ?>/audio/Atonement.ogg" type="audio/ogg" >
							<source src="<?php echo get_template_directory_uri(); ?>/audio/Atonement.mp3" type="audio/mp3" >
							<object class="playerpreview" type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/audio/player_mp3_mini.swf" width="200" height="20">
			          <param name="movie" value="<?php echo get_template_directory_uri(); ?>/audio/player_mp3_mini.swf" />
			          <param name="bgcolor" value="#000000" />
			          <param name="FlashVars" value="mp3=<?php echo get_template_directory_uri(); ?>/audio/Atonement.mp3" />
			          <embed href="audio/player_mp3_mini.swf" bgcolor="#000000" width="200" height="20" name="movie" align="" type="application/x-shockwave-flash" flashvars="mp3=<?php echo get_template_directory_uri(); ?>/audio/Atonement.mp3" />
			          </object>
						</audio>
						<div id="player_fallback"></div>
						<script>
					      if (document.createElement('audio').canPlayType) {
					        if (!document.createElement('audio').canPlayType('audio/mpeg') &&
					            !document.createElement('audio').canPlayType('audio/ogg')) {
					          swfobject.embedSWF("<?php echo get_template_directory_uri(); ?>/audio/player_mp3_mini.swf",
					                             "default_player_fallback", "200", "20", "9.0.0", "",
					                             {"mp3":"<?php echo get_template_directory_uri(); ?>/audio/Atonement.mp3"},
					                             {"bgcolor":"#000000"}
					                            );
					          swfobject.embedSWF("<?php echo get_template_directory_uri(); ?>/audio/player_mp3_mini.swf",
					                             "custom_player_fallback", "200", "20", "9.0.0", "",
					                             {"mp3":"<?php echo get_template_directory_uri(); ?>/audio/Atonement.mp3"},
					                             {"bgcolor":"#000000"}
					                            );
					          document.getElementById('audio_with_controls').style.display = 'none';
					        } else {
					          // HTML5 audio + mp3 support
					          document.getElementById('player').style.display = 'block';
					        }
					      }
					    </script>
					</div>
				
				</div>
			</div>
			<br />
<?php wp_footer(); ?>
<!-- Libs -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-1.8.1.min.js"><\/script>')</script>    
<!-- BigVideo Dependencies -->
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery-ui-1.8.22.custom.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/libs/jquery.imagesloaded.min.js"></script>
<script src="http://vjs.zencdn.net/c/video.js"></script>
<!-- BigVideo -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bigvideo.js"></script>
<!-- Load Video -->
<script>
	$(function() {
       var BV = new $.BigVideo();
	   BV.init();
       if (Modernizr.touch) {
           BV.show('<?php echo get_template_directory_uri(); ?>/images/bg/fallback.jpg');
        } else {
           BV.show('<?php echo get_template_directory_uri(); ?>/video/kilto-take.mp4',{ambient:true});
        }
	});
</script>
<!-- Plugins -->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<!--[if (lt IE 9) & (!IEMobile)]>
     <script src="<?php echo get_template_directory_uri(); ?>/js/libs/imgsizer-min.js"></script>
<![endif]-->
<!-- Scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
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