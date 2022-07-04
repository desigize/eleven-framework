<?php
/*

Plugin Name:         Eleven Framework
Plugin URI:          https://ziontemplates.com/
Description:         Tailwind Based CSS Framework. Unique Framework for Eleven Theme.
Author:              Zion Templates
Author URI:          https://ziontemplates.com/
Version:             1.0.0


*/

// If this file is called directly, abort.
if (!defined("WPINC")) {
  die();
}

function eleven_styles_frontend() {
    wp_register_style('eleven-framework', plugins_url('/includes/css/eleven-framework.css',__FILE__ ));
    wp_enqueue_style('eleven-framework');
}

add_action( 'wp_head','eleven_styles_frontend');