<?php

// Return post entry meta information
//function roots_entry_meta() {
//  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'roots'), get_the_date(), get_the_time()) .'</time>';
//  echo '<p class="byline author vcard">'. __('Written by', 'roots') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
//}

// return post entry meta information
function roots_entry_meta() {
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s ', 'roots'), get_the_date()) .'</time>';
  echo '<p class="byline author vcard">'. __('Written by', 'roots') .' <a href="'. get_author_posts_url(get_the_author_meta('id')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}

// return post entry meta information
function shawn_entry_meta() {
  echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s ', 'roots'), get_the_date()) .'</time>';
}

// return post entry meta information
function shawn_show_one_cat() {
		$category = get_the_category();
        if ($category) {
          echo '<p class="category"> Posted in <a href="' . get_category_link( $category[0]->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category[0]->name ) . '" ' . '>' . $category[0]->name.'</a> '. sprintf(__(' on %s ', 'roots'), get_the_date()) .'</p>';}
}

// return post entry meta information
function recent_meta() {
		$category = get_the_category();
        if ($category) {
          echo '<p class="category"> Posted in '.$category[0]->name.' '. sprintf(__(' on %s ', 'roots'), get_the_date()) .'</p>';}
}