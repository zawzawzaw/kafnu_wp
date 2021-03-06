<?php 


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_press_release_gallery_download_masonry( $fields ) {

  $new_fields = array(
    
    array(
      'name'    => 'Press Release Gallery Download Masonry Selected List',
      'id'      => PREFIX . 'press_release_gallery_download_masonry_selected_list',
      
      'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
      'type'    => 'custom_attached_posts',
      'options' => array(
        'show_thumbnails' => true, // Show thumbnails on the left
        'filter_boxes'    => true, // Show a text box for filtering the results
        'query_args'      => array( 
          'posts_per_page' => -1,
          'post_type' => 'gallery-download',
        ), // override the get_posts args
      )
    ),

    array(
      'name'    => 'Copyright',
      'id'      => PREFIX . 'press_release_gallery_download_masonry_copyright',
      'type'    => 'wysiwyg',
      'options' => array(
        'textarea_rows' => get_option('default_post_edit_rows', 10)
      ),
      'description' => ''
    ),

  );
  return array_merge( $fields, $new_fields );

}
add_filter( 'wds_page_builder_fields_press-release-gallery-download-masonry', 'wds_add_field_press_release_gallery_download_masonry' );
?>