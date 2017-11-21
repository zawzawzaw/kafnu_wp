<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_default_image_and_note( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Note Title',
      'id'      => PREFIX . 'default_image_and_note_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Note Copy',
      'id'      => PREFIX . 'default_image_and_note_copy',
      'type'    => 'textarea',
      'description' => '',
    ),
    
    array(
      'name'    => 'Note Image',
      'id'      => PREFIX . 'default_image_and_note_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Note Image Tablet',
      'id'      => PREFIX . 'default_image_and_note_image_tablet',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    array(
      'name'    => 'Note Image Mobile',
      'id'      => PREFIX . 'default_image_and_note_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_default-image-and-note', 'wds_add_field_default_image_and_note' );

?>