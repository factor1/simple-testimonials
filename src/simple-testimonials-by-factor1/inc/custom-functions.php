<?php
/*
* Custom functions
*
*/

// Custom Excerpt function for Advanced Custom Fields (For Tesimonials Excerpts)
function simple_testimonials_excerpt($field, $words = 55) {
  global $post;
  $text = $field;
  if ( '' != $text ) {
    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]&gt;', ']]&gt;', $text);
    $excerpt_length = $words;
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
  }
  return apply_filters('the_excerpt', $text);
}  ?>
