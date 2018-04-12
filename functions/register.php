<?php

// Register Style CSS Files
function register_scripts_files() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'main', get_template_directory_uri(). '/css/dest/main.css');
};
add_action( 'wp_enqueue_scripts', 'register_scripts_files' );

// Register Navbar
function register_navbar() {
  register_nav_menus(
    array(
      'navbar' => __( 'Navbar' ),
      'article_menu' => __( 'Article Menu' ),
      'product_menu' => __( 'Product Menu' )
    )
  );
};
add_action('init', 'register_navbar');

//Register sidebar
function register_sidebar_dynamic() {
  register_sidebar( array(
    'name' => __( 'Sidebar Primary'),
    'id'   => 'sidebar-primary',    // ID should be LOWERCASE  ! ! !
  ));
};
add_action('widgets_init', 'register_sidebar_dynamic');

// Modify excerpt length
function modify_excerpt_length( $length ) {
  return 24;
};
add_filter('excerpt_length', 'modify_excerpt_length', 24);

// Modify excerpt more
function modify_excerpt_more( $more ) {
  return ' ... <a class="read-more" href="'. get_permalink() . '">' . __('Xem thêm') . '</a>';
};
add_filter( 'excerpt_more', 'modify_excerpt_more' );

// Thumbnail for each post
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 340, 250, true );
  add_image_size( 'category-thumb', 340, 9999 ); //300 pixels wide (and unlimited height)
};

?>
