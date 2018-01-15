<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_default_copy_and_image( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Copy',
      'id'      => PREFIX . 'default_copy_and_image_copy',
      'type'    => 'textarea',
      'description' => '',
      'sanitization_cb' => false,
    ),
    
    array(
      'name'    => 'Link Copy',
      'id'      => PREFIX . 'default_copy_and_image_link_copy',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Link URL',
      'id'      => PREFIX . 'default_copy_and_image_link_url',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'default_copy_and_image_image',
      'type'    => 'file',
      'description' => 'jpg, 790 x 500, 80kb',
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'default_copy_and_image_image_tablet',
      'type'    => 'file',
      'description' => 'jpg, 790 x 500, 80kb',
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'default_copy_and_image_image_mobile',
      'type'    => 'file',
      'description' => 'jpg, 640 x 410, 40kb',
    ),
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_default-copy-and-image', 'wds_add_field_default_copy_and_image' );

?>