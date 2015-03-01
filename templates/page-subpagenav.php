    <div class="sub_page_nav clearfix shadow">
		<?php if ( is_page() ) { ?>
        <?php
        if($post->post_parent)
        $children = wp_list_pages('title_li=&child_of='.$post->post_parent.'&sort_column=menu_order&echo=0'); else
        $children = wp_list_pages('title_li=&child_of='.$post->ID.'&sort_column=menu_order&echo=0');
        if ($children) { ?>
        <ul class="child-pages">
        <?php echo $children; ?>
        </ul>
        <?php } } ?> 
    </div>  