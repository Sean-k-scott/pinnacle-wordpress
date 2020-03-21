<?php

remove_action('wp_head', 'wp_generator');

function hide_wp_vers() {
	return '';
}
add_filter('the_generator','hide_wp_vers');

function queue_styles () {
	wp_register_style('pinnacle', get_stylesheet_directory_uri() . '/assets/css/pinnacle.css', array(), '1.0.0');
	wp_enqueue_style('pinnacle');
}

function queue_scripts() {
  wp_register_script('vendor', get_stylesheet_directory_uri() . '/assets/js/vendor.min.js', array(), true);
  wp_enqueue_script('vendor');
  wp_register_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.min.js', array(), '1.0.0', true);
  	wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'queue_scripts');

?>
