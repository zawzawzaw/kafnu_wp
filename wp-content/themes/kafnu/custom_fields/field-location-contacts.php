<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_contacts( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_contacts_image',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_contacts_image_tablet',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_contacts_image_mobile',
      'type'    => 'file',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_contacts_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Copy',
      'id'      => PREFIX . 'location_contacts_copy',
      'type'    => 'textarea',
      'description' => '',
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_contacts_list',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
      'repeatable' => true
    ),
    array(
      'name'    => 'Link Text',
      'id'      => PREFIX . 'location_contacts_cta_text',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'URL',
      'id'      => PREFIX . 'location_contacts_cta_url',
      'type'    => 'text_url',
      'description' => '',
      'sanitization_cb' => false,
    ),
    
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-contacts', 'wds_add_field_location_contacts' );

?>