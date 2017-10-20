<?php 
  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_location_events_mobile( $fields ) {
    $new_fields = array(
      
      array(
        'name'    => 'Shared Content',
        'id'      => PREFIX . 'location_events_mobile_description',
        'type'    => 'title',
        'description' => 'creates a mobile slider from the selected  Kafnu Events  in the Site Options',
      ),


    );
    return array_merge( $fields, $new_fields );
  }

  add_filter( 'wds_page_builder_fields_location-events-mobile', 'wds_add_field_location_events_mobile' );
?>