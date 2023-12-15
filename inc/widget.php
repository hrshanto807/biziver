<?php
if (!defined('ABSPATH')) {exit;}

function bizibver_widget_init()
{
    register_sidebar(array(
        'name'    =>   esc_html(__('Single Post Widget', 'biziver')),
        'id'      =>   'sidebar-1',
        'description'    =>    esc_html(__('Widgets in this area will be shown under your single posts, before comments.', 'biziver')),
        'before_widget'    => '<div class="single-sidebar">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3>',
        'after_title'    => '</h3>',
    ));
};
add_action('widgets_init', 'bizibver_widget_init');
