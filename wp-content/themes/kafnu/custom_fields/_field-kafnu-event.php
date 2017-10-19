<?php
  
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
        'description' => '',
        'sanitization_cb' => false,
    ) );

    $field_5 = $cmb->add_field( array(
        'name'    => 'Event Location',
        'id'      => PREFIX . 'kafnu_event_location',
        'type'    => 'text',
        'description' => '',
        'sanitization_cb' => false,
    ) );

    $field_6 = $cmb->add_field( array(
        'name'    => 'Event Copy',
        'id'      => PREFIX . 'kafnu_event_copy',
        'type'    => 'textarea',
        'description' => '',
        'sanitization_cb' => false,
    ) );


    

  }
  add_action( 'cmb2_admin_init', 'cmb2_register_kafnu_event_metabox' , 2);
?>