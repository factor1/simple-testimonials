<?php
/*
* Custom functions 
*
*/

// Custom Excerpt function for Advanced Custom Fields (For Tesimonials Excerpts)
function simple_testimonials_excerpt($field, $words = 55) {
  global $post;
  if ( '' != $field ) {
    $field = strip_shortcodes( $field );
    $field = apply_filters('the_content', $field);
    $field = str_replace(']]&gt;', ']]&gt;', $field);
    $excerpt_length = $words;
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $text = wp_trim_words( $field, $excerpt_length, $excerpt_more );
  }
  return apply_filters('the_excerpt', $field);
} ?>
