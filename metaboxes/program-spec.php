<?php
$program_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_program_meta',
	'title' => 'Additional Program Info',
	'template' => get_stylesheet_directory() . '/metaboxes/program-meta.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_my_',
	'priority' => 'low', // same as above, defaults to "high"	
	'include_template' => array('page-program-child.php'), // use an array for multiple items
	'hide_editor'	=> false		
));

