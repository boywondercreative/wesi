<?php
$display_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_display_meta',
	'title' => 'Page display options',
	'template' => get_stylesheet_directory() . '/metaboxes/displayoptions-meta.php',
	//'context' => 'side',
	'priority' => 'low', // same as above, defaults to "high"	
	'types' => array('page'), // added only for posts	
    //'include_template' => array('page-links.php'), // use an array for multiple items
	'hide_editor'	=> false		
));

//$funder_mb = new WPAlchemy_MetaBox(array
//(
//	'id' => '_funder_meta',
//	'title' => 'Add a funder',
//	'template' => get_stylesheet_directory() . '/metaboxes/funder-meta.php',
//	'priority' => 'high', // same as above, defaults to "high"	
//    //'include_template' => array('page-front.php','page-home.php','page-tempfront.php'), // use an array for multiple items
//	'hide_editor'	=> false		
//));

//$simple_textarea = new WPAlchemy_MetaBox(array(
//	'id' => '_single_textarea_meta',
//	'title' => 'Primary Inside page Custom Sidebar Widget',
//	'types' => array('page', 'events'), // added only for pages and to custom post type "events"
//	'template' => get_stylesheet_directory() . '/metaboxes/single-textarea.php',
//    'include_template' => array('page-custom.php','page-media.php'), // use an array for multiple items	
//	'init_action' => 'kia_metabox_scripts',
//));
//
//$repeating_textareas = new WPAlchemy_MetaBox(array(
//	'id' => '_repeating_textareas_meta',
//	'title' => 'Additional widgets',
//	'types' => array('page', 'events'), // added only for pages and to custom post type "events"	
//	'template' => get_stylesheet_directory() . '/metaboxes/repeating-textarea.php',	
//    'include_template' => array('page-custom.php','page-media.php'), // use an array for multiple items		
//	'init_action' => 'kia_metabox_init',
////	'hide_editor'	=> false
//));


/* eof */