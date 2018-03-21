<?php // Register Custom Tags Taxonomy
function simple_testimonials_tags() {

	$labels = array(
		'name'                       => _x( 'Tags', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Tags', 'text_domain' ),
		'all_items'                  => __( 'All Tags', 'text_domain' ),
		'parent_item'                => __( 'Parent Tag', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Tag:', 'text_domain' ),
		'new_item_name'              => __( 'New Tag Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Tag', 'text_domain' ),
		'edit_item'                  => __( 'Edit Tag', 'text_domain' ),
		'update_item'                => __( 'Update Tag', 'text_domain' ),
		'view_item'                  => __( 'View Tag', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Tags with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Tags', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Tags', 'text_domain' ),
		'search_items'               => __( 'Search Tags', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Tags', 'text_domain' ),
		'items_list'                 => __( 'Tags list', 'text_domain' ),
		'items_list_navigation'      => __( 'Tags list navigation', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'testimonial-tag',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'simple_testimonials_tags', array( 'simple_testimonials' ), $args );

}
add_action( 'init', 'simple_testimonials_tags', 0 );
