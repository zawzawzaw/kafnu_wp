<?php 
  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_location_content_mobile_slider( $fields ) {
    $new_fields = array(

      array(
        'name'    => 'Linked Content',
        'id'      => PREFIX . 'default_social_media_grid_large_section',
        'type'    => 'title',
        'description' => 'creates a mobile slider from the following parts found in the same page: <br><br>Location Live, Location Work, Location Play, Location Learn, Location Rest',
      ),

    );
    return array_merge( $fields, $new_fields );
  }

  add_filter( 'wds_page_builder_fields_location-content-mobile-slider', 'wds_add_field_location_content_mobile_slider' );
?>