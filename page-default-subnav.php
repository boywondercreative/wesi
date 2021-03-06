<?php
/*
Template Name:  Page Default w/ Subnav
*/
?>
<div id="page">
	<?php get_template_part('templates/page', 'custom-header'); ?>
    
    <div id="pg_main" class="gu12">
    <?php get_template_part('templates/page', 'subpagenav'); ?>   
        <div class="page-content clearfix shadow"> 
		<?php get_template_part('templates/content', 'page'); ?>
        </div>
    </div><!--END PAGE MAIN-->
    <?php get_template_part('templates/sidebar-page'); ?>
</div><!--END PAGE-->
