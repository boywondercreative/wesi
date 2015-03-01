<?php
/*
Template Name: Home Page
*/
?>
<section id="hero" class="section"><!--START OF HERO-->
    <div id="branding" class="gu6 shadow">
		<a class="brand" href="<?php echo home_url(); ?>/"></a>
    </div>
        <div id="featured" class="gu10 shadow"> 
            <div id="top_slider" class="flexslider">
                <ul class="slides">
					<?php global $slide_mb;
                    if(isset($slide_mb)){
                    $slide_mb->the_meta(); 
                    $counter = 0;
                    while($slide_mb->have_fields('slide')){ ?>   
                    <li class="<?php if ($slide_mb->get_the_value('nofollow')) echo 'no_show';?>">
                        <div class="feat_img">
                        <a href="<?php echo $slide_mb->the_value('url'); ?>" target="">
                        <img src="<?php echo $slide_mb->the_value('image_src'); ?>" />
                        </a>
                        </div>
                        <div class="feat_teaser">
                        <h1 class=""><?php echo $slide_mb->the_value('headline'); ?></h1>
                        <p class=""><?php echo $slide_mb->the_value('caption'); ?></p>
                        </div>
                    </li>
                    <?php } } ?>  
                </ul>
            </div>        
        </div>
    <div id="newsletter" class="gu6 shadow">
        <div class="padding">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('newsletter') ) ?>
        </div>
    </div>
</section><!--END HERO-->
<section id="latest" class="section"><!--START LATEST-->
    <div id="recent" class="gu6 shadow">  
        <div class="padding">
            <h1 id="news-header">Blog Posts</h1>
              <?php get_template_part('templates/recent'); ?>
        </div> 
    </div>    
    <div id="tweets" class="gu6 shadow">
        <div class="padding">
            <h1 class="updates">Updates</h1>
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('twitter') ) ?>
        </div>        
    </div>
    <?php get_template_part('templates/sidebar-page'); ?>
</section><!--END LATEST-->