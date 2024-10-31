<?php
/*
Plugin Name: Wellcut oEmbed
Plugin URI:  https://wordpress.org/plugins/oembed-wellcut/
Description: Whitelist Wellcut's URLs in Wordpress
Version:     1.0.1
Author:      Wellcut.tv
Author URI:  https://www.wellcut.tv/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wellcuttv
*/

// Register oEmbed providers
function wellcut_oembed_provider() {
  wp_oembed_add_provider( 'https://www.wellcut.tv/*', 'https://www.wellcut.tv/services/oembed', false );
}
add_action( 'init', 'wellcut_oembed_provider' );
