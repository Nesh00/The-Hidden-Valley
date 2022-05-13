<?php 

function theme_support() {

  $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);

  add_theme_support( 'custom-background', $defaults );
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'theme_support' );


function menus() {

  $locations = array(
    'primary' => 'Desktop navbar',
    'social' => 'Social links',
  );

  register_nav_menus($locations);
}
add_action('init', 'menus');


function styles() {
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/dist/css/bootstrap.css', array(), '5.0', 'all');
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/dist/css/style.css', array('bootstrap'), '1.0.0', 'all'); 
}
add_action( 'wp_enqueue_scripts', 'styles' );


function scripts() {
  wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/assets/dist/js/bootstrap.js', array(), '5.0', 'all');
  wp_enqueue_script('javascript', get_stylesheet_directory_uri() . '/assets/dist/js/app.js', array('bootstrap'), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'scripts' );

function widget_areas() {

  register_sidebar(
    array(
      'before_title' => '<div class="text-light">',
      'after_title' => '</div>',
      'before_widget' => '',
      'after_widget' => '',
    ),
    array(
      'name' => 'Custom post',
      'id' => 'custom-post',
      'description' => 'Custom post area',
    )
  );
}
add_action('widgets_init', 'widget_areas');

?>