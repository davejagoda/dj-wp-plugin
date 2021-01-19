<?php

/*
 * Plugin Name: dj-wp-plugin
 * Author: Dave Jagoda
 * Description: This is the dj-wp-plugin.
 * Version: 1.0
 * Requires at least: 5.0
 * Tested up to: 5.4
 * Requires PHP: 7.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: dj-wp-plugin
 * */

function dj_wp_plugin_print_time() {
        printf("dj-wp-plugin iso8601 time = " .
                strftime("%Y-%m-%dT%H:%M:%S", time()) . "Z\n");
}

add_action( 'admin_notices', 'dj_wp_plugin_print_time' );
