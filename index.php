<div id="page">
<?php get_template_part('templates/page', 'header'); ?>
    <div>
   		<?php get_template_part('templates/content', get_post_format()); ?>        
    </div>
    <?php get_template_part('templates/sidebar-page'); ?>
</div><!--END PAGE-->
  