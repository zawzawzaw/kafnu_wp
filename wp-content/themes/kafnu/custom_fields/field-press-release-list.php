<?php 


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_press_release_list( $fields ) {

  $new_fields = array(
    
    array(
      'name'    => 'Shared Content',
      'id'      => PREFIX . 'press_release_list_description_title',
      'type'    => 'title',
      'description' => 'creates a list of published press releases arranged by date published (latest first)',
    ),
    
    
  );
  return array_merge( $fields, $new_fields );

}
add_filter( 'wds_page_builder_fields_press-release-list', 'wds_add_field_press_release_list' );
?>