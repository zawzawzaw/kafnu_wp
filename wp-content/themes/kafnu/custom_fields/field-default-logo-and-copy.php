<?php 


  // Default Logo And Copy Copy

  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_default_logo_and_copy( $fields ) {
    
    $new_fields = array(

      array(
        'name'    => 'Copy',
        'id'      => PREFIX . 'default_logo_and_copy_copy',
        'type'    => 'textarea',
        'description' => '',
        'sanitization_cb' => false,
      ),

    );
    return array_merge( $fields, $new_fields );
  }

  add_filter( 'wds_page_builder_fields_default-logo-and-copy', 'wds_add_field_default_logo_and_copy' );

?>