<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_banner( $fields ) { 
  
  $new_fields = array(
    array(
      'name'    => 'Location Banner Title',
      'id'      => PREFIX . 'location_banner_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Location Banner Subtitle',
      'id'      => PREFIX . 'location_banner_subtitle',
      'type'    => 'text',
      'description' => '',
    )
  );

  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-banner', 'wds_add_field_location_banner' );

?>