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




    //      _  __    _    _____ _   _ _   _   _______     _______ _   _ _____
    //     | |/ /   / \  |  ___| \ | | | | | | ____\ \   / / ____| \ | |_   _|
    //     | ' /   / _ \ | |_  |  \| | | | | |  _|  \ \ / /|  _| |  \| | | |
    //     | . \  / ___ \|  _| | |\  | |_| | | |___  \ V / | |___| |\  | | |
    //     |_|\_\/_/   \_\_|   |_| \_|\___/  |_____|  \_/  |_____|_| \_| |_|
    //

    register_post_type( 'kafnu-event', 
      
      array( 'labels' => array(
        'name' => 'Kafnu Event',
        'singular_name' => 'Kafnu Event',
        'all_items' => 'All Kafnu Events',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Kafnu Event',
        'edit' => 'Edit',
        'edit_item' => 'Edit Kafnu Event',
        'new_item' => 'New Kafnu Event',
        'view_item' => 'View Kafnu Event',
        'search_items' => 'Search Kafnu Events',
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
        'rewrite' => array( 'slug' => 'kafnu-event', 'with_front' => false ),
        'has_archive' => 'kafnu-event',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        // 'supports' => array( 'title', 'editor', 'revisions')
        'supports' => array( 'title', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'kafnu-event');
    register_taxonomy_for_object_type( 'category', 'kafnu-event' );


    //      ____   ___   ___  _  _____ _   _  ____   ___ _____ _____ __  __
    //     | __ ) / _ \ / _ \| |/ /_ _| \ | |/ ___| |_ _|_   _| ____|  \/  |
    //     |  _ \| | | | | | | ' / | ||  \| | |  _   | |  | | |  _| | |\/| |
    //     | |_) | |_| | |_| | . \ | || |\  | |_| |  | |  | | | |___| |  | |
    //     |____/ \___/ \___/|_|\_\___|_| \_|\____| |___| |_| |_____|_|  |_|
    //

    register_post_type( 'booking-item', 
      
      array( 'labels' => array(
        'name' => 'Booking Item',
        'singular_name' => 'Booking Item',
        'all_items' => 'All Booking Items',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Booking Item',
        'edit' => 'Edit',
        'edit_item' => 'Edit Booking Item',
        'new_item' => 'New Booking Item',
        'view_item' => 'View Booking Item',
        'search_items' => 'Search Booking Items',
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
        'rewrite' => array( 'slug' => 'booking-item', 'with_front' => false ),
        'has_archive' => 'booking-item',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        // 'supports' => array( 'title', 'editor', 'revisions')
        'supports' => array( 'title', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'booking-item');
    register_taxonomy_for_object_type( 'category', 'booking-item' );


    //       ____ ___  __  __ __  __ _   _ _   _ ___ _______   __  __  __    _    _   _    _    ____ _____ ____
    //      / ___/ _ \|  \/  |  \/  | | | | \ | |_ _|_   _\ \ / / |  \/  |  / \  | \ | |  / \  / ___| ____|  _ \
    //     | |  | | | | |\/| | |\/| | | | |  \| || |  | |  \ V /  | |\/| | / _ \ |  \| | / _ \| |  _|  _| | |_) |
    //     | |__| |_| | |  | | |  | | |_| | |\  || |  | |   | |   | |  | |/ ___ \| |\  |/ ___ \ |_| | |___|  _ <
    //      \____\___/|_|  |_|_|  |_|\___/|_| \_|___| |_|   |_|   |_|  |_/_/   \_\_| \_/_/   \_\____|_____|_| \_\
    //

    register_post_type( 'community-manager',
      
      array( 'labels' => array(
        'name' => 'Community Manager',
        'singular_name' => 'Community Manager',
        'all_items' => 'All Community Managers',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Community Manager',
        'edit' => 'Edit',
        'edit_item' => 'Edit Community Manager',
        'new_item' => 'New Community Manager',
        'view_item' => 'View Community Manager',
        'search_items' => 'Search Community Managers',
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
        'rewrite' => array( 'slug' => 'community-manager', 'with_front' => false ),
        'has_archive' => 'community-manager',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        // 'supports' => array( 'title', 'editor', 'revisions')
        'supports' => array( 'title', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'community-manager');
    register_taxonomy_for_object_type( 'category', 'community-manager' );




    //      ____  ____  _____ ____ ____    ____  _____ _     _____    _    ____  _____
    //     |  _ \|  _ \| ____/ ___/ ___|  |  _ \| ____| |   | ____|  / \  / ___|| ____|
    //     | |_) | |_) |  _| \___ \___ \  | |_) |  _| | |   |  _|   / _ \ \___ \|  _|
    //     |  __/|  _ <| |___ ___) |__) | |  _ <| |___| |___| |___ / ___ \ ___) | |___
    //     |_|   |_| \_\_____|____/____/  |_| \_\_____|_____|_____/_/   \_\____/|_____|
    //

    register_post_type( 'press-release',
      
      array( 'labels' => array(
        'name' => 'Press Release',
        'singular_name' => 'Press Release',
        'all_items' => 'All Press Releases',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Press Release',
        'edit' => 'Edit',
        'edit_item' => 'Edit Press Release',
        'new_item' => 'New Press Release',
        'view_item' => 'View Press Release',
        'search_items' => 'Search Press Releases',
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
        'rewrite' => array( 'slug' => 'press-release', 'with_front' => false ),
        'has_archive' => 'press-release',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        'supports' => array( 'title', 'editor', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'press-release');
    register_taxonomy_for_object_type( 'category', 'press-release' );

    //      __  __ _____ ____ ___    _       ____ ___  _   _ _____  _    ____ _____
    //     |  \/  | ____|  _ \_ _|  / \     / ___/ _ \| \ | |_   _|/ \  / ___|_   _|
    //     | |\/| |  _| | | | | |  / _ \   | |  | | | |  \| | | | / _ \| |     | |
    //     | |  | | |___| |_| | | / ___ \  | |__| |_| | |\  | | |/ ___ \ |___  | |
    //     |_|  |_|_____|____/___/_/   \_\  \____\___/|_| \_| |_/_/   \_\____| |_|
    //
    
    register_post_type( 'media-contact',
      
      array( 'labels' => array(
        'name' => 'Media Contact',
        'singular_name' => 'Media Contact',
        'all_items' => 'All Media Contacts',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Media Contact',
        'edit' => 'Edit',
        'edit_item' => 'Edit Media Contact',
        'new_item' => 'New Media Contact',
        'view_item' => 'View Media Contact',
        'search_items' => 'Search Media Contacts',
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
        'rewrite' => array( 'slug' => 'media-contact', 'with_front' => false ),
        'has_archive' => 'media-contact',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        'supports' => array( 'title', 'editor', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'media-contact');
    register_taxonomy_for_object_type( 'category', 'media-contact' );


    //       ____    _    _     _     _____ ______   __  ____   _____        ___   _ _     ___    _    ____
    //      / ___|  / \  | |   | |   | ____|  _ \ \ / / |  _ \ / _ \ \      / / \ | | |   / _ \  / \  |  _ \
    //     | |  _  / _ \ | |   | |   |  _| | |_) \ V /  | | | | | | \ \ /\ / /|  \| | |  | | | |/ _ \ | | | |
    //     | |_| |/ ___ \| |___| |___| |___|  _ < | |   | |_| | |_| |\ V  V / | |\  | |__| |_| / ___ \| |_| |
    //      \____/_/   \_\_____|_____|_____|_| \_\|_|   |____/ \___/  \_/\_/  |_| \_|_____\___/_/   \_\____/
    //

    register_post_type( 'gallery-download',
      
      array( 'labels' => array(
        'name' => 'Gallery Download',
        'singular_name' => 'Gallery Download',
        'all_items' => 'All Gallery Downloads',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Gallery Download',
        'edit' => 'Edit',
        'edit_item' => 'Edit Gallery Download',
        'new_item' => 'New Gallery Download',
        'view_item' => 'View Gallery Download',
        'search_items' => 'Search Gallery Downloads',
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
        'rewrite' => array( 'slug' => 'gallery-download', 'with_front' => false ),
        'has_archive' => 'gallery-download',
        'capability_type' => 'post',
        'hierarchical' => false,
        'taxonomies' => array('post_tag'),
        'supports' => array( 'title', 'editor', 'revisions', 'thumbnail')
      ) /* end of options */
    ); /* end of register post type */
    
    register_taxonomy_for_object_type('post_tag', 'gallery-download');
    register_taxonomy_for_object_type( 'category', 'gallery-download' );

    

  } // manic_post_type_register
  add_action('init', 'manic_post_type_register');

?>