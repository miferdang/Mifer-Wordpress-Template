<?php

// Add New Post Type Design Products
function register_products()  {
  $label = array(
    'name' => 'Products',
    'singular_name' => 'product',
    'add_new' => __('Add New', 'custom post type item'), /* The add new menu item */
    'add_new_item' => __('Add New'), /* Add New Display Title */
    'edit' => __( 'Edit' ), /* Edit Dialog */
    'edit_item' => __('Edit'), /* Edit Display Title */
    'new_item' => __('New '), /* New Display Title */
    'view_item' => __('View'), /* View Display Title */
    'search_items' => __('Search news'), /* Search Custom Type Title */
    'not_found' =>  __('Nothing found in the Database.'), /* This displays if there are no entries yet */
    'not_found_in_trash' => __('Nothing found in Trash'), /* This displays if there is nothing in the trash */
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $label,
    'description' => 'My products post type',
    'supports' => array(
      'title','editor','excerpt','author','thumbnail','comments','trackbacks','revisions','custom-fields'
    ),
    'taxonomies' => array( 'category'),
    'hierarchical' => false, //false when it's same with post and true if it same with page
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true, //Display on Appearance -> Menus
    'show_in_admin_bar' => true, //Show mini top menu admin
    'menu_position' => 5,
    'query_var' => true,
    //'menu_icon' => '',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'supports' => array( 'title', 'editor', 'thumbnail')
    );
    register_post_type('products', $args);
}
add_action('init', 'register_products');

/* Display list post type products with default post for category */
function display_products($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'products'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}
add_filter('pre_get_posts', 'display_products');

?>
