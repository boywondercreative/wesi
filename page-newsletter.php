<?php
/*
Template Name: Newsletter Archive Page
*/
?>
<div id="page">
	<?php get_template_part('templates/page', 'custom-header'); ?>
    <div id="pg_main" class="gu12">
        <div id="newsletterArchive" class="page-content clearfix shadow"><!--START FUNDERS--> 
            <ul id="newsletter_archive">
            <?php global $newsletter_mb;
            if(isset($newsletter_mb)){
            $newsletter_mb->the_meta(); 
            while($newsletter_mb->have_fields('newsletter')){ ?>    
                <li class="<?php if ($newsletter_mb->get_the_value('nofollow')) echo 'no_show';?>">
                    <a href="<?php echo $newsletter_mb->the_value('url'); ?>" target="_blank" class="cover">
                            <?php $newsletter_mb->the_field('image_src'); ?>
                            <span class="thumb">
                                <img src="<?php if($newsletter_mb->get_the_value()){$newsletter_mb->the_value();}else { echo get_template_directory_uri().'/assets/img/silo.png';}?>"/>
                            </span>
                            <span class="caption">
                                <p><?php echo $newsletter_mb->the_value('month'); ?></p> 
                                <?php /*?><p><?php echo $newsletter_mb->the_value('year'); ?></p>
                                <i class="icon-share-alt"></i> <?php */?>
                            </span>
                     </a>
                </li>
            <?php } } ?>  
            </ul><!--END newsletter_archive-->      
        </div>
    </div><!--END PAGE MAIN-->
    <?php get_template_part('templates/sidebar-page'); ?>
</div><!--END PAGE-->
