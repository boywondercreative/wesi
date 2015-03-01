<?php
$newsletter_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_newsletter_meta',
	'title' => 'Add an archived newsletter',
	'template' => get_stylesheet_directory() . '/metaboxes/newsletter-meta.php',
	'priority' => 'high', // same as above, defaults to "high"	
    'include_template' => array('page-newsletter.php'), // use an array for multiple items
	'hide_editor'	=> false		
));
/* eof */