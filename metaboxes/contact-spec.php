<?php
$contact_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_contact_meta',
	'title' => 'Enter contact info',
	'template' => get_stylesheet_directory() . '/metaboxes/contact-meta.php',
	'mode' => WPALCHEMY_MODE_EXTRACT,
	'prefix' => '_my_',
	'priority' => 'low', // same as above, defaults to "high"	
	'include_template' => array('page-contact.php'), // use an array for multiple items
	'hide_editor'	=> false		
));
