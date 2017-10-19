<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_work( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_work_image',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_work_image_tablet',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_work_image_mobile',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_work_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Subtitle',
      'id'      => PREFIX . 'location_work_subtitle',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_work_icons',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_work_list',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
      'repeatable' => true
    )
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-work', 'wds_add_field_location_work' );

?>