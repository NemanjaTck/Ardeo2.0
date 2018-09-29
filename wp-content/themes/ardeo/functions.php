<?php

function ardeo_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/ardeo.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'ardeo_script_enqueue');