<?php

$upload_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_upload_meta',
	'title' => 'Add an image',
	'template' => get_stylesheet_directory() . '/metaboxes/upload-meta.php',
	'priority' => 'high', // same as above, defaults to "high"	
    'include_template' => array('template-home.php'), // use an array for multiple items
	//'init_action' => 'upload_metabox_init',	
	'hide_editor'	=> true		
));

//function upload_metabox_init(){
//	// I prefer to enqueue the styles only on pages that are using the metaboxes
//	wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/css/my_meta.css');
//
//	//make sure we enqueue some scripts just in case 
//	wp_enqueue_script('jquery');
//	wp_enqueue_script('jquery-ui-core');
//	wp_enqueue_script('jquery-ui-widget');
//	wp_enqueue_script('jquery-ui-mouse');
//	wp_enqueue_script('jquery-ui-sortable');
//	
//	// special script for dealing with repeating textareas
//	wp_register_script('upload-metabox',get_stylesheet_directory_uri() . '/metaboxes/upload.js',array('jquery','editor'), '1.0');
//	
//	// needs to run AFTER all the tinyMCE init scripts have printed since we're going to steal their settings
//	//add_action('after_wp_tiny_mce','kia_metabox_scripts',999);
//}


/* eof */