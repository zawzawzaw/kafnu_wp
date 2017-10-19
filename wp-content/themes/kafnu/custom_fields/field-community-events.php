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
      array(
        'name'    => 'Shared Content',
        'id'      => PREFIX . 'community_events_info',
        'type'    => 'title',
        'description' => 'the contents of this section can be found in the site options. It is shared by other pages.',
      ),
    );
    return array_merge( $fields, $new_fields );
  }
  
  add_filter( 'wds_page_builder_fields_community-events', 'wds_add_field_community_events' );

?>