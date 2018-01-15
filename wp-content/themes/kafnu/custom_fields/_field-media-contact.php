<?php 
  function cmb2_register_media_contact_metabox() {
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'media_contact_metabox',
        'title'        => 'Media Contact Fields',
        'object_types' => array( 'media-contact', ),
    ) ); 

    $field_1 = $cmb->add_field( array(
        'name'    => 'Name',
        'id'      => PREFIX . 'name',
        'type'    => 'text',
        'description' => '',
    ) );

    $field_2 = $cmb->add_field( array(
        'name'    => 'Position',
        'id'      => PREFIX . 'position',
        'type'    => 'text',
        'description' => '',
    ) );

    $field_3 = $cmb->add_field( array(
        'name'    => 'Number',
        'id'      => PREFIX . 'number',
        'type'    => 'text',
        'description' => '',
    ) );

    $field_4 = $cmb->add_field( array(
        'name'    => 'Email Address',
        'id'      => PREFIX . 'email_address',
        'type'    => 'text',
        'description' => '',
    ) );

    $field_0 = $cmb->add_field( array(
        'name'    => 'Location',
        'id'      => PREFIX . 'location',
        'type'    => 'text',
        'description' => '(optional) used as a subtitle. Not used in location filter, we are using category as a location filter',
    ) );

    //       ____ ____  ___ ____   
    //      / ___|  _ \|_ _|  _ \   
    //     | |  _| |_) || || | | |   
    //     | |_| |  _ < | || |_| |   
    //      \____|_| \_\___|____/   
    //

    if(!is_admin()){
      return;
    }

    $cmb2Grid = new \Cmb2Grid\Grid\Cmb2Grid($cmb);


    // SECTION_NAME_01

    $row = $cmb2Grid->addRow();
    $row->addColumns(array(
        array($field_0, 'class' => 'col-md-6'),
    ));
    
    $row = $cmb2Grid->addRow();
    $row->addColumns(array($field_1, $field_2));

    $row = $cmb2Grid->addRow();
    $row->addColumns(array($field_3, $field_4));

    // SECTION_NAME_02
    

  }

  add_action( 'cmb2_admin_init', 'cmb2_register_media_contact_metabox' , 2);
?>