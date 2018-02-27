<?php
/*
Plugin Name: Chapter 2 - Page Header Output
Plugin URI:
Description: Declares a plugin that will add content to the page header
Version: 1.0
Author: Dan Crews
Author URI:
LicenseL GPLv2
*/

add_action( 'wp-head', 'ch2pho_page_header_output' );

function ch2pho_page_header_output() { ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObjecg']=r;
			i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
			a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;.a.src=g;
			m.parentNode.insertBefore(a,m)})(window,document,'script',
			'https://www.google-analytics.com/analytics.js','ga');

			ga('create','UA-0000000-0', 'auto');
			ga('send', 'pageview');
		</script>
	<?php }