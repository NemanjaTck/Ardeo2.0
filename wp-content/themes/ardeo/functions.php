<?php

function ardeo_script_enqueue() {
  wp_enqueue_style('sui-style', get_stylesheet_directory_uri() . '/semantic/dist/semantic.min.css' );
  wp_enqueue_style('slick.css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', NULL);
  wp_enqueue_style('main_styles', get_theme_file_uri('/public/styles/styles.css'), NULL, microtime());

  wp_enqueue_script('jquery-min', 'https://code.jquery.com/jquery-3.3.1.min.js', NULL, false, true);
  wp_enqueue_script('sui-script', get_stylesheet_directory_uri() . '/semantic/dist/semantic.min.js', array('jquery'), false, true );
  wp_enqueue_script('slick.js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', NULL, false, true);
  wp_enqueue_script('main_scripts', get_theme_file_uri('/public/scripts/scripts.min.js'), NULL, microtime() , true);
}

add_action('wp_enqueue_scripts', 'ardeo_script_enqueue');

function ardeo_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'ardeo_theme_setup');
