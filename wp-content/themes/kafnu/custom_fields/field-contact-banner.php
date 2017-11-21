<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_contact_banner( $fields ) {
  $new_fields = array(
    
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'contact_banner_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Contact Banner Image',
      'id'      => PREFIX . 'contact_banner_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Contact Banner Image Tablet',
      'id'      => PREFIX . 'contact_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    array(
      'name'    => 'Contact Banner Image Mobile',
      'id'      => PREFIX . 'contact_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_contact-banner', 'wds_add_field_contact_banner' );

?>