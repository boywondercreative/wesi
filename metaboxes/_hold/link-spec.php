<?php

$link_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_link_meta',
	'title' => 'Add a link',
	'template' => get_stylesheet_directory() . '/metaboxes/link-meta.php',
	'priority' => 'high', // same as above, defaults to "high"	
    'include_template' => array('page-links.php'), // use an array for multiple items
	'hide_editor'	=> false		
));


/* eof */