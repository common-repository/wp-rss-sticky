<?php /*
Plugin Name: RSSSticky ( BETA )
Plugin URI: http://rsssticky.dcoda.co.uk/donate/
Description: Discontinued as similar functionality is now part of WordPress
Author: dcoda
Author URI: 
Version: 3.2.43.&beta;
License: GPLv2 or later
*/
@require_once  dirname ( __FILE__ ) . '/library/wordpress/application.php';
if (class_exists("wv43v_application"))
{
	new wv43v_application ( __FILE__);
}