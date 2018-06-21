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
        'menu_icon' => 'dashicons-carrot'
    ));
}

add_action('init', 'custom_post_types');
