<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_learn( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_learn_image',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_learn_image_tablet',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_learn_image_mobile',
      'type'    => 'file',
      'description' => '',
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_learn_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Subtitle',
      'id'      => PREFIX . 'location_learn_subtitle',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_learn_icons',
      'type'    => 'text',
      'description' => 'Possible values are hk-learn-01, hk-learn-02, hk-learn-03, tp-learn-01, tp-learn-02, tp-learn-03, tp-learn-04, tp-learn-05',
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_learn_list',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    )
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-learn', 'wds_add_field_location_learn' );

?>