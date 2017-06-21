<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
$from = "2015-12-31 23:59:59";
$to = "2015-01-01 00:00:00";

$fromSec = strtotime($from);
$toSec   = strtotime($to);

$differences = $fromSec - $toSec;

echo $differences;

/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
