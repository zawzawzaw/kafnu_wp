<?php 

/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_location_booking( $fields ) {
  $new_fields = array(
    
    array(
        'name'    => 'Location Booking Items',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'location_booking_items',
        'type'    => 'custom_attached_posts',
        'options' => array(
          'show_thumbnails' => true, // Show thumbnails on the left
          'filter_boxes'    => true, // Show a text box for filtering the results
          'query_args'      => array( 
            'posts_per_page' => -1,
            'post_type' => 'booking-item',
          ), // override the get_posts args
        )
    )
    
  );
  return array_merge( $fields, $new_fields );
}

add_filter( 'wds_page_builder_fields_location-booking', 'wds_add_field_location_booking' );

?>