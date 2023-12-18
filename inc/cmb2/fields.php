<?php

// Servicee Meta Box

function biziver_service_fileds()
{
    $Services = new_cmb2_box(array(
        'id' => 'meta-services',
        'title' => esc_html(__('Services Icon', 'biziver')),
        'object_types'  => array('biziver-services'),
        //'context' => 'advanced',
        //'priority' => 'high'

    ));

    $Services->add_field(array(
        'id' => 'services_icon',
        'name' => __('Services Icon', 'biziver'),
        'desc' => __('Input Your Icon Class Name'),
        'type' => 'text',
    ));

    $Services->add_field(array(
        'id' => 'services_text',
        'name' => __('Services Text', 'biziver'),
        'desc' => __('Input Your Text'),
        'type' => 'textarea',
    ));
};

add_action('cmb2_admin_init', 'biziver_service_fileds');

// Testimonial Meta Box

function biziver_testimonail_fileds()
{
    $testimonail = new_cmb2_box(array(
        'id' => 'meta-testimonail',
        'title' => esc_html(__('Client Job Tittle', 'biziver')),
        'object_types'  => array('biziver-testimonial'),
        //'context' => 'advanced',
        //'priority' => 'high'

    ));

    $testimonail->add_field(array(
        'id' => 'testimonail_name_title',
        'name' => __('Client Name', 'biziver'),
        'desc' => __('Input Your Name'),
        'type' => 'text',
    ));
    $testimonail->add_field(array(
        'id' => 'testimonail_job_title',
        'name' => __('Job Title', 'biziver'),
        'desc' => __('Input Your Job Title Name'),
        'type' => 'text_medium',
    ));
};

add_action('cmb2_admin_init', 'biziver_testimonail_fileds');


// Teams Meta boxes


function biziver_teams_fileds()
{
   $teams = new_cmb2_box(array(
        
            'id'            => 'metabox_attachment',
            'title'         => 'Social',
            'object_types'  => ['biziver_teams'], // Post type
            'priority'      => 'high',
            'show_names'    => true
        

   ));

    // teams Cmb2 Meta box
    $teams->add_field(array(
        'id'          => 'social_repeat_group',
        'type'        => 'group',
        'description' => __('You Can Only 4 Social link Add Here', 'biziver'),
        'repeatable'  => true,
        'options'     => array(
            'group_title'       => __('Social {#}', 'biziver'),
            'add_button'        => __('Add Another Social', 'biziver'),
            'remove_button'     => __('Remove Social', 'biziver'),
            'sortable'          => true,
        ),
    ));
    $teams->add_group_field( 'social_repeat_group', array(
		'name' => 'Social Icon Class Name',
		'id'   => 'social_icon',
		'type' => 'text',		
		 'sortable' => true,
         'limit'         => 4
	) );
    $teams->add_group_field( 'social_repeat_group', array(
		'name' => 'Social Link',
		'id'   => 'social_link',
		'type' => 'text',		
		 'sortable' => true,
         'limit'         => 4
	) );

};

add_action('cmb2_admin_init', 'biziver_teams_fileds');



// Portfollio Meta Box
function biziver_portfollio_fileds()
{
    $portfollio = new_cmb2_box(array(
        'id' => 'meta-portfollio',
        'title' => esc_html(__('Project Video', 'biziver')),
        'object_types'  => array('biziver-portfolio'),
        
    ));

    $portfollio->add_field(array(
        'id' => 'project-video',
        'name' => __('Project Video', 'biziver'),
        'desc' => __('Input Your Project Video'),
        'type' => 'oembed',
    ));
};

add_action('cmb2_admin_init', 'biziver_portfollio_fileds');

