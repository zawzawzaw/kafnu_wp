<?php 
  /**
   * Add custom fields to Page Builder Part
   *
   * @param $fields
   * @return array
   */
  function wds_add_field_plain_text( $fields ) {
    $new_fields = array(

      array(
        'name'    => '',
        'id'      => PREFIX . 'plain_text_wysiwyg',
        'type'    => 'wysiwyg',
        'options' => array(
          'textarea_rows' => get_option('default_post_edit_rows', 30)
        ),
        'description' => '',
      ),

    );
    return array_merge( $fields, $new_fields );
  }

  add_filter( 'wds_page_builder_fields_plain-text', 'wds_add_field_plain_text' );
?>