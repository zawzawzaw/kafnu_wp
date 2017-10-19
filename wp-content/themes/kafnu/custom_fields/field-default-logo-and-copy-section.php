<?php 

  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_default_logo_and_copy_section( $fields ) {
    $new_fields = array(
      
    );
    return array_merge( $fields, $new_fields );
  }

  add_filter( 'wds_page_builder_fields_default-logo-and-copy-section', 'wds_add_field_default_logo_and_copy_section' );

?>