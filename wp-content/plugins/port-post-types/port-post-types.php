<?php /*
Plugin Name: Custom Post Types - Work and Shop
Description:  Adds post types to the site
Author: Tanisha Rose
Plugin URI: http://
Author URI:
Version: 0.1
License: GPLv3
*/ 

/**
 * Create Products post type
 * @since 0.1
 */

add_action('init', 'port_setup_work');

function port_setup_work(){
	register_post_type('work', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-portfolio',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Work',
    		'singular_name' => 'Work',
    		'add_new_item'	=> 'Add New Work',
    		'not_found'		=> 'No work found.',
    	),

		) );

	// add the Brand taxonomy to products
	register_taxonomy( 'web design', 'work', array(
		'hierarchical' => true,  //checklist interface, can have parent/child terms
		'labels' 	   => array(
			'name' 			=> 'Web Design',
			'singular_name' => 'Web Design',
			'search_items'	=> 'Search Web Design',
			'add_new_item'	=> 'Add New Web Design',
			),
	));

		// add the Brand taxonomy to products
	register_taxonomy( 'Graphic Design', 'work', array(
		'hierarchical' => true,  //checklist interface, can have parent/child terms
		'labels' 	   => array(
			'name' 			=> 'Graphic Design',
			'singular_name' => 'Graphic Design',
			'search_items'	=> 'Search Graphic Design',
			'add_new_item'	=> 'Add New Graphic Design',
			),
	));

	register_taxonomy( 'Personal', 'work', array(
		'hierarchical' => true,  //checklist interface, can have parent/child terms
		'labels' 	   => array(
			'name' 			=> 'Personal Work',
			'singular_name' => 'Personal Work',
			'search_items'	=> 'Search Personal Work',
			'add_new_item'	=> 'Add New Personal Work',
			),
	));
}

add_action('init', 'port_setup_shop');

function port_setup_shop(){
	register_post_type('shop_items', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-store',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Shop Items',
    		'singular_name' => 'Shop Item',
    		'add_new_item'	=> 'Add New Shop Item',
    		'not_found'		=> 'No shop items found.',
    	),

		) );
	
	register_taxonomy( 'Illustrations', 'shop_items', array(
		'hierarchical' => true,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Illustrations',
			'singular_name' => 'Illustration',
			'search_items'	=> 'Search Illustrations',
			'add_new_item'	=> 'Add New Illustration',
			),
	));	

		register_taxonomy( 'Services', 'shop_items', array(
		'hierarchical' => true,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Services',
			'singular_name' => 'Service',
			'search_items'	=> 'Search Services',
			'add_new_item'	=> 'Add New Service',
			),
	));	
}

?>