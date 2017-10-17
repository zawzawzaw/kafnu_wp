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
    ),
    array(
      'name'    => 'Location Banner Image',
      'id'      => PREFIX . 'location_banner_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Location Banner Image Tablet',
      'id'      => PREFIX . 'location_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    array(
      'name'    => 'Location Banner Image Mobile',
      'id'      => PREFIX . 'location_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
  );

  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-banner', 'wds_add_field_location_banner' );

?>