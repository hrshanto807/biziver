<?php

/**
 * Register Custom Post Type
 */
if (!defined('ABSPATH')) {
    exit;
}

function biziver_custom_posts()
{
    // register CPT FAQs
    register_post_type('biziver-faq', array(
        'labels'        =>  array(
            'name'            =>  __('FAQs', 'biziver'),
            'singular_name'   =>  __('FAQ', 'biziver'),
            'add_new'         =>  __('Add New FAQ', 'biziver'),
            'add_new_item'       =>  __('Add New Item FAQ', 'biziver'),
            'edit_item'       =>  __('Edit FAQ', 'biziver'),
            'view_item'       =>  __('View FAQ', 'biziver'),
            'view_items'       =>  __('View FAQ', 'biziver'),
            'new_items'       =>  __('New FAQ', 'biziver'),
            'not_found'       =>   __('Sorry! Not FAQs Found', 'biziver'),
            'item_published'  => __('View FAQs', 'biziver'),
            'item_updated'  => __('View FAQs', 'biziver'),
        ),
        'public'       =>  true,
        'supports'     =>  array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),
        'menu_icon'    =>  'dashicons-edit',
        'rewrite'     =>   array('slug' => 'faq'),
        'capability_type'     =>  'page',
        'menu_position'     =>  15,

    ));

    // Register CPT services 

    register_post_type('biziver-services', array(
        'labels'     => array(
            'name'             => esc_html(__('Services', 'biziver')),
            'singular_name'    => esc_html(__('service', 'biziver')),
            'add_new'          => esc_html(__('Add New Service', 'biziver')),
            'not_found'        => esc_html(__('not service found', 'biziver')),
            'add_new_item'     => esc_html(__('Add New Service', 'biziver')),
            'edit_item'        => esc_html(__('Edit Service', 'biziver')),
            'featured_image'   => esc_html(__('Service Image', 'biziver')),
            'set_featured_image' => esc_html(__('Set Service Image', 'biziver')),
            'remove_featured_image' => esc_html(__('Remove Service Image', 'biziver')),


        ),
        'public'     => true,
        'rewrite'    => array(
            'slug'               => 'services'
        ),
        'menu_icon'  =>  'dashicons-share',
        'capability_type' => 'page',
        'supports'     =>  array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),

    ));


    // Register CPT Testimonial
    register_post_type('biziver-testimonial', array(
        'labels'          => array(
            'name'             => esc_html(__('Testimonals', 'biziver')),
            'singular_name'    => esc_html(__('testimonial', 'biziver')),
            'add_new'          => esc_html(__('Add New Testimonial', 'biziver')),
            'not_found'        => esc_html(__('not found testimonial', 'biziver')),
            'edit_item'        => esc_html(__('Edit Testimonial', 'biziver')),
            'add_new_item'     => esc_html(__('Add New testimonial', 'biziver')),
            'featured_image'   => esc_html(__('Client Image', 'biziver')),
            'set_featured_image' => esc_html(__('Set Client Image', 'biziver')),
            'remove_featured_image' => esc_html(__('Remove Client Image', 'biziver')),

        ),
        'menu_icon'      => 'dashicons-slides',
        'rewrite'        => array(
            'slug'             => 'testimonail'
        ),
        'capability_type' => 'page',
        'public'         => true,
        'supports'   => array('title', 'editor', 'thumbnail')

    ));


    // Register CPT Teams
    register_post_type('biziver_teams', array(
        'labels'  =>  array(
            'name'             => esc_html(__('Teams', 'biziver')),
            'singular_name'    => esc_html(__('Team', 'biziver')),
            'add_new'          => esc_html(__('Add New Team', 'biziver')),
            'not_found'        => esc_html(__('not found Team', 'biziver')),
            'edit_item'        => esc_html(__('Edit Team', 'biziver')),
            'add_new_item'     => esc_html(__('Add New Team', 'biziver')),
            'featured_image'   => esc_html(__('Team Member Image', 'biziver')),
            'set_featured_image' => esc_html(__('Set Team Member Image', 'biziver')),
            'remove_featured_image' => esc_html(__('Remove Team Member Image', 'biziver')),
        ),
        'menu_icon'      => 'dashicons-groups',
        'rewrite'        => array(
            'slug'             => 'team'
        ),
        'capability_type' => 'page',
        'public'         => true,
        'supports'   => array('title', 'editor', 'thumbnail')
    ));
    // Register CPT Cases 

    register_post_type('biziver-cases', array(
        'labels'     => array(
            'name'             => esc_html(__('Cases', 'biziver')),
            'singular_name'    => esc_html(__('Case', 'biziver')),
            'add_new'          => esc_html(__('Add New Case', 'biziver')),
            'not_found'        => esc_html(__('not Case found', 'biziver')),
            'add_new_item'     => esc_html(__('Add New Case', 'biziver')),
            'edit_item'        => esc_html(__('Edit Case', 'biziver')),
           

        ),
        'public'     => true,
        'rewrite'    => array(
            'slug'               => 'case'
        ),
        'menu_icon'  =>  'dashicons-editor-spellcheck',
        'capability_type' => 'page',
        'supports'     =>  array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),

    ));
};
add_action('init', 'biziver_custom_posts');
