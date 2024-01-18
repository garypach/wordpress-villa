<?php
function property_post_types()
{
    register_post_type('property', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'properties'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Properties',
            'add_new_item' => 'Add new property',
            'edit_item' => 'Edit property',
            'all_items' => 'All properties',
            'singular_name' => 'property',
        ),
    ));
}
add_action('init', 'property_post_types');
