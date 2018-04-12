<?php

// Remove unnecessary css files from wp_head()
function remove_styles_files() {
  wp_deregister_style( 'dashicons' );
  wp_deregister_style( 'addmin-bar');
};
add_action( 'wp_print_styles', 'remove_styles_files' );

// Remove unnecessary script files from wp_head()
function remove_scripts_files() {
  remove_action('wp_head', '_admin_bar_bump_cb');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action ('wp_head', 'rsd_link');
  remove_action( 'wp_head', 'wlwmanifest_link');
  remove_action( 'wp_head', 'wp_shortlink_wp_head');
  remove_action('wp_head', 'wp_generator');
}
add_action('get_header', 'remove_scripts_files');

// Remove admin bar in wp_footer()
add_action( 'wp_head', 'remove_admin_bar_footer' );
function remove_admin_bar_footer(){
  remove_action('wp_footer', 'wp_admin_bar_render', 1000);
}
