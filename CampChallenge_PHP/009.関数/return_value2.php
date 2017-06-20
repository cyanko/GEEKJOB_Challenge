<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
function myprofile() {
  $infos = array();
  $infos['id'] = 0307;
  $infos['name'] = '姫野至廣';
  $infos['birth_date'] = '1989年3月7日生まれ';
  $infos['address'] = '調布市';
  return $infos;
}

$myprof = myprofile();
echo $myprof['name'];
echo "<br>";
echo $myprof['birth_date'];
echo "<br>";
echo $myprof['address'];

/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
