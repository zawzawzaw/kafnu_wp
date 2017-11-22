<?php 

//  Default Banner Short Title
//  Default Banner Short Subtitle
//  Default Banner Short Image
//  Default Banner Short Image Tablet
//  Default Banner Short Image Mobile

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_default_banner_short( $fields ) {

  $new_fields = array(

    array(
      'name'    => 'Default Banner Short Title',
      'id'      => PREFIX . 'default_banner_short_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Default Banner Short Subtitle',
      'id'      => PREFIX . 'default_banner_short_subtitle',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    
    array(
      'name'    => 'Default Banner Short Image',
      'id'      => PREFIX . 'default_banner_short_image',
      'type'    => 'file',
      'description' => 'jpg, 1360 x 770, 300kb',
    ),
    array(
      'name'    => 'Default Banner Short Image Tablet',
      'id'      => PREFIX . 'default_banner_short_image_tablet',
      'type'    => 'file',
      'description' => 'jpg, 1150 x 650, 150kb',
    ),
    array(
      'name'    => 'Default Banner Short Image Mobile',
      'id'      => PREFIX . 'default_banner_short_image_mobile',
      'type'    => 'file',
      'description' => 'jpg, 640 x 1140, 140kb',
    ),

  );
  return array_merge( $fields, $new_fields );

}
add_filter( 'wds_page_builder_fields_default-banner-short', 'wds_add_field_default_banner_short' );
?>