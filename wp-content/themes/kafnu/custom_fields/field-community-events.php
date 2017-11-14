<?php 
  
  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_community_events( $fields ) {
    $new_fields = array(
      array(
        'name'    => 'Title',
        'id'      => PREFIX . 'community_events_title',
        'type'    => 'text',
        'description' => '',
        'sanitization_cb' => false,
      ),
      
      // array(
      //   'name'    => 'Shared Content',
      //   'id'      => PREFIX . 'community_events_info',
      //   'type'    => 'title',
      //   'description' => 'the contents of this section can be found in the site options. It is shared by other pages.',
      // ),

      array(
        'name'    => 'Kafnu Events',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'community_events_selected_kafnu_events',
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
  
  add_filter( 'wds_page_builder_fields_community-events', 'wds_add_field_community_events' );

?>