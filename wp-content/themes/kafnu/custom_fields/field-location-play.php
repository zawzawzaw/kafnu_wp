<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_play( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_play_image',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_play_image_tablet',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_play_image_mobile',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image 02',
      'id'      => PREFIX . 'location_play_image_02',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image 02 Tablet',
      'id'      => PREFIX . 'location_play_image_02_tablet',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image 02 Mobile',
      'id'      => PREFIX . 'location_play_image_02_mobile',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_play_title',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Subtitle',
      'id'      => PREFIX . 'location_play_subtitle',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_play_icons',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_play_list',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    )
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-play', 'wds_add_field_location_play' );

?>