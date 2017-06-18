  <?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
$data = array('10', '100', 'soeda', 'hayashi','-20','118','END');
echo $data[0];
echo $data[1];
echo $data[2];
echo $data[3];
echo $data[4];
echo $data[5];
echo $data[6];

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
