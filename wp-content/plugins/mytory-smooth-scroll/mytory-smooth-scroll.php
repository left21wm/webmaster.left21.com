<?php
/*
Plugin Name: Mytory internal link smooth scroll
Description: Internal link smooth scroll
Version: 1.0.0
Author: mytory
Author URI: http://mytory.co.kr
License: GPL2
*/

function mytory_smooth_scroll(){
	wp_enqueue_script('jquery-smooth-scroll', plugin_dir_url(__FILE__) . 'jquery.smooth-scroll.min.js', array('jquery'), '', TRUE);
	wp_enqueue_script('jquery-color');
	wp_enqueue_script('mytory-smooth-scroll', plugin_dir_url(__FILE__) . 'js.js', array('jquery', 'jquery-smooth-scroll'), '', TRUE);
}
add_action('wp_enqueue_scripts', 'mytory_smooth_scroll');

