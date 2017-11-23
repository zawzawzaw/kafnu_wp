<?php 
  function cmb2_register_press_release_metabox() {
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'press_release_metabox',
        'title'        => 'Press Release Fields',
        'object_types' => array( 'press-release', ),
    ) ); 


    // $field_1 = $cmb->add_field( array(
    //     'name'    => 'Title',
    //     'id'      => PREFIX . 'title',
    //     'type'    => 'text',
    //     'description' => '',
    // ) );

    $field_2 = $cmb->add_field( array(
        'name'    => 'Subtitle',
        'id'      => PREFIX . 'subtitle',
        'type'    => 'text',
        'description' => 'location used as a subtitle, we are using category as the filter',
    ) );

    $field_0 = $cmb->add_field( array(
        'name'    => 'Download Article File',
        'id'      => PREFIX . 'download_article_file',
        'type'    => 'file',
        'description' => 'pdf, 1mb',
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
    $row->addColumns(array($field_2, $field_0));
        

    // $row = $cmb2Grid->addRow();
    // $row->addColumns(array(
    //     array($field_0, 'class' => 'col-md-6 col-md-push-6'),
    // ));


    // SECTION_NAME_02
    

  }

  add_action( 'cmb2_admin_init', 'cmb2_register_press_release_metabox' , 2);
?>