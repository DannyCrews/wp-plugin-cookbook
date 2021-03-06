<?php
/*
Plugin Name: Chapter 2 - Page Header Output
Plugin URI:
Description: Declares a plugin that will add content to the page header and footer
Version: 1.0
Author: Dan Crews
Author URI:
LicenseL GPLv2
*/

add_action( 'wp_head', 'ch2pho_page_header_output' );

function ch2pho_page_header_output() { ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObjecg']=r;
			i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
			a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
			m.parentNode.insertBefore(a,m)})(window,document,'script',
			'https://www.google-analytics.com/analytics.js','ga');

			ga('create','UA-0000000-0', 'auto');
			ga('send', 'pageview');
		</script>
	<?php }

add_filter( 'the_content', 'ch2lfa_link_filter_analytics' );

function ch2lfa_link_filter_analytics ( $the_content ) {
	$new_content = str_replace( 'href', 'onClick="recordOutboundLink( this );return false;" href', $the_content );

	return $new_content;
}

add_action ( 'wp_footer', 'ch2lfa_footer_analytics_code' );

function ch2lfa_footer_analytics_code() { ?>

<script type="text/javascript">
	function recordOutboundLink ( link ) {
		ga( 'send', 'event', 'Outbound Links', 'Click',
			link.href, {
				'transport': 'beacon',
				'hitCallback': function() {
					document.location = link.href;
				}
			} );
	}
</script>

<?php }