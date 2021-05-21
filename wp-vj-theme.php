<?php
/*
 * Plugin Name: WP VJ Theme
 * Plugin URI: https://cloudycode.net/
 * Description: Simple WordPress Dashboard theme

This plugin can change the Admin Dashboard, Admin Sidebar, classic post editor side panel, and login page of your WordPress website.
 * Version: 0.1.3
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

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/VJ-Ranga/WP-VJ-Theme',
	__FILE__,
	'unique-plugin-or-theme-slug'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');


