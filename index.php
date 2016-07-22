<?php
/*
Plugin Name: Twitter Shortcode
Plugin URI: http://bgwebagency.com/
Description: Simple shortcode
Version: 1.0
Author: Kiran Dash
Author URI: http://bgwebagency.com/
*/

add_shortcode('twitter', function(){
	//echo should not be used in add shortcode. Please use return
	return '<a href="">Follow me on twitter</a>';
});
?>