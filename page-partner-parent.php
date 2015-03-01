<?php
/*
Template Name: Partner Parent Page
*/
?>
<div id="page">
<?php get_template_part('templates/page', 'custom-header'); ?>
    <div id="pg_main" class="gu12">
	 <?php get_template_part('templates/page', 'subpagenav'); ?>   
        <div id="partners" class="tabbed-page-content shadow"> 
            <div id="tab-container" class="tab-container"><!--START TAB CONTAINER-->
				<?php 
                //query subpages
                $args = array(
                'post_type'      => 'page',
                'posts_per_page' => -1,
                'post_parent'    => $post->ID,
                'order'          => 'ASC',
                'orderby'        => 'menu_order', 
                );
                $subpages = new WP_query($args); ?>
                <ul class="etabs clearfix">
                <?php while ($subpages->have_posts()) : $subpages->the_post();?>
                <li class="tab"><a href="#<?php echo( basename(get_permalink())); ?>"><span><?php echo get_the_title(); ?></span></a></li>
                <?php endwhile; ?>
                </ul>
                <div class="slides-container"><!--SLIDE CONTAINER--> 
                <?php while ($subpages->have_posts()) : $subpages->the_post(); ?>
                    <div id="<?php echo( basename(get_permalink())); ?>" class="tab-slide clearfix"> 
                          <ul id="funders">
                                    <?php global $funder_mb;
                                    if(isset($funder_mb)){
                                    $funder_mb->the_meta(); 
                                    $counter = 0;
                                    while($funder_mb->have_fields('funder')){ ?>    
                                    <li class="<?php if ($funder_mb->get_the_value('nofollow')) echo 'no_show';?>">
                                    <a href="<?php echo $funder_mb->the_value('url'); ?>" target="_blank">
                                    <div class="thumb">
                                    <img src="<?php echo $funder_mb->the_value('image_src'); ?>"/>
                                    </div>
                                    </a>
                                    </li>
                                    <?php } } ?>  
                                </ul>  
                    </div>
                <?php endwhile; wp_reset_query(); ?>
                </div><!--SLIDE CONTAINER--> 
            </div><!--END TAB CONTAINER-->
        </div><!--END TABBED PAGE-->
    </div><!--END PAGE MAIN-->
    <?php get_template_part('templates/sidebar-page'); ?>
</div><!--END PAGE-->