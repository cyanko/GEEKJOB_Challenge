<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/

echo $_GET['txtName'];
// チェックボックスの情報
echo $_GET['chkTest'];
// ラジオボタンの情報
echo $_GET['rdoSample'];
// ボタンの情報
echo $_GET['btnTest'];
// コンボボックス（select）の情報
echo $_GET['cmbList'];
// テキストエリアの情報
echo $_GET['mulText'];
// * Tells WordPress to load the WordPress theme and output it.
// *
//define('WP_USE_THEMES', true);

/*Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' );
