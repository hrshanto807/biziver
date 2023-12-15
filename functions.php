<?php
define('BIZIVER_TEMPLATE_DIR', get_template_directory());




// genaral function biziver
function biziver_general()
{
    load_theme_textdomain('biziver', get_theme_file_uri('lang'));
    register_nav_menu('biziver_main_menu', esc_html(__('Header Menu', 'biziver')));
    register_nav_menu('biziver_second_menu', esc_html(__('Footer Menu', 'biziver')));
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-link');
    add_theme_support('htm5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support('post-thumbnails');
    add_image_size('biziver-blog-thumb', 350, 210, true);
    add_image_size('biziver-single-thumb', 730, 430, true);
    add_image_size('biziver-testimonial-thumb', 60, 60, false);
    add_image_size('biziver-team-thumb', 255, 290, false);
    add_image_size('biziver-case-thumb', 480, 480, false);
};
add_action('after_setup_theme', 'biziver_general');

// wp_customize header area

function biziver_header_area_customize($wp_customize)
{
    // // customize logo area
    // $wp_customize->add_section('biziver_header_-section', array(
    //     'title' => esc_html(__('Header Logo', 'biziver')),
    //     'description'  => 'If you intersested to upload your logo, you can do it here.',
    // ));

    // $wp_customize->add_setting('biziver_logo_area', array(
    //     'default' => get_theme_file_uri('/assets/images/logo.png')
    // ));

    // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'biziver_logo_area', array(
    //     'label'    =>  esc_html(__('Logo Upload', "biziver")),
    //     'section'  =>  'biziver_header_-section',
    //     'setting'  =>  'biziver_logo_area'


    // )));


    // header menu postitioon area customize

    $wp_customize->add_section('header_position_area', array(
        'title'        =>  esc_html(__('Header Position', 'biziver')),
        'description'  => 'If you intersested to update your area, you can do it here.'
    ));

    $wp_customize->add_setting('header_option_area', array(
        'default'    =>  'right_menu'
    ));
    $wp_customize->add_control('header_option_area', array(
        'label'    =>   esc_html(__('Position Option', 'biziver')),
        'section'  =>  'header_position_area',
        'setting'  =>  'header_option_area',
        'type'     =>   'radio',
        'choices'  =>  array(
            'left_menu'   =>  esc_html(__('Left Menu', 'biziver')),
            'right_menu'   =>  esc_html(__('Right Menu', 'biziver')),
            'center_menu'   =>  esc_html(__('Center Menu', 'biziver')),
        )
    ));
};
add_action('customize_register', 'biziver_header_area_customize');

// Enqueue Scripts
function biziver_all_scripts()
{

    // All Stylesheet
    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'));
    wp_enqueue_style('fontawesome', get_theme_file_uri('assets/css/all.min.css'));    
    wp_enqueue_style('fontawesome', get_theme_file_uri('assets/css/font-awesome.min.css'));    
    wp_enqueue_style('magnific-popup', get_theme_file_uri('assets/css/magnific-popup.css'));
    wp_enqueue_style('jquery-ui', get_theme_file_uri('assets/css/jquery-ui.css'));
    wp_enqueue_style('animate', get_theme_file_uri('assets/css/animate.css'));
    wp_enqueue_style('owl-carouse', get_theme_file_uri('assets/css/owl.carousel.min.css'));
    wp_enqueue_style('biziver-main-css', get_theme_file_uri('assets/css/main.css'));
    wp_enqueue_style('biziver-stylesheet', get_theme_file_uri('style.css'));


    // all js Scripts
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('popper', get_theme_file_uri('assets/js/popper.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('owl-carousel', get_theme_file_uri('assets/js/owl.carousel.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('magnific-popup', get_theme_file_uri('assets/js/magnific-popup.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);

    wp_enqueue_script('isotope', get_theme_file_uri('assets/js/isotope.pkgd.min.js'), array('jquery', 'imagesloaded'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('waypoints', get_theme_file_uri('assets/js/waypoints.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('counterup', get_theme_file_uri('assets/js/jquery.counterup.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('wow', get_theme_file_uri('assets/js/wow.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('scrollUp', get_theme_file_uri('assets/js/scrollUp.min.js'), array('jquery'), wp_get_theme()->get('Version'), true);
    wp_enqueue_script('biziver-script', get_theme_file_uri('assets/js/script.js'), array('jquery'), wp_get_theme()->get('Version'), true);
};

add_action('wp_enqueue_scripts', 'biziver_all_scripts');


// A Custom function for get an option
if (!function_exists('biziver_get_option')) {
    function biziver_get_option($option = '', $default = null)
    {
        $options = get_option('biziver_framwork'); // Attention: Set your unique id of the framework
        return (isset($options[$option])) ? $options[$option] : $default;
    }
}

// Allow Tag 
function biziver_allow_tags()
{
    $allow_tags = array(
        'br'  => array(),
    );
    return $allow_tags;
};
// vhnage palceholder title
function biziver_change_placeholder_title($title)
{
    $post_type = get_post_type();
    if ('biziver-services'==$post_type) {
        $title = 'Service Title';
        return $title;
    };
    if ('biziver-faq'==$post_type) {
        $title = 'FAQs Title';
        return $title;
    };
    if ( 'biziver-testimonial'==$post_type) {
        $title = 'Testimonial Title';
        return $title;
    };
    if ('biziver_teams'==$post_type) {
        $title = 'Team Title';
        return $title;
    };
    if ('biziver-cases'==$post_type) {
        $title = 'Case Title';
        return $title;
    };
   
};
add_filter('enter_title_here', 'biziver_change_placeholder_title');

// Aditinals files
require_once BIZIVER_TEMPLATE_DIR . '/inc/breadcrumbs.php';
// register custom post type
require_once BIZIVER_TEMPLATE_DIR . '/inc/custom-post.php';
// codestar-framework
require_once BIZIVER_TEMPLATE_DIR . '/inc/codestar/codestar-framework.php';
require_once BIZIVER_TEMPLATE_DIR . '/inc/codestar/samples/option-fields.php';

// sidebar
require_once BIZIVER_TEMPLATE_DIR . '/inc/widget.php';
require_once BIZIVER_TEMPLATE_DIR . '/inc/cmb2/init.php';
require_once BIZIVER_TEMPLATE_DIR . '/inc/cmb2/fields.php';
