<?php











 
  function cmb2_register_community_manager_metabox() {
    /**
     * Metabox to save the 'status' where 'Internal' is the default.
     */
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'community_manager_metabox',
        'title'        => 'Community Manager Fields',
        'object_types' => array( 'community-manager', ),
    ) );



    $cmb->add_field( array(
        'name'    => 'Slider Image',
        'id'      => PREFIX . 'community_manager_banner_image',
        'type'    => 'file',
        'description' => 'jpg, 1370 x 500, 90kb',
    ) );

    $cmb->add_field( array(
        'name'    => 'Slider Image Tablet',
        'id'      => PREFIX . 'community_manager_banner_image_tablet',
        'type'    => 'file',
        'description' => 'jpg, 1150 x 420, 60kb',
    ) );

    $cmb->add_field( array(
        'name'    => 'Slider Image Mobile',
        'id'      => PREFIX . 'community_manager_banner_image_mobile',
        'type'    => 'file',
        'description' => 'jpg, 640 x 500, 150kb',
    ) );


    $cmb->add_field( array(
        'name'    => 'Thumbnail Black',
        'id'      => PREFIX . 'community_manager_thumbnail_black',
        'type'    => 'file',
        'description' => 'jpg, 250 x 150, 20kb',
    ) );


    $cmb->add_field( array(
        'name'    => 'Name',
        'id'      => PREFIX . 'community_manager_name',
        'type'    => 'text',
        'description' => '',
        'sanitization_cb' => false,
    ) );

    $cmb->add_field( array(
        'name'    => 'Location',
        'id'      => PREFIX . 'community_manager_location',
        'type'    => 'text',
        'description' => '',
        'sanitization_cb' => false,
    ) );

    $cmb->add_field( array(
        'name'    => 'Copy',
        'id'      => PREFIX . 'community_manager_copy',
        'type'    => 'textarea',
        'description' => '',
        'sanitization_cb' => false,
    ) );



  }
  add_action( 'cmb2_admin_init', 'cmb2_register_community_manager_metabox' , 2);
?>