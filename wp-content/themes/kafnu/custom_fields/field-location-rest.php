<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_rest( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_rest_image',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_rest_image_tablet',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_rest_image_mobile',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_rest_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Subtitle',
      'id'      => PREFIX . 'location_rest_subtitle',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_rest_icons',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_rest_list',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
      'repeatable' => true
    )
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-rest', 'wds_add_field_location_rest' );

?>