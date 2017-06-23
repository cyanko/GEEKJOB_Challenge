<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
ini_set( 'display_errors', 1 );
$text = '姫野至廣です。28歳です。大阪府出身です。';

// 一括書き込み
file_put_contents('sample3.txt', $text);

// 一括読み込み
echo file_get_contents('sample3.txt');
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
