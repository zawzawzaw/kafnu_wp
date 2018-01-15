<?php 
  function cmb2_register_gallery_download_metabox() {
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'gallery_download_metabox',
        'title'        => 'Gallery Download Fields',
        'object_types' => array( 'gallery-download', ),
    ) ); 

    $field_5 = $cmb->add_field( array(
        'name'    => 'Title',
        'id'      => PREFIX . 'title',
        'type'    => 'text',
        'description' => '',
    ) );

    $field_5b = $cmb->add_field( array(
        'name'    => 'Copy',
        'id'      => PREFIX . 'copy',
        'type'    => 'textarea',
        'description' => '',
    ) );



    $field_6 = $cmb->add_field( array(
        'name'    => 'Banner',
        'id'      => PREFIX . 'banner',
        'type'    => 'file',
        'description' => 'jpg, 1200 x 800, 200kb',
    ) );

    $field_7 = $cmb->add_field( array(
        'name'    => 'Banner Tablet',
        'id'      => PREFIX . 'banner_tablet',
        'type'    => 'file',
        'description' => 'jpg, 1000 x 670, 150kb',
    ) );

    $field_8 = $cmb->add_field( array(
        'name'    => 'Banner Mobile',
        'id'      => PREFIX . 'banner_mobile',
        'type'    => 'file',
        'description' => 'jpg, 640 x 430, 70kb',
    ) );

    $field_9 = $cmb->add_field( array(
        'name'    => 'Grey Thumbnail',
        'id'      => PREFIX . 'grey_thumbnail',
        'type'    => 'file',
        'description' => 'black & white jpg, 300 x 200, 20kb',
    ) );




    // needed cause category is already used by location
    $field_a = $cmb->add_field( array(
        'name'    => 'Asset Type',
        'id'      => PREFIX . 'asset_type',
        'type'    => 'select',
        'description' => '',
        'default' => 'image',
        'options' => array(
            'image'    => 'Image',
            'video'    => 'Video',
        ),
    ) );

    $field_10 = $cmb->add_field( array(
        'name'    => 'Print Download File',
        'id'      => PREFIX . 'print_download_file',
        'type'    => 'file',
        'description' => 'tiff/png, no dimention limit, no file size limit',
    ) );

    $field_11 = $cmb->add_field( array(
        'name'    => 'Digital Download File',
        'id'      => PREFIX . 'digital_download_file',
        'type'    => 'file',
        'description' => 'jpg, no dimention limit, 600kb',
    ) );



    $field_m1 = $cmb->add_field( array(
        'name'    => 'Masonry Image',
        'id'      => PREFIX . 'masonry',
        'type'    => 'file',
        'description' => 'black & white jpg, 460 x 460, 100kb',
    ) );
    $field_m2 = $cmb->add_field( array(
        'name'    => 'Masonry Image (Black & White)',
        'id'      => PREFIX . 'masonry_grey',
        'type'    => 'file',
        'description' => 'black & white jpg, 460 x 460, 40kb',
    ) );


    $field_m3 = $cmb->add_field( array(
        'name'    => 'Is image vertical?',
        'id'      => PREFIX . 'vertical',
        'type'    => 'checkbox',
        'description' => 'is the image a vertical image',
    ) );

    $field_m4 = $cmb->add_field( array(
        'name'    => 'Video',
        'id'      => PREFIX . 'video_file',
        'type'    => 'file',
        'description' => '(only if video type) mp4, 2-3 mb. Upload high-res video in Digital Download File',
    ) );


    // data-vertical


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
    /*
    $row = $cmb2Grid->addRow();
    $row->addColumns(array(
        array($field_a, 'class' => 'col-md-6'),
    ));
    */
    

    $row = $cmb2Grid->addRow();
    $row->addColumns(array($field_5, $field_5b));

    $row = $cmb2Grid->addRow();
    $row->addColumns(array($field_6, $field_7, $field_8, $field_9));


    
    $row = $cmb2Grid->addRow();
    $row->addColumns(array(
        array($field_a, 'class' => 'col-md-6'),
    ));

    $row = $cmb2Grid->addRow();
    $row->addColumns(array($field_10, $field_11));

    $row = $cmb2Grid->addRow();
    $row->addColumns(array($field_m1, $field_m2));

    

  }

  add_action( 'cmb2_admin_init', 'cmb2_register_gallery_download_metabox' , 2);
?>