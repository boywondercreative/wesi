<section id="pg_header" class="section">
    <div id="branding" class="gu6 shadow">
		<a class="brand" href="<?php echo home_url(); ?>/"></a>
    </div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="pg_title gu10 shadow">
            <h1><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?><?php /*?><?php the_title(); ?><?php */?></h1> 
        </div> 
    <?php endwhile; endif; ?>  
</section>
