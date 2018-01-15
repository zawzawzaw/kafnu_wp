<?php 


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_press_release_banner( $fields ) {

  $new_fields = array(
    array(
      'name'    => 'Press Release Banner Title',
      'id'      => PREFIX . 'press_release_banner_title',
      'type'    => 'text',
      'description' => '',
    ),

    array(
      'name'    => 'Press Release Banner Subtitle',
      'id'      => PREFIX . 'press_release_banner_subtitle',
      'type'    => 'text',
      'description' => '',
    ),

    array(
      'name'    => 'Press Release Banner Copy',
      'id'      => PREFIX . 'press_release_banner_copy',
      'type'    => 'textarea',
      'description' => '',
    ),

    array(
      'name'    => 'Press Release Banner CTA',
      'id'      => PREFIX . 'press_release_banner_cta',
      'type'    => 'manic_cta',
      'description' => '',
    ),

    array(
      'name'    => 'Press Release Banner Image',
      'id'      => PREFIX . 'press_release_banner_image',
      'type'    => 'file',
      'description' => 'jpg, 1370 x 1020, 500kb',
    ),

    array(
      'name'    => 'Press Release Banner Image Tablet',
      'id'      => PREFIX . 'press_release_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg, 1152 x 850, 137kb',
    ),

    array(
      'name'    => 'Press Release Banner Image Mobile',
      'id'      => PREFIX . 'press_release_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg, 640 x 470, 60kb',
    ),
    
  );
  return array_merge( $fields, $new_fields );

}
add_filter( 'wds_page_builder_fields_press-release-banner', 'wds_add_field_press_release_banner' );
?>