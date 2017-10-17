<?php
// Default Social Media Grid Large Item Group
//   Type:
//     Video Image
//     Facebook Image
//     Youtube Image
//     Facebook Text
//     Facebook Text Wide
//     Article Text
// 
//   Image
//   URL
//   Social Type
// 
//   Title - only applicable to 
//   Copy - only applicable to 


  function cmb2_register_kafnu_event_metabox() {
    /**
     * Metabox to save the 'status' where 'Internal' is the default.
     */
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'kafnu_event_metabox',
        'title'        => 'Kafnu Event Fields',
        'object_types' => array( 'kafnu-event', ),
    ) ); 

    $field_2 = $cmb->add_field( array(
        'name'    => 'Event Image',
        'id'      => PREFIX . 'kafnu_event_image',
        'type'    => 'file',
        'description' => 'jpg',
    ) );

    $field_4 = $cmb->add_field( array(
        'name'    => 'Event Time',
        'id'      => PREFIX . 'kafnu_event_time',
        'type'    => 'text',
        'description' => '(only applicable to text types)',
        'sanitization_cb' => false,
    ) );

    $field_5 = $cmb->add_field( array(
        'name'    => 'Event Copy',
        'id'      => PREFIX . 'kafnu_event_copy',
        'type'    => 'textarea',
        'description' => '',
        'sanitization_cb' => false,
    ) );




    


  }
  add_action( 'cmb2_admin_init', 'cmb2_register_kafnu_event_metabox' , 2);
?>