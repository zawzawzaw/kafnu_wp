<?php
  
  function manic_post_type_register(){


    //    _____ ____      _    _   _ ____    _    ____ _____ ___ ___  _   _
    //   |_   _|  _ \    / \  | \ | / ___|  / \  / ___|_   _|_ _/ _ \| \ | |
    //     | | | |_) |  / _ \ |  \| \___ \ / _ \| |     | |  | | | | |  \| |
    //     | | |  _ <  / ___ \| |\  |___) / ___ \ |___  | |  | | |_| | |\  |
    //     |_| |_| \_\/_/   \_\_| \_|____/_/   \_\____| |_| |___\___/|_| \_|
    //

    register_post_type( 'social-media-item', 
      
      array( 'labels' => array(
        'name' => 'Social Media Item',
        'singular_name' => 'Social Media Item',
        'all_items' => 'All Social Media Items',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Social Media Item',
        'edit' => 'Edit',
        'edit_item' => 'Edit Social Media Item',
        'new_item' => 'New Social Media Item',
        'view_item' => 'View Social Media Item',
        'search_items' => 'Search Social Media Items',
        'not_found' =>  'Nothing found in the Database.',
        'not_found_in_trash' => 'Nothing found in Trash',
        'parent_item_colon' => ''
        ), /* end of arrays */
        'description' => 'An entry in the social media grids.',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_position' => 100,
        'menu_icon' => 'dashicons-clipboard',
        'rewrite' => array( 'slug' => 'social-media-item', 'with_front' => false ),
        'has_archive' => 'social-media-item',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        // 'supports' => array( 'title', 'editor', 'revisions')
        'supports' => array( 'title', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'social-media-item');
    register_taxonomy_for_object_type( 'category', 'social-media-item' );


  } // manic_post_type_register
  add_action('init', 'manic_post_type_register');

?>