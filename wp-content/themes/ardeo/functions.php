<?php

function ardeo_script_enqueue() {
  wp_enqueue_script( 'sui-script', get_stylesheet_directory_uri() . '/semantic/dist/semantic.min.js', array('jquery'), false, true );
  wp_enqueue_style( 'sui-style', get_stylesheet_directory_uri() . '/semantic/dist/semantic.min.css' );
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/ardeo.css', array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/ardeo.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ardeo_script_enqueue');

function ardeo_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Navigation');
  register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'ardeo_theme_setup');

