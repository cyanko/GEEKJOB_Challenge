<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
function myprofile() {
    $foo = true;
    echo "私の名前は姫野至廣です。<br>";
    echo "1989年3月7日生まれです。<br>";
    echo "出身地は大阪です。<br>";
    return $foo;
}

if ($foo = true){
  echo 'この処理は正しく実行できました';
} else {
  echo '正しく実行できませんでした';
}


/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
