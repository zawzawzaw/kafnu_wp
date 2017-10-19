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


  function cmb2_register_booking_item_metabox() {
    /**
     * Metabox to save the 'status' where 'Internal' is the default.
     */
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'booking_item_metabox',
        'title'        => 'Booking Item Fields',
        'object_types' => array( 'booking-item', ),
    ) ); 

    $field_2 = $cmb->add_field( array(
        'name'    => 'Booking Item Image',
        'id'      => PREFIX . 'booking_item_image',
        'type'    => 'file',
        'description' => 'jpg',
    ) );

    $field_2b = $cmb->add_field( array(
        'name'    => 'Booking Item Image',
        'id'      => PREFIX . 'booking_item_image_tablet',
        'type'    => 'file',
        'description' => 'jpg',
    ) );

    $field_2c = $cmb->add_field( array(
        'name'    => 'Booking Item Image',
        'id'      => PREFIX . 'booking_item_image_mobile',
        'type'    => 'file',
        'description' => 'jpg',
    ) );

    $field_3 = $cmb->add_field( array(
        'name'    => 'Booking Item Title',
        'id'      => PREFIX . 'booking_item_title',
        'type'    => 'text',
        'description' => '',
        'sanitization_cb' => false,
    ) );

    $field_4 = $cmb->add_field( array(
        'name'    => 'Booking Item Copy',
        'id'      => PREFIX . 'booking_item_copy',
        'type'    => 'textarea',
        'description' => '',
        'sanitization_cb' => false,
    ) );    

    $group_field_id = $cmb->add_field( array(
        'id'          => PREFIX . 'booking_item_URLs',
        'type'        => 'group',
        'options'     => array(
          'group_title'   => esc_html__( 'Booking Item URLs {#}', 'cmb2' ), // {#} gets replaced by row number
          'add_button'    => esc_html__( 'Add Another Booking URL', 'cmb2' ),
          'remove_button' => esc_html__( 'Remove Booking URL', 'cmb2' ),
          'sortable'      => true, // beta
          'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $field_5 = $cmb->add_group_field( $group_field_id, array(
        'name'    => 'Booking Item Price',
        'id'      => PREFIX . 'booking_item_price',
        'type'    => 'text',
        'description' => ''
    ) );  

    $field_6 = $cmb->add_group_field( $group_field_id, array(
        'name'    => 'Booking Item URL',
        'id'      => PREFIX . 'booking_item_url',
        'type'    => 'text_url',
        'description' => ''   
    ) );

    $field_7 = $cmb->add_group_field( $group_field_id, array(
        'name'    => 'Booking Item Type',
        'id'      => PREFIX . 'booking_item_type',
        'type'    => 'text',
        'description' => ''   
    ) );

  }
  add_action( 'cmb2_admin_init', 'cmb2_register_booking_item_metabox' , 2);
?>