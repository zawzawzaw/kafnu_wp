<?php 


/**
 * Add custom fields to Page Builder Part
 *
 * @param $fields
 * @return array
 */
function wds_add_field_press_release_fact_sheet_and_media_contact( $fields ) {

  $new_fields = array(
    
    array(
      'name'    => 'FactSheet Title',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_title',
      'type'    => 'text',
      'description' => '',
    ),

    array(
      'name'    => 'FactSheet Copy',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_copy',
      'type'    => 'textarea',
      'description' => '',
    ),

    array(
      'name'    => 'Factsheet CTA 01 Title',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_cta_01_title',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Factsheet CTA 01',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_cta_01',
      'type'    => 'manic_cta',
      'description' => 'upload the factsheets via media library',
    ),
    array(
      'name'    => 'Factsheet CTA 01 Chinese',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_cta_01_chinese',
      'type'    => 'manic_cta',
      'description' => '',
    ),

    array(
      'name'    => 'Factsheet CTA 02 Title',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_cta_02_title',
      'type'    => 'text',
      'description' => '',
    ),
    array(
      'name'    => 'Factsheet CTA 02',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_cta_02',
      'type'    => 'manic_cta',
      'description' => '',
    ),

    array(
      'name'    => 'Factsheet CTA 02 Chinese',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_cta_02_chinese',
      'type'    => 'manic_cta',
      'description' => '',
    ),

    array(
      'name'    => 'Factsheet Banner Image',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_banner_image',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Factsheet Banner Image Tablet',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_banner_image_tablet',
      'type'    => 'file',
      'description' => 'jpg',
    ),
    array(
      'name'    => 'Factsheet Banner Image Mobile',
      'id'      => PREFIX . 'press_release_fsmc_factsheet_banner_image_mobile',
      'type'    => 'file',
      'description' => 'jpg',
    ),

    



    array(
      'name'    => 'Contact Title',
      'id'      => PREFIX . 'press_release_fsmc_contact_title',
      'type'    => 'text',
      'description' => '',
    ),

    

    array(
      'name'    => 'Contact General Title',
      'id'      => PREFIX . 'press_release_fsmc_contact_general_title',
      'type'    => 'text',
      'description' => '',
    ),

    array(
      'name'    => 'Contact General Email',
      'id'      => PREFIX . 'press_release_fsmc_contact_general_email',
      'type'    => 'text',
      'description' => '',
    ),

    array(
      'name'    => 'Contact List',
      'id'      => PREFIX . 'press_release_fsmc_contact_list',
      
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



    array(
      'name'    => '(Multiple Media Contacts)',
      'id'      => PREFIX . 'press_release_fsmc_contact_title_multiple',
      'type'    => 'title',
      'description' => 'these are fields are used if there are more than 1 media contact',
    ),

    array(
      'name'    => 'Contact Copy',
      'id'      => PREFIX . 'press_release_fsmc_contact_copy',
      'type'    => 'textarea',
      'description' => '',
    ),

    array(
      'name'    => 'Contact CTA',
      'id'      => PREFIX . 'press_release_fsmc_contact_cta',
      'type'    => 'manic_cta',
      'description' => '',
    ),


    

  );
  return array_merge( $fields, $new_fields );

}
add_filter( 'wds_page_builder_fields_press-release-fact-sheet-and-media-contact', 'wds_add_field_press_release_fact_sheet_and_media_contact' );
?>