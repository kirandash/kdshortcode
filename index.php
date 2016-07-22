<?php
/*
Plugin Name: Twitter Shortcode
Plugin URI: http://bgwebagency.com/
Description: Simple shortcode
Version: 1.0
Author: Kiran Dash
Author URI: http://bgwebagency.com/
*/

add_shortcode('twitter', function($atts){
	//echo should not be used in add shortcode. Please use return
	if(!isset($atts['username'])) $atts['username'] = 'thekirandash';
	return '<a href="http://twitter.com/'.$atts['username'].'">Follow me on twitter</a>';
});
?>