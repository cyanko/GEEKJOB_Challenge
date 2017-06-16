<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
const BASE = 210;
$num = 3;
$tasu = BASE + $num;
$hiku = BASE - $num;
$kake = BASE * $num;
$waru = BASE / $num;
echo "210 + 3は{$tasu}です。<br />";
echo "210 - 3は{$hiku}です。<br />";
echo "210 * 3は{$kake}です。<br />";
echo "210 / 3は{$waru}です。<br />";


/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
