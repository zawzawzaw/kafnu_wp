<?php 




// Home Image Links Group
//   Title
//   Copy
//   URL
//   Image
//   Image Tablet
//   Image Mobile


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_home_image_links( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Home Image Link 01',
      'id'      => PREFIX . 'home_image_links_01',
      'type'    => 'manic_description',
      'description' => '',
    ),

    
    array(
      'name'    => 'Home Image Link 01 Image',
      'id'      => PREFIX . 'home_image_links_01_image',
      'type'    => 'file',
      'description' => 'jpg',
      'render_class' => 'test-class',
    ),
    array(
      'name'    => 'Home Image Link 01 Image Grey',
      'id'      => PREFIX . 'home_image_links_01_image_grey',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 01 Image Mobile',
      'id'      => PREFIX . 'home_image_links_01_image_mobile',
      'type'    => 'file',
      'description' => 'jpg; will resize desktop image if not found',
    ),
    

    array(
      'name'    => 'Home Image Link 02',
      'id'      => PREFIX . 'home_image_links_02',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Image Link 02 Image',
      'id'      => PREFIX . 'home_image_links_02_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 02 Image Grey',
      'id'      => PREFIX . 'home_image_links_02_image_grey',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 02 Image Mobile',
      'id'      => PREFIX . 'home_image_links_02_image_mobile',
      'type'    => 'file',
      'description' => 'jpg',
    ),

    array(
      'name'    => 'Home Image Link 03',
      'id'      => PREFIX . 'home_image_links_03',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Image Link 03 Image',
      'id'      => PREFIX . 'home_image_links_03_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 03 Image Grey',
      'id'      => PREFIX . 'home_image_links_03_image_grey',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 03 Image Mobile',
      'id'      => PREFIX . 'home_image_links_03_image_mobile',
      'type'    => 'file',
      'description' => 'jpg',
    ),

    array(
      'name'    => 'Home Image Link 04',
      'id'      => PREFIX . 'home_image_links_04',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Image Link 04 Image',
      'id'      => PREFIX . 'home_image_links_04_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 04 Image Grey',
      'id'      => PREFIX . 'home_image_links_04_image_grey',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 04 Image Mobile',
      'id'      => PREFIX . 'home_image_links_04_image_mobile',
      'type'    => 'file',
      'description' => 'jpg',
    ),

    array(
      'name'    => 'Home Image Link 05',
      'id'      => PREFIX . 'home_image_links_05',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Image Link 05 Image',
      'id'      => PREFIX . 'home_image_links_05_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 05 Image Grey',
      'id'      => PREFIX . 'home_image_links_05_image_grey',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 05 Image Mobile',
      'id'      => PREFIX . 'home_image_links_05_image_mobile',
      'type'    => 'file',
      'description' => 'jpg',
    ),

    array(
      'name'    => 'Home Image Link 06',
      'id'      => PREFIX . 'home_image_links_06',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Image Link 06 Image',
      'id'      => PREFIX . 'home_image_links_06_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 06 Image Grey',
      'id'      => PREFIX . 'home_image_links_06_image_grey',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Image Link 06 Image Mobile',
      'id'      => PREFIX . 'home_image_links_06_image_mobile',
      'type'    => 'file',
      'description' => 'jpg',
    ),
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_home-image-links', 'wds_add_field_home_image_links' );
?>