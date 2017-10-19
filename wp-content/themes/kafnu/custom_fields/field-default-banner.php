<?php 

// Default Banner Title
// Default Banner Subtitle
// Default Banner Image
// Default Banner Image Tablet
// Default Banner Image Mobile



/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_default_banner( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Default Banner Title',
      'id'      => PREFIX . 'default_banner_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Default Banner Subtitle',
      'id'      => PREFIX . 'default_banner_subtitle',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    
    array(
      'name'    => 'Default Banner Image',
      'id'      => PREFIX . 'default_banner_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Default Banner Image Tablet',
      'id'      => PREFIX . 'default_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    array(
      'name'    => 'Default Banner Image Mobile',
      'id'      => PREFIX . 'default_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),

  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_default-banner', 'wds_add_field_default_banner' );

?>