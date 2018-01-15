<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_default_social_media_grid_large( $fields ) {
  $new_fields = array(
    array(
      'name'    => 'Shared Content',
      'id'      => PREFIX . 'default_social_media_grid_large_section',
      'type'    => 'title',
      'description' => 'the contents of this section can be found in the site options. It is shared by other pages.',
    ),
  );
  return array_merge( $fields, $new_fields );
}
add_filter( 'wds_page_builder_fields_default-social-media-grid-large', 'wds_add_field_default_social_media_grid_large' );

?>