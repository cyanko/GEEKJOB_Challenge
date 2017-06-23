<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
ini_set( 'display_errors', 1 );
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2003);
$text = "cal_days_in_month関数の検証<br />
        2003 年 2 月の日数は {$number} 日です。<br />";
file_put_contents('sample4.txt', $text);
$fp = fopen('sample4.txt', 'a');

if ($fp != false) {

    fwrite($fp, '2017年 6月23日20時 組み込み関数まとめ終了。');

    fclose($fp);
}
echo file_get_contents('sample4.txt');

// * Tells WordPress to load the WordPress theme and output it.
// *
//define('WP_USE_THEMES', true);

/*Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' );
