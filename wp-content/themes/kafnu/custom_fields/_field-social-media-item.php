<?php
// Default Social Media Grid Large Item Group
//   Type:
//     Video Image
//     Facebook Image
//     Youtube Image
//     Facebook Text
//     Facebook Text Wide
//     Article Text
// 
//   Image
//   URL
//   Social Type
// 
//   Title - only applicable to 
//   Copy - only applicable to 


  function cmb2_register_social_media_item_metabox() {
    /**
     * Metabox to save the 'status' where 'Internal' is the default.
     */
    $cmb = new_cmb2_box( array(
        'id'           => PREFIX . 'social_media_item_metabox',
        'title'        => 'Social Media Item Fields',
        'object_types' => array( 'social-media-item', ),
    ) );

    $field_1 = $cmb->add_field( array(
        'name' => 'Type',
        'description' => '',
        'id'   => PREFIX . 'social_media_type',
        'type' => 'select',
        'default'          => 'image_facebook',
        'options'          => array(

            'image_facebook_video' => 'Image Facebook Video',
            'image_facebook'       => 'Image Facebook',
            'image_youtube'        => 'Image Youtube',
            'text_facebook'        => 'Text Facebook',
            'text_facebook_wide'   => 'Text Facebook Wide',
            'text_article'         => 'Text Article',
        ),
    ) );    

    $field_2 = $cmb->add_field( array(
        'name'    => 'Image',
        'id'      => PREFIX . 'social_media_image',
        'type'    => 'file',
        'description' => 'jpg',
    ) );

    $field_3 = $cmb->add_field( array(
        'name'    => 'URL',
        'id'      => PREFIX . 'social_media_url',
        'type'    => 'text',
        'description' => '',
    ) );

    $field_4 = $cmb->add_field( array(
        'name'    => 'Title',
        'id'      => PREFIX . 'social_media_title',
        'type'    => 'text',
        'description' => '(only applicable to text types)',
    ) );    

    $field_5 = $cmb->add_field( array(
        'name'    => 'Copy',
        'id'      => PREFIX . 'social_media_copy',
        'type'    => 'textarea',
        'description' => '(only applicable to text types)',
        'sanitization_cb' => false,
    ) );




    


  }
  add_action( 'cmb2_admin_init', 'cmb2_register_social_media_item_metabox' , 2);
?>