<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_contact_map_and_postit( $fields ) {
  $new_fields = array(
    
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'contact_map_title',
      'type'    => 'text',
      'description' => '(optional)'
    ),
    array(
      'name'    => 'Map ID',
      'id'      => PREFIX . 'contact_map_id',
      'type'    => 'text',
      'description' => 'unique ID of the map'
    ),
    array(
      'name'    => 'Latitude',
      'id'      => PREFIX . 'contact_map_latitude',
      'type'    => 'text',
      'description' => ''
    ),
    array(
      'name'    => 'Longitude',
      'id'      => PREFIX . 'contact_map_longitude',
      'type'    => 'text',
      'description' => ''
    ),



    array(
      'name'    => 'Country',
      'id'      => PREFIX . 'contact_map_country',
      'type'    => 'text',
      'description' => ''
    ),
    array(
      'name'    => 'Address',
      'id'      => PREFIX . 'contact_map_address',
      'type'    => 'wysiwyg',
      'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 3)
      ),
      'description' => ''
    ),
    array(
      'name'    => 'Email',
      'id'      => PREFIX . 'contact_map_email',
      'type'    => 'text',
      'description' => ''
    ),

    array(
      'name'    => 'Facebook',
      'id'      => PREFIX . 'contact_map_facebook',
      'type'    => 'text',
      'description' => ''
    ),
    array(
      'name'    => 'Youtube',
      'id'      => PREFIX . 'contact_map_youtube',
      'type'    => 'text',
      'description' => ''
    ),
    array(
      'name'    => 'Google Map',
      'id'      => PREFIX . 'contact_map_google_map',
      'type'    => 'text',
      'description' => ''
    ),
    
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_contact-map-and-postit', 'wds_add_field_contact_map_and_postit' );

?>