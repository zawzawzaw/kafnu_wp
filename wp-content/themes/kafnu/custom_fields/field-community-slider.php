<?php

  // Community Slider Title
  // Community Slider Selected Managers

  

  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_community_slider( $fields ) {
    $new_fields = array(
      array(
        'name'    => 'Community Slider Title',
        'id'      => PREFIX . 'community_slider_title',
        'type'    => 'text',
        'description' => '',
        'sanitization_cb' => false,
      ),
      array(
        'name'    => 'Community Slider Selected Managers',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'community_slider_selected_managers',
        'type'    => 'custom_attached_posts',
        'options' => array(
          'show_thumbnails' => true, // Show thumbnails on the left
          'filter_boxes'    => true, // Show a text box for filtering the results
          'query_args'      => array(
            'posts_per_page' => -1,
            'post_type' => 'community-manager',
          ),
        )

      ),

    );
    return array_merge( $fields, $new_fields );
  }
  
  add_filter( 'wds_page_builder_fields_community-slider', 'wds_add_field_community_slider' );

?>