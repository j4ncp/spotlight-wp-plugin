<?php
/*
Handles everything regarding the location taxonomy.
*/

# taxonomy definition
add_action('init', 'define_location_taxonomy');

function define_location_taxonomy() {
  # GUI labels
  $labels = array(
    'name'              => __('Locations', 'slwp_plugin'),
    'singular_name'     => __('Location', 'slwp_plugin'),
    'search_items'      => __('Search Locations', 'slwp_plugin'),
    'all_items'         => __('All Locations', 'slwp_plugin'),
    'parent_item'       => __('Wider area', 'slwp_plugin'),
    'parent_item_colon' => __('Wider area:', 'slwp_plugin'),
    'edit_item'         => __('Edit Location', 'slwp_plugin'),
    'update_item'       => __('Change Location', 'slwp_plugin'),
    'add_new_item'      => __('Add New Location', 'slwp_plugin'),
    'menu_name'         => __('Locations', 'slwp_plugin'),
    'view_item'         => __('View Locations', 'slwp_plugin')
  );

  # properties
  $args = array(
    'labels'       => $labels,
    'hierarchical' => true,
    'public'       => true,
    'show_ui'      => true,
    'query_var'    => true,
    'show_in_rest' => true
  );

  # register the taxonomy. Locations only apply to posts.
  register_taxonomy('location', 'post', $args);
}


