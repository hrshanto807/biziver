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
  // heading right time
  CSF::createSection(
    $prefix,
    array(
      'title' => 'Open To Close Time',
      'parent' => 'biziver_genarel',
      'fields' => array(
        // time Icon seting
        array(
          'id' => 'heading_time_icon',
          'title' => 'Time Icon',
          'type' => 'icon'

        ),
        // Time and date setting
        array(
          'id' => 'heading_time_date',
          'title' => 'Date And Time Set',
          'type' => 'text'

        )
      )
    )
  );
  //
  // heading right Email
  CSF::createSection(
    $prefix,
    array(
      'title' => 'Email',
      'parent' => 'biziver_genarel',
      'fields' => array(
        // time Icon seting
        array(
          'id' => 'heading_email_icon',
          'title' => 'Email Icon',
          'type' => 'icon'

        ),
        // Time and date setting
        array(
          'id' => 'email_set_heading',
          'title' => 'Email Set',
          'type' => 'text',
          'validate' => 'csf_validate_email',

        )
      )
    )
  );
  //
  // heading right pohne
  CSF::createSection(
    $prefix,
    array(
      'title' => 'Contact Number',
      'parent' => 'biziver_genarel',
      'fields' => array(
        // time Icon seting
        array(
          'id' => 'heading_number_icon',
          'title' => 'Number Icon',
          'type' => 'icon'

        ),
        // Time and date setting
        array(
          'id' => 'heading_number_set',
          'title' => 'Number Set',
          'type' => 'text',
          'validate' => 'csf_validate_numeric',

        )
      )
    )
  );
  //

  // Create a section soical
  CSF::createSection($prefix, array(
    'title'  => 'Socials',
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

  // Create a section logo
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
  // all title 
  CSF::createSection($prefix, array(
    'title'  => "All Page's Title",
    'id' => 'biziver_title'
  ));
  // Create a section  blog
  CSF::createSection($prefix, array(
    'title'  => 'Blog Title',
    'parent' => 'biziver_title',
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


  // Create a section faq
  CSF::createSection($prefix, array(
    'title'  => 'FAQ Title',
    'parent' => 'biziver_title',
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

  // Create a section service
  CSF::createSection($prefix, array(
    'title'      =>   'Service Title',
    'parent' => 'biziver_title',
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

  // Create a section testimonial
  CSF::createSection($prefix, array(
    'title'      =>   'Testimonial Title',
    'parent' => 'biziver_title',
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

  // Create a section professional team logo
  CSF::createSection($prefix, array(
    'title'      =>   (__("Team Page's Title", 'biziver')),
    'parent' => 'biziver_title',
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



  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'Front Page Background',
    'parent' => 'biziver_Background',
    'fields' => array(

      array(
        'id'    => 'biziver-hero-bg',
        'type'  => 'media',
        'title' => ' Hero Bacground Image Add',
      ),
      array(
        'id'    => 'biziver-testimonial-bg',
        'type'  => 'media',
        'title' => ' Testimonial Bacground Image Add',

      ),
      array(
        'id'    => 'biziver-team-bg',
        'type'  => 'media',
        'title' => ' Team Bacground Image Add',

      ),
      array(
        'id'    => 'biziver-aboutus-bg',
        'type'  => 'media',
        'title' => ' About Us Bacground Image Add',

      ),

    )
  ));

  // Subscribe Our newslatter!

  // Create a section
  CSF::createSection($prefix, array(
    'title'  => 'Newslatter',
    'id' => 'biziver_newslatter',
    'fields' => array(

      array(
        'id'    => 'biziver-newslatter-title',
        'type'  => 'text',
        'title' => 'Subscribe Our Newslatter Title',
      ),

    )
  ));

  // for mission

  //Create a section Mission

  CSF::createSection($prefix, array(
    'title'  => 'Misson Vission',
    'fields' => array(
      array(
        'id'          => 'biziver-missions-repeater',
        'type'        =>  'repeater',
        'title'       => 'Missions Profile',
        'button_title'       => 'Add Missions Profile',
        'fields'      => array(

          // A text field
          array(
            'id'    => 'biziver-missions-title',
            'type'  => 'text',
            'title' => 'Missions Title',
          ),
          array(
            'id'    => 'biziver-missions-textarea',
            'type'  => 'textarea',
            'title' => 'Missions Content',
          ),

        )
      )
    )
  ));
  //Create a section hero

  CSF::createSection(
    $prefix,
    array(
      'parent' => 'biziver_Background',
      'title'  => ' Front Page Hero Area',
      'fields' => array(
        // A text field
        array(
          'id'    => 'biziver-hero-subtitle',
          'type'  => 'text',
          'title' => ' SubTitle',
        ),
        // A text field
        array(
          'id'    => 'biziver-hero-title',
          'type'  => 'text',
          'title' => ' Title',
        ),
        // A textArea field     
        array(
          'id'    => 'biziver-hero-textarea',
          'type'  => 'textarea',
          'title' => 'Content',
        ),
        // A button field 

        array(
          'id'    => 'biziver-hero-button',
          'type'  => 'text',
          'title' => ' Content Button Class',
          'desc' => 'please Type Class Name From Bootstrap Button like (btn-secondary) Or type btn-fill/btn-fill-2'
        ),
        array(
          'id'    => 'biziver-hero-button_name',
          'type'  => 'text',
          'title' => 'Content Button',
          'desc' => 'please Type Button Name'
        ),

      )
    )
  );

  //Create a section About Us

  CSF::createSection(
    $prefix,
    array(
      'parent' => 'biziver_Background',
      'title'  => ' Front Page About Us',
      'fields' => array(
        // A text field
        array(
          'id'    => 'biziver-aboutus-link',
          'type'  => 'text',
          'title' => 'About Us Link',
        ),
        array(
          'id'    => 'biziver-aboutus-buttonimg',
          'type'  => 'media',
          'title' => 'About Us Button Image',
        ),
        // A text field
        array(
          'id'    => 'biziver-aboutus-title',
          'type'  => 'text',
          'title' => 'About Us Title',
        ),
        // A textArea field     
        array(
          'id'    => 'biziver-aboutus-textarea',
          'type'  => 'textarea',
          'title' => 'About Us Front Page Content',
        ),
        // A button field 

        array(
          'id'    => 'biziver-aboutus-button',
          'type'  => 'text',
          'title' => 'About Us Content Button Class',
          'desc' => 'please Type Class Name From Bootstrap Button like (btn-secondary) Or type btn-fill/btn-fill-2'
        ),
        array(
          'id'    => 'biziver-aboutus-button_name',
          'type'  => 'text',
          'title' => 'About Us Content Button',
          'desc' => 'please Type Button Name'
        ),
        array(
          'id'    => 'biziver-aboutus-title-2',
          'type'  => 'text',
          'title' => 'About Us TiTle Two',
          'desc' => 'please About Page Title'
        ),

        array(
          'id'    => 'biziver-aboutus-ceo_name',
          'type'  => 'text',
          'title' => 'About Us Member Name',
          'desc' => 'please Type Member Name'
        ),
        array(
          'id'    => 'biziver-aboutus-position',
          'type'  => 'text',
          'title' => 'About Us Member Position',
          'desc' => 'please Type Position Name'
        ),
      )
    )
  );

  // contact Form
  CSF::createSection(
    $prefix,
    array(
      'title'  => ' Contact Page',
      'fields' => array(
        // A textArea field     
        array(
          'id'    => 'biziver-contact-textarea',
          'type'  => 'textarea',
          'title' => 'Heading Content',
        ),

        // A text field
        array(
          'id'    => 'biziver-contact-title',
          'type'  => 'text',
          'title' => 'Contact link',
        ),

      )
    )
  );
}
