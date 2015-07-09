<?php /*
Plugin Name: Custom Post Types - Portfolio
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

add_action('init', 'port_setup_portfolio');

function port_setup_portfolio(){
	register_post_type('portfolio', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-desktop',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Portfolio',
    		'singular_name' => 'Portfolio',
    		'add_new_item'	=> 'Add New Portfolio',
    		'not_found'		=> 'No portfolio found.',
    	),

		) );

    // add the type taxonomy to products
    register_taxonomy( 'type', 'portfolio', array(
        'hierarchical' => false,  //comma - separated interfac, flat list
        'labels'       => array(
            'name'          => 'Types',
            'singular_name' => 'Type',
            'search_items'  => 'Search Type',
            'add_new_item'  => 'Add New Type',
            ),
    ));

}

function rad_rewrite_flush(){
    port_setup_portfolio();//call the func. that registers CPT/Taxonomies
    
    flush_rewrite_rules();//recreate the htaccess rules
}

register_activation_hook( __FILE__, 'rad_rewrite_flush' );

?>