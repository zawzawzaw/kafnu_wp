<?php 


// Home Locations Item 01
// Home Locations Item 01 Image
// Home Locations Item 01 Image Tablet
// Home Locations Item 01 Image Mobile
// 
// Home Locations Item 02
// Home Locations Item 02 Image
// Home Locations Item 02 Image Tablet
// Home Locations Item 02 Image Mobile
// 
// Home Locations Upcoming 01
// Home Locations Upcoming 02
// Home Locations Upcoming 03
// Home Locations Upcoming 04
// Home Locations Upcoming 05
// Home Locations Upcoming 06



/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_home_locations( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Home Locations Item 01',
      'id'      => PREFIX . 'home_locations_item_01',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Item 01 Image Slider',
      'id'      => PREFIX . 'home_locations_item_01_image',
      'type'    => 'file_list',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Locations Item 02',
      'id'      => PREFIX . 'home_locations_item_02',
      'type'    => 'manic_description',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Item 02 Image Slider',
      'id'      => PREFIX . 'home_locations_item_02_image',
      'type'    => 'file_list',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Home Locations Upcoming 01',
      'id'      => PREFIX . 'home_locations_upcoming_01',
      'type'    => 'title_hover',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Upcoming 02',
      'id'      => PREFIX . 'home_locations_upcoming_02',
      'type'    => 'title_hover',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Upcoming 03',
      'id'      => PREFIX . 'home_locations_upcoming_03',
      'type'    => 'title_hover',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Upcoming 04',
      'id'      => PREFIX . 'home_locations_upcoming_04',
      'type'    => 'title_hover',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Upcoming 05',
      'id'      => PREFIX . 'home_locations_upcoming_05',
      'type'    => 'title_hover',
      'description' => '',
    ),
    array(
      'name'    => 'Home Locations Upcoming 06',
      'id'      => PREFIX . 'home_locations_upcoming_06',
      'type'    => 'title_hover',
      'description' => '',
    ),


  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_home-locations', 'wds_add_field_home_locations' );

?>