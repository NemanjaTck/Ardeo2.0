<?php

function custom_post_types () {
    // Portfolio post type
    register_post_type('portfolio', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array(
            'slug' => 'portfolio'
        ),
        'public' => true,
        'labels' => array(
            'name' => 'Portfolio',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'Project'
        ),
        'menu_icon' => 'dashicons-schedule'
    ));

    // Slideshow post type
    register_post_type('slideshow', array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array(
            'slug' => 'slideshow'
        ),
        'public' => true,
        'labels' => array(
            'name' => 'Slideshow',
            'add_new_item' => 'Add New Slide',
            'edit_item' => 'Edit Slide',
            'all_items' => 'All Slides',
            'singular_name' => 'Slide'
        ),
        'menu_icon' => 'dashicons-camera'
    ));
}

add_action('init', 'custom_post_types');
