<?php
/*
 * Plugin Name: WP VJ Theme
 * Plugin URI: https://cloudycode.net/
 * Description: Wordpress Dashboard theme
 * Version: 0.1.0
 * Author: VJRanga
 * Author URI: https://vjranga.com/
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
include ('admin/admin.php');
include ('admin/admin-bar.php');
include ('admin/admin-body.php');
include ('login/login.php');

