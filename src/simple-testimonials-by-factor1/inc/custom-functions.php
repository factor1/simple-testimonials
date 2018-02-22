<?php
/*
Plugin Name: Simple Testimonials by Factor1
Plugin URI: https://github.com/factor1/simple-testimonials
Description: A simple & straight forward WordPress plugin that allows you to create testimonials with citations and categories.
Author: Eric Stout (Factor1)
Version: 0.1.1
Author URI: http://www.factor1studios.com
*/

/**
 * @package Simple_Testimonials
 * @version 0.1.1
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
