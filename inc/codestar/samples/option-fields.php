<?php 
// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'biziver_framwork';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Options',
    'menu_slug'  => 'biziver-framework',
    'framework_title' => __('Biziver Options' , 'biziver')
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 1',
    'fields' => array(

      //
      // A text field
      array(
        'id'    => 'opt-text',
        'type'  => 'text',
        'title' => 'Heading Fure',
      ),

    )
  ) );

  //
  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => 'Tab Title 2',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-texttwo',
        'type'  => 'text',
        'title' => 'Heading Two',
      ),

    )
  ) );

}