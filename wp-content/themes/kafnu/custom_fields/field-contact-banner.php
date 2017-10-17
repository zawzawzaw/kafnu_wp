<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_contact_banner( $fields ) {
  $new_fields = array(
    /*
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'default_centered_text_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Copy',
      'id'      => PREFIX . 'default_centered_text_copy',
      'type'    => 'textarea',
      'description' => '',
    ),
    array(
      'name'    => 'Is White BG',
      'id'      => PREFIX . 'default_centered_text_is_white_bg',
      'type'    => 'checkbox',
      'description' => '',
    ),
    */
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_contact-banner', 'wds_add_field_contact_banner' );

?>