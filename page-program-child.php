<?php
/*
Template Name: Program Child Page
*/
?>
<div id="page">
    <section id="pg_header" class="section">
        <div id="branding" class="gu6 shadow">
            <a class="brand" href="<?php echo home_url(); ?>/"></a>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="pg_title gu10 shadow">
                <h1><?php the_title(); ?></h1> 
            </div> 
        <?php endwhile; endif; ?>  
    </section>
    <div id="pg_main" class="gu12">
        <div class="page-content clearfix shadow"> 
        <h3><?php the_title(); ?></h3>
            <?php get_template_part('templates/content', 'page'); ?>
            <?php get_template_part('templates/sidebar-program'); ?>
        </div>
    </div><!--END PAGE MAIN-->
    <?php get_template_part('templates/sidebar-page'); ?>
</div><!--END PAGE-->