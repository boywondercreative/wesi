<?php
/*
Template Name: Redirect To First Child
*/
if (have_posts()) {
  while (have_posts()) {
    the_post();
    $pagekids = get_pages("child_of=".$post->ID."&sort_column=menu_order");
    $firstchild = $pagekids[0];
    wp_redirect(get_permalink($firstchild->ID));
  }
}
?>

<?php /*?><?php
global $post;
$postChildren = get_children(array(
    'numberposts' => 1,
    'orderby' => 'menu_order,title',
    'order' => 'ASC',
    'post_type' => 'page',
    'post_status' => 'publish',
    'post_parent' => $post->ID
    ));
wp_redirect(get_permalink(array_pop($postChildren)->ID),301);
?><?php */?>