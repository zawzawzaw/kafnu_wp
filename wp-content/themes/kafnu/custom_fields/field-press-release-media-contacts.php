<?php 


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_press_release_media_contacts( $fields ) {

  $new_fields = array(
    
    array(
      'name'    => 'Press Release Media Contacts Selected List',
      'id'      => PREFIX . 'press_release_media_contacts_selected_list',
      
      'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
      'type'    => 'custom_attached_posts',
      'options' => array(
        'show_thumbnails' => true, // Show thumbnails on the left
        'filter_boxes'    => true, // Show a text box for filtering the results
        'query_args'      => array( 
          'posts_per_page' => -1,
          'post_type' => 'media-contact',
        ), // override the get_posts args
      )
    ),
    
  );
  return array_merge( $fields, $new_fields );

}
add_filter( 'wds_page_builder_fields_press-release-media-contacts', 'wds_add_field_press_release_media_contacts' );
?>