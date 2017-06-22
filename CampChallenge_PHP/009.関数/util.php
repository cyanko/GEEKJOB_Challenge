<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/

function kansu($num) {
  if($num % 2 == 0) {
    echo $num. 'は偶数です。';}
  else {
    echo $num. 'は奇数です。';}
}

/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
//define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' );
