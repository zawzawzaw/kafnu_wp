<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_live( $fields ) {
  $new_fields = array(
    
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_live_image',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_live_image_tablet',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_live_image_mobile',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_live_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Subtitle',
      'id'      => PREFIX . 'location_live_subtitle',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_live_icons',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_live_list',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    )
    
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-live', 'wds_add_field_location_live' );

?>