<?php
/*
Template Name: Program Parent Page
*/
?>
<div id="prog_page">
<?php get_template_part('templates/page', 'custom-header'); ?>
    <div id="pg_main" class="gu16">
	 <?php get_template_part('templates/page', 'subpagenav'); ?>   
        <div class="tabbed-page-content clearfix shadow"> 
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
                        <article>
                        <h3><?php echo get_the_title(); ?></h3>
						<?php if( get_the_post_thumbnail() ) { ?>
                        <div class=""><?php the_post_thumbnail();?></div>
                        <?php } ?>
                        <?php the_content(); ?>
                        <a class="prog-permalink" title="<?php the_permalink() ?>" href="<?php the_permalink() ?>">View printable page</a>   
                        </article>
                        <?php get_template_part('templates/sidebar-program'); ?>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
                </div><!--SLIDE CONTAINER--> 
            </div><!--END TAB CONTAINER-->
        </div><!--END TABBED PAGE-->
    </div><!--END PG MAIN-->
</div><!--END PAGE-->