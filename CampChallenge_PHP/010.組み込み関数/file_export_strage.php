<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
ini_set( 'display_errors', 1 );

$fp = fopen('sample3.txt', 'w');
// きちんと開けたら
if ($fp != false) {
    // ファイルに書き込み
    fwrite($fp, '姫野至廣です。');
    // 書いたら、閉じる
    fclose($fp);
}

// * Tells WordPress to load the WordPress theme and output it.
// *
//define('WP_USE_THEMES', true);

/*Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' );
