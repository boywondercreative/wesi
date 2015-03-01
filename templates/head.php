<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" />
    <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie.css" /><![endif]-->
    <!--[if IE]>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/selectivizr-min.js"></script>
    <![endif]--> 

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.8.1.min.js"><\/script>')</script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/socialcount.js"></script>  

	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easytabs.js"></script>
	<script type="text/javascript">  
	jQuery(document).ready(function($) {
		jQuery('#tab-container').easytabs();
    });
    </script>         
<?php /*?>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.isotope.min.js"></script>
	<script type="text/javascript">  
		jQuery(window).load(function(){
			$('#articles').isotope({
			  // options
			  itemSelector : 'article',
			  layoutMode : 'fitRows'
			});  
			$('#footer_programs').isotope({
			  // options
			  itemSelector : '.menu-block',
			  layoutMode : 'fitRows'
			});  
		});
    </script>
 <?php */?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fittext.js"></script>
	<script type="text/javascript">
		$(".pg_title h1").fitText();
		$("#fittext2").fitText(1.2);
		$("#fittext3").fitText(1.1, { minFontSize: 50, maxFontSize: '75px' });
	</script> 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/media.js"></script>

  <?php wp_head(); ?>
</head>