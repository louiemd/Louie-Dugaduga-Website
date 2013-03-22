<div class="myfooter">
	<div class="row-fluid">
		<div class="span4" style="margin-left:0">
			<hr>
			<h4>About Me</h4>
			<p>I have been in this industry for about 5 years and I'm happy to help clients building their websites.<br>
				Here's a list of what I can do<br>
				
			</p>
			<ul>
				<li>Responsive Website Design</li>
				<li>PSD to HTML/CSS</li>
				<li>Wordpress Integration and Administration</li>
			</ul>
		</div>
		<div class="span4">
			<hr>
			<h4>Flickr</h4>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('flickr-widget') ) : ?><?php endif; ?>
			
			<!--
<h4>What I am Reading</h4>
			<p>I'm having fun of exploring new things specially in new technologies, here's a list of what I am reading.</p>
			<ul>
				<li>Smashing Magazine</li>
				<li>Tutsplus (My Fav)</li>
				<li>A list apart</li>
				<li>Many more...</li>
			</ul>
-->
		</div>
		<div class="span4">
			<hr>
			<h4>Contact</h4>
			<p>Feel free to get in touch with me by email: louie.dugaduga@gmail.com<br>
			Or you can find me at these places:</p>
			
			<div class="row-fluid">
				<div class="span5">
					<ul class="social">
						<li>
							<p><a target="_blank" href="https://www.facebook.com/louiemd1218"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png" width="22"> Facebook</a></p>
						</li>
						<li>
							<p><a target="_blank" href="https://twitter.com/brolouiemd"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png" width="22"> Twitter</a></p>
						</li>
					</ul>
				</div>
				<div class="span5">
					<ul class="social">
						<li>
							<p><a target="_blank" href="http://www.flickr.com/photos/35026948@N04/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/flickr.png" width="22"> Flickr</a></p>
						</li>
						<li>
							<p><a target="_blank" href="http://ph.linkedin.com/pub/louie-dugaduga/12/a89/514"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/linkedin.png" width="22"> Linkedin</a></p>
						</li>
					</ul>
				</div>
			</div>
			<!-- /row-fluid -->
		</div>
		<!-- /span4 -->
	</div>
</div>
</div>
<!-- end container -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>