<?php
/*
Template Name: Partner Child Page
*/

// redirect the user up one level in the tree
$URI = rtrim($_SERVER['REQUEST_URI'], ' /');

$URI = substr($URI, 0, strrpos($URI, '/') + 1);

if ( ! in_array($URI, array('', '/'))) {
	header('Location: '.$URI);
}
?>












