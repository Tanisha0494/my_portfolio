<?php 
/*
Plugin Name: Smooth Scroll
Description: A plugin that makes a simple smooth scroll effect happen
Author: Tanisha Rose
Plugin URI: http://path to documentation
Author URI:
Version: 0.1
License: GPLv3
*/
 
add_action('wp_enqueue_scripts', 'port_smooths_scripts');

function port_smooths_scripts(){

	$t_path = plugins_url('js/smooth-scroll.js' , __FILE__ );
	wp_enqueue_script('port-smooth-scroll-js', $t_path,'jquery', false, true);

} ?>