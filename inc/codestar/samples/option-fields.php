<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

  //
  // Set a unique slug-like ID
  $prefix = 'biziver_framwork';

  //
  // Create options
  CSF::createOptions($prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'biziver-framework',
    'framework_title' => __('Biziver Options', 'biziver')
  ));

  // create a section
  CSF::createSection($prefix, array(
    'title'  => 'Genarel',
    'id' => 'biziver_genarel'
  ));
  //
  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'Social',
    'parent' => 'biziver_genarel',
    'fields' => array(
      array(
        'id'          => 'biziver-social-repeater',
        'type'        =>  'repeater',
        'title'       => 'Social Profile',
        'button_title'       => ' Add Social Profile',
        'fields'      => array(
          // A text field
          array(
            'id'    => 'biziver-social-icon',
            'type'  => 'icon',
            'title' => 'Social Icon',
          ),
          array(
            'id'    => 'biziver-social-link',
            'type'  => 'text',
            'title' => 'Social Link URL',
          ),
        )
      )
    )
  ));
  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'Logo',
    'parent' => 'biziver_genarel',
    'fields' => array(

      array(
        'id'    => 'biziver-homepage-logo',
        'type'  => 'media',
        'title' => 'Home Page Logo Set',
      ),
      array(
        'id'    => 'biziver-blogpage-logo',
        'type'  => 'media',
        'title' => 'Blog Page Logo Set',

      ),

    )
  ));
  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'Blog Title',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Heading Tag-4',

      ),
      // A textarea field
      array(
        'id'    => 'opt-texttwo',
        'type'  => 'text',
        'title' => 'Heading Tag-2',
      ),

    )
  ));


  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'FAQ Title',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'faq-textone',
        'type'  => 'text',
        'title' => 'Heading Tag-4',
        'default' => 'Frequently asked questions'
      ),
      // A textarea field
      array(
        'id'    => 'faq-texttwo',
        'type'  => 'text',
        'title' => 'Heading Tag-2',
        'default' => 'You Have Question Have Simple Answers'
      ),

    )
  ));

  // Create a section
  CSF::createSection($prefix, array(
    'title'      =>   'Service Title',
    'fields'     => array(
      // A textera field
      array(
        'id'     =>  'service-texthome',
        'type'   =>  'text',
        'title'  =>  'Service Title Home',
        'default' => 'Our Services'
      ),
      array(
        'id'     =>  'service-textone',
        'type'   =>  'text',
        'title'  =>  'Service Tag 2',
        'default' => 'Our process'
      ),
      // A textera field
      array(
        'id'     =>  'service-textarea',
        'type'   =>  'textarea',
        'title'  =>  'Service textarea',
        'default' => 'Lose away off why half led have near bed. At engage simple
        father of period others except'
      ),
    )
  ));

  CSF::createSection($prefix, array(
    'title'      =>   'Testimonial Title',
    'fields'     => array(
      // A textera field
      array(
        'id'     =>  'testi-textone',
        'type'   =>  'text',
        'title'  =>  'Testimonial Title One',
        'default' => 'Testimonials'
      ),
      // A textera field
      array(
        'id'     =>  'testi-texttwo',
        'type'   =>  'textarea',
        'title'  =>  'Testimonial Title Two',
        'default' => 'Customar Good Feedback'
      )
    )
  ));

  // Create a section
  CSF::createSection($prefix, array(
    'title'      =>   esc_html(__("Team Page's Title", 'biziver')),
    'fields'     => array(
      // A textera field
      array(
        'id'     =>  'team-textone',
        'type'   =>  'text',
        'title'  =>  'Teams Main Title',
        'default' => 'Professional Team'
      ),
      array(
        'id'     =>  'team-texttwo',
        'type'   =>  'textarea',
        'title'  =>  'Teams Main Pragraph',
        'default' => 'Lose away off why half led have near bed. At engage simple father of period others except.'
      ),
    )
  ));
  //Create a section

  CSF::createSection($prefix, array(
    'title'  => 'Partner Brand',
    'fields' => array(
      array(
        'id'          => 'biziver-brands-repeater',
        'type'        =>  'repeater',
        'title'       => 'Brands Profile',
        'button_title'       => ' Add Brands Profile',
        'fields'      => array(

          // A text field
          array(
            'id'    => 'biziver-brands-logo',
            'type'  => 'media',
            'title' => 'Brands Logo',
          ),

        )
      )
    )
  ));
  // create a section
  CSF::createSection($prefix, array(
    'title'  => 'Background',
    'id' => 'biziver_Background'
  ));

  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'Logo',
    'parent' => 'biziver_Background',
    'fields' => array(

      array(
        'id'    => 'biziver-hero-bg',
        'type'  => 'media',
        'title' => 'Fnont Page Hero BG Set',
      ),
      array(
        'id'    => 'biziver-testimonial-bg',
        'type'  => 'media',
        'title' => 'Fnont Page Testimonial BG Set',

      ),
      array(
        'id'    => 'biziver-team-bg',
        'type'  => 'media',
        'title' => 'Fnont Page Team BG Set',

      ),

    )
  ));

 
}
