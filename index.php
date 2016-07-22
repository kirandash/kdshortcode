<?php
/*
Plugin Name: Twitter Shortcode
Plugin URI: http://bgwebagency.com/
Description: Simple shortcode
Version: 1.0
Author: Kiran Dash
Author URI: http://bgwebagency.com/
*/

add_shortcode('twitter', function($atts, $content){
	//echo should not be used in add shortcode. Please use return
	//if(!isset($atts['username'])) $atts['username'] = 'thekirandash';
	//if(empty($content)) $content = 'Follow me on twitter';
	$atts = shortcode_atts(
		array(
			'username' => 'thekirandash',
			'content' => !empty($content)?$content:'Follow me on twitter'
		), $atts
	);
	
	extract($atts); // PHP function to extract attributes to variables
	return "<a href='http://twitter.com/$username'>$content</a>";
});
?>