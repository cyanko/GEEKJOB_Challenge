<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
function myprofile() {
    echo "私の名前は姫野至廣です。<br>";
    echo "1989年3月7日生まれです。<br>";
    echo "出身地は大阪です。<br>";
}
myprofile();
myprofile();
myprofile();
myprofile();
myprofile();
myprofile();
myprofile();
myprofile();
myprofile();
myprofile();

/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
