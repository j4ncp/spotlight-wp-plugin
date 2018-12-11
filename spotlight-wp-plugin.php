<?php
/*
Plugin Name: Spotlight WP Plugin
Description: Customizes Wordpress for the spotlight blog.
Version: 0.1
Author: Jan C Peters
Text Domain: slwp-plugin
*/


include 'php/location.php';



# add 'locations' column to admin view
add_filter('manage_posts_columns', 'add_locations_column');

function add_locations_column($headers) {
  $headers['location'] = 'Location';
  return $headers;
}

# fill column with content
add_action('manage_posts_custom_column', 'location_column_content', 10, 2);

function location_column_content($colname, $postid) {
  if ($colname == 'location') {
    echo get_the_term_list($postid, 'location', '', ', ', '');
  }
}
