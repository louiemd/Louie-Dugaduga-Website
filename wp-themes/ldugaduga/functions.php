<?php

if ( function_exists('register_sidebar') ) {
	
	register_sidebar(array(
		'name' => 'flickr-widget',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
	
}
