<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
function kansu($num1,$num2 = 5,$num3 = false) {
  $total = $num1 * $num2;
  echo $total;
    if($num3 != false){
      echo $total. 'の2乗は、' . ($total * $total) . 'です。';
    }
}
kansu(4);
echo "<br>";
kansu(8,2);
echo "<br>";
kansu(3,5,true);


/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
