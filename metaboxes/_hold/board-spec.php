<?php

$person_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_person_meta',
	'title' => 'Add a person',
	'template' => get_stylesheet_directory() . '/metaboxes/board-meta.php',
	'priority' => 'high', // same as above, defaults to "high"	
    'include_template' => array('page-board.php'), // use an array for multiple items
	'hide_editor'	=> false		
));

/* eof */