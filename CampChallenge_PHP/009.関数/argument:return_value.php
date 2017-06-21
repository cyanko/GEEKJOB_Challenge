<?php
/**
* Front to the WordPress application. This file doesn't do anything, but loads
* wp-blog-header.php which does and tells WordPress to load the theme.
*
* @package WordPress
*/
function their_profile($profile,$search_word) {
  for($i = 0; $i < count($profile); $i++){
    if(strpos($profile[$i],$search_word) !== false){
      echo $search_word. 'が見つかりました。';
    }
  }
}

$profile1 = array('himeno','28歳','大阪府');
$profile2 = array('kitano','34歳','京都府');
$profile3 = array('kondo','67歳','滋賀県');
$search_word = 'himeno';
their_profile($profile1,$search_word);
their_profile($profile2,$search_word);
their_profile($profile3,$search_word);








/**
* Tells WordPress to load the WordPress theme and output it.
*
* @var bool
*/
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
