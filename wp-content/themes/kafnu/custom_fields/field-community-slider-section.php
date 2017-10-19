<?php 
  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_community_slider_section( $fields ) {
    $new_fields = array(
      
    );
    return array_merge( $fields, $new_fields );
  }
  
  add_filter( 'wds_page_builder_fields_community-slider-section', 'wds_add_field_community_slider_section' );

?>