<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_banner( $fields ) { 

  $new_fields = array(
    array(
      'name'    => 'Location Banner Title',
      'id'      => PREFIX . 'location_banner_title',
      'type'    => 'text',
      'description' => '',
      'sanitization_cb' => false,
    ),
    array(
      'name'    => 'Location Banner Subtitle',
      'id'      => PREFIX . 'location_banner_subtitle',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Location Banner Image',
      'id'      => PREFIX . 'location_banner_image',
      'type'    => 'file',
      'description' => 'jpg, 1030 x 670, 250kb',
    ),
    array(
      'name'    => 'Location Banner Image Tablet',
      'id'      => PREFIX . 'location_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg, 1030 x 670, 250kb',
    ),
    array(
      'name'    => 'Location Banner Image Mobile',
      'id'      => PREFIX . 'location_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg, 640 x 420, 80kb',
    ),
    
    array(
      'name'    => 'Kafnu Events',
      'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
      'id'      => PREFIX . 'location_banner_selected_kafnu_events',
      'type'    => 'custom_attached_posts',
      'options' => array(
        'show_thumbnails' => true, // Show thumbnails on the left
        'filter_boxes'    => true, // Show a text box for filtering the results
        'query_args'      => array( 
          'posts_per_page' => -1,
          'post_type' => 'kafnu-event',
        ), // override the get_posts args
      )
    ),
  );

  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-banner', 'wds_add_field_location_banner' );

?>