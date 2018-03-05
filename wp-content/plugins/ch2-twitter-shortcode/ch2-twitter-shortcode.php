<?php
/*
Plugin Name: Chapter 2 - Twitter Shortcode
Plugin URI:
Description: Declares a plugin that will add a simple Twitter shortcode
Version: 1.0
Author: Dan Crews
Author URI:
LicenseL GPLv2
*/

add_shortcode( 'tl', 'ch2ts_twitter_link_shortcode' );

function ch2ts_twitter_link_shortcode( $atts ) {
	$output = '<a href="https://twitter.com/dannycrews">';
	$output .= 'Twitter Feed</a>';
	return $output;
}

