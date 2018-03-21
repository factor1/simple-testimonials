<?php
/*
Plugin Name: Simple Testimonials by Factor1
Plugin URI: https://github.com/factor1/simple-testimonials
Description: A simple & straight forward WordPress plugin that allows you to create testimonials with citations and categories.
Author: Factor1 Studios
Version: 1.0.0
Author URI: http://www.factor1studios.com
*/

/**
 * @package Simple_Testimonials
 * @version 1.0.0
 */

// Include ACF
include_once( 'vendor/acf-pro/acf.php' );

// Get the ACF field group for the Staff plugin.
include('fields.php');

// Get custom functions for the plugin
include('inc/custom-functions.php');

// Include the Custom Post Type
include('inc/post-type.php');

// Include the Custom Post Type Taxonomy
include('inc/taxonomy.php');
