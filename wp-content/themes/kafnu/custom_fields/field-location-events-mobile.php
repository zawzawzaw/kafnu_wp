<?php 
  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_location_events_mobile( $fields ) {
    $new_fields = array(
      
      // array(
      //   'name'    => 'Shared Content',
      //   'id'      => PREFIX . 'location_events_mobile_description',
      //   'type'    => 'title',
      //   'description' => 'creates a mobile slider from the selected  Kafnu Events  in the Site Options',
      // ),

      array(
        'name'    => 'Kafnu Events',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'location_events_mobile_selected_kafnu_events',
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

  add_filter( 'wds_page_builder_fields_location-events-mobile', 'wds_add_field_location_events_mobile' );
?>