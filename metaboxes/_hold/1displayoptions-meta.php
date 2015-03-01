<?php
$property_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_property_meta',
	'title' => 'Add property info',
	'template' => get_stylesheet_directory() . '/metaboxes/property-meta.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	//'prefix' => '_my_',
	'types' => array('listings'),
	'priority' => 'high', // same as above, defaults to "high"	
	'hide_editor'	=> false		
));
