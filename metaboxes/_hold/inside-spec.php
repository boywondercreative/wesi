<?php

$simple_textarea = new WPAlchemy_MetaBox(array(
	'id' => '_single_textarea_meta',
	'title' => 'Primary Inside page Custom Sidebar Widget',
	'types' => array('page', 'events'), // added only for pages and to custom post type "events"
	'template' => get_stylesheet_directory() . '/metaboxes/single-textarea.php',
    'include_template' => array('page-custom.php','page-media.php','page-central.php'), // use an array for multiple items	
	'init_action' => 'kia_metabox_scripts',
));

$repeating_textareas = new WPAlchemy_MetaBox(array(
	'id' => '_repeating_textareas_meta',
	'title' => 'Additional widgets',
	'types' => array('page', 'events'), // added only for pages and to custom post type "events"	
	'template' => get_stylesheet_directory() . '/metaboxes/repeating-textarea.php',	
    'include_template' => array('page-custom.php','page-media.php','page-central.php'), // use an array for multiple items		
	'init_action' => 'kia_metabox_init',
//	'hide_editor'	=> false
));


function kia_metabox_init(){
	// I prefer to enqueue the styles only on pages that are using the metaboxes
	wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/meta.css');

	//make sure we enqueue some scripts just in case 
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-mouse');
	wp_enqueue_script('jquery-ui-sortable');
	
	// special script for dealing with repeating textareas
	wp_register_script('kia-metabox',get_stylesheet_directory_uri() . '/metaboxes/kia-metabox.js',array('jquery','editor'), '1.0');
	
	// needs to run AFTER all the tinyMCE init scripts have printed since we're going to steal their settings
	add_action('after_wp_tiny_mce','kia_metabox_scripts',999);
}

function kia_metabox_scripts(){
	wp_print_scripts('kia-metabox');
}

/* 
 * Recreate the default filters on the_content
 * this will make it much easier to output the meta content with proper/expected formatting
*/
add_filter( 'meta_content', 'wptexturize'        );
add_filter( 'meta_content', 'convert_smilies'    );
add_filter( 'meta_content', 'convert_chars'      );

//use my override wpautop
if(function_exists('override_wpautop')){
add_filter( 'meta_content', 'override_wpautop'            );
} else {
add_filter( 'meta_content', 'wpautop'            );
}
add_filter( 'meta_content', 'shortcode_unautop'  );
add_filter( 'meta_content', 'prepend_attachment' );

/* eof */