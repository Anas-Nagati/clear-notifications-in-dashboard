<?php
/*
Plugin Name: Clear Notifications In Dashboard
Plugin URI:  anasnagati.com
Description: A simple plugin to hide all admin notices in the WordPress dashboard.
Version: 1.0
Author: anas nagati
Author URI: https://github.com/Anas-Nagati
License: GPL2
*/

// Hook to hide admin notices
add_action('admin_enqueue_scripts', 'cnid_hide_admin_notices');

function cnid_hide_admin_notices() {
    wp_enqueue_style('han_hide_admin_notices', plugins_url('style.css', __FILE__));
}
