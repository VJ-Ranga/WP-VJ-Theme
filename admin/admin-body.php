<?php
/**
 * admin dashboard body css
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * select default color 
 */
function vj_change_admin_color( $result ) {
    return 'Midnight';
}
add_filter( 'get_user_option_admin_color', 'vj_change_admin_color' );

/**
 * disable color picker
 */
remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

/**
 * footer
 */
function remove_footer_admin () {
 
    echo ' Design by: <a href="https://cloudycode.net/" target="_blank">CloudyCode</a></p>';
     
    }
     
    add_filter('admin_footer_text', 'remove_footer_admin');

/**
 * post
 */

add_action('admin_enqueue_scripts', 'admin_custom_styles');
function admin_custom_styles() {
  echo '
  <style>
.postbox {
    box-shadow: 0px 10px 10px rgb(0 0 0 / 25%) !important;
    border-radius: 10px;
    padding: 5px !important;
}
  </style>';
  
}