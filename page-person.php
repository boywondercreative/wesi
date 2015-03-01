<?php
/*
Template Name: Person Page
*/
?>
		<style type="text/css" id="page-css">
			/* Styles specific to this particular page */
			.scroll-pane
			{
				width: 100%;
				height: 200px;
				overflow: auto;
			}
			.horizontal-only
			{
				height: auto;
				max-height: 200px;
			}
		</style>
<div id="page">
	<?php get_template_part('templates/page', 'custom-header'); ?>
    <div id="pg_main" class="gu12">
    <?php get_template_part('templates/page', 'subpagenav'); ?>  
        <div id="people" class="page-content clearfix shadow"> 
             <ul id="staff"> <!--START OF STAFF LIST-->
                <?php global $person_mb;
                if(isset($person_mb)){
                $person_mb->the_meta(); 
                $counter = 0;
                while($person_mb->have_fields('person')){ ?>
                <li class="person <?php if ($person_mb->get_the_value('nofollow')) echo 'no_show';?>">
                        <a href="#person-<?php echo $counter ;?>" class="fancyperson"> 
                        <div class="thumb">
						<?php $person_mb->the_field('image_src'); ?>
                        <img src="<?php if($person_mb->get_the_value()){$person_mb->the_value();}else { echo get_template_directory_uri().'/assets/img/silo.png';}?>"/>
                        </div>
                        <p class="name"><?php echo $person_mb->the_value('name'); ?></p>
                        <p class="title"><?php echo $person_mb->the_value('position'); ?></p>
                        </a>
                        <div style="display:none">
                            <div id="person-<?php echo $counter ;?>" class="personbig"><!--START OF PERSON BIG -->
                                <header class="personheader">
                                <a class="personclose" href="javascript:parent.$.fancybox.close();"><i class="icon-remove"></i></a>
                                </header>
                                <section class="personbody"><!--START OF PERSON BODY -->
                                    <article class="persondetails"><!--START OF PERSON META -->
                                        <div class="personthumb">
                                        <img src="<?php if($person_mb->get_the_value()){$person_mb->the_value();}else { echo get_template_directory_uri().'/assets/img/silo.png';}?>"/>
                                        </div>
                                        <h3 class="personname"><?php echo $person_mb->the_value('name'); ?></h3>
                                        <h4 class="persontitle"><?php echo $person_mb->the_value('position'); ?></h4>
                                        <?php if($person_mb->get_the_value('email')){ ?>
                                        <a class="personemail" href="mailto:<?php echo $person_mb->the_value('email'); ?>"><i class="icon-envelope-alt"></i><span><?php echo $person_mb->the_value('email'); ?></span></a>
                                        <?php } ?>             
                                    </article><!--END OF PERSON META -->
                                    <article class="personbio scroll-pane"><p><?php echo apply_filters('meta_content',$person_mb->get_the_value('bio')); ?></p></article>
                                </section><!--END OF PERSON BODY -->
                                <nav class="personnav">
                                <a class="personPrev" href="javascript:parent.$.fancybox.prev();"><i class="icon-chevron-left"></i></a>
                                <a class="personNext" href="javascript:parent.$.fancybox.next();"><i class="icon-chevron-right"></i></a>
                                </nav>
                            </div><!--END OF PERSON BIG -->                    
                        </div><!--END OF DIV HIDE -->  
					<?php $counter++ ?>
                </li>
                <?php } 
                }?>  
                </ul><!--END OF STAFF LIST-->
        </div>        
    </div>
    <?php get_template_part('templates/sidebar-page'); ?>
</div>
<!--http://www.waitingforthefuture.org/2010/07/12/jscrollpane-and-iframefancybox-woes/-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script/jquery.jscrollpane.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.scroll-pane').jScrollPane({autoReinitialise: true});
		$('.scroll-pane-arrows').jScrollPane(
		{
			showArrows: true,
			horizontalGutter: 10
		}
	);
	});

</script>
