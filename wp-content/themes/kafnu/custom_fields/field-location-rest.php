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
      'description' => 'jpg, 680 x 550, 110kb',
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_rest_image_tablet',
      'type'    => 'file',
      'description' => 'jpg, 680 x 550, 110kb',
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_rest_image_mobile',
      'type'    => 'file',
      'description' => 'jpg, 640 x 520, 80kb',
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
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_rest_icons',
      'type'    => 'text',
      'description' => 'Possible values are hk-rest-01, hk-rest-02, hk-rest-03, tp-rest-01, tp-rest-02',
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_rest_list',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    )
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-rest', 'wds_add_field_location_rest' );

?>