<?php 


// Home Banner Title
// Home Banner Subtitle
// Home Banner Link Copy
// Home Banner Link URL
// 
// Home Banner Image
// Home Banner Image Tablet
// Home Banner Image Mobile


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_home_banner( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Home Banner Title',
      'id'      => PREFIX . 'home_banner_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Home Banner Subtitle',
      'id'      => PREFIX . 'home_banner_subtitle',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Home Banner Link Copy',
      'id'      => PREFIX . 'home_banner_link_copy',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Home Banner Link URL',
      'id'      => PREFIX . 'home_banner_link_url',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Home Banner Image',
      'id'      => PREFIX . 'home_banner_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Banner Image Tablet',
      'id'      => PREFIX . 'home_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    array(
      'name'    => 'Home Banner Image Mobile',
      'id'      => PREFIX . 'home_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),

  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_home-banner', 'wds_add_field_home_banner' );

?>