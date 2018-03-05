<?php
/*
Plugin Name: Chapter 2 - Generator Filter
Plugin URI:
Description: Declares a plugin that will modify the site's generator meta tag
Version: 1.0
Author: Dan Crews
Author URI:
LicenseL GPLv2
*/

add_filter( 'the_generator', 'ch2gf_generator_filter', 10, 2 );

function ch2gf_generator_filter ( $html, $type ) {
	if ( $type == 'xhtml' ) {
		$html = preg_replace( '("WordPress.*?")', '"Dan Crews"', $html );
	}
	return $html;
}