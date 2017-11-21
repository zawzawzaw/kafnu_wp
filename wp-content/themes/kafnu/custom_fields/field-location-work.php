<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_work( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Image',
      'id'      => PREFIX . 'location_work_image',
      'type'    => 'file',
      'description' => 'jpg, 910 x 600, 100kb',
    ),
    array(
      'name'    => 'Image Tablet',
      'id'      => PREFIX . 'location_work_image_tablet',
      'type'    => 'file',
      'description' => 'jpg, 910 x 600, 100kb',
    ),
    array(
      'name'    => 'Image Mobile',
      'id'      => PREFIX . 'location_work_image_mobile',
      'type'    => 'file',
      'description' => 'jpg, 640 x 420, 50kb',
    ),
    array(
      'name'    => 'Title',
      'id'      => PREFIX . 'location_work_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Subtitle',
      'id'      => PREFIX . 'location_work_subtitle',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false
    ),
    array(
      'name'    => 'Icon',
      'id'      => PREFIX . 'location_work_icons',
      'type'    => 'text',
      'description' => 'Possible values are hk-work-01, hk-work-02, hk-work-03, hk-work-04, hk-work-05, hk-work-06, tp-work-01, tp-work-02, tp-work-03, tp-work-04, tp-work-05, tp-work-06, tp-work-07, tp-work-08, tp-work-09',
      'repeatable' => true
    ),
    array(
      'name'    => 'List',
      'id'      => PREFIX . 'location_work_list',
      'type'    => 'text',
      'description' => '',
      'repeatable' => true
    )
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-work', 'wds_add_field_location_work' );

?>