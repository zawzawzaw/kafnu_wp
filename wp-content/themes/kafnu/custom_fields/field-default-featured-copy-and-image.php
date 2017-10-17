<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_default_featured_copy_and_image( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Featured Copy',
      'id'      => PREFIX . 'default_featured_copy_and_image_copy',
      'type'    => 'textarea',
      'description' => '',
      'sanitization_cb' => false,
    ),
    
    array(
      'name'    => 'Featured Image',
      'id'      => PREFIX . 'default_featured_copy_and_image_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Featured Image Tablet',
      'id'      => PREFIX . 'default_featured_copy_and_image_image_tablet',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    array(
      'name'    => 'Featured Image Mobile',
      'id'      => PREFIX . 'default_featured_copy_and_image_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_default-featured-copy-and-image', 'wds_add_field_default_featured_copy_and_image' );

?>