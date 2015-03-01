<?php
$funder_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_funder_meta',
	'title' => 'Add a funder',
	'template' => get_stylesheet_directory() . '/metaboxes/funder-meta.php',
	'priority' => 'high', // same as above, defaults to "high"	
    'include_template' => array('page-partner-child.php'), // use an array for multiple items
	'hide_editor'	=> true		
));

/* eof */