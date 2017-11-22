<?php
/*
Author: Jairus Aragon
URL: http://www.wearemanic.com/

*/

/************* INCLUDE NEEDED FILES ***************/

/*
update_option( 'siteurl', 'http://visionbodyasia.com' );
update_option( 'home', 'http://visionbodyasia.com' );
*/

define('THEMEROOT', get_stylesheet_directory_uri());
// define('DEBUG', true);
define('DEBUG', false);

define('PREFIX', '_kafnu_');

// upload larger images
ini_set( 'upload_max_size' , '64M' );
ini_set( 'post_max_size', '64M');
ini_set( 'max_execution_time', '300' );

// removes the default limit of 5 from the search results and archives/tags
function search_results_per_page( $query ) {
  if( $query->is_search )
    $query->set( 'posts_per_page' , -1 );
  return $query;
}
add_filter( 'pre_get_posts' , 'search_results_per_page' );


function limit_posts_per_archive_page() {
  if ( is_category() )
    set_query_var('posts_per_archive_page', -1); // or use variable key: posts_per_page
}
add_filter('pre_get_posts', 'limit_posts_per_archive_page');


function add_custom_admin_css(){
  wp_register_style( 'manic-custom-admin-stylesheet', THEMEROOT . '/kafnu_assets/css/admin.css', array(), '');
  wp_enqueue_style( 'manic-custom-admin-stylesheet' );
}
add_action ('admin_head', 'add_custom_admin_css');



function manic_script_and_styles(){
  global $wp_styles; // call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  if (!is_admin()) {

    wp_deregister_script('jquery');         // add jquery manually (compressed)
    wp_deregister_script( 'wp-embed' );

  }
}





// cleaning up head
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// clean up footer
// https://wordpress.stackexchange.com/questions/211701/what-does-wp-embed-min-js-do-in-wordpress-4-4
function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );




//    ___ __  __    _    ____ _____
//   |_ _|  \/  |  / \  / ___| ____|
//    | || |\/| | / _ \| |  _|  _|
//    | || |  | |/ ___ \ |_| | |___
//   |___|_|  |_/_/   \_\____|_____|
//

// 640 width = 2X for mobile devices
// 1152 width = 768 x 1.5 for tablet

add_image_size( 'manic-mobile', 640, 9999, false );
add_image_size( 'manic-tablet', 1152, 9999, false );

add_filter( 'image_size_names_choose', 'bones_custom_image_sizes' );

function bones_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'manic-mobile' => __('640px by ___ px'),
        'manic-tablet' => __('1152px by ___ px'),
    ) );
}








//    __  __ _____ _   _ _   _
//   |  \/  | ____| \ | | | | |
//   | |\/| |  _| |  \| | | | |
//   | |  | | |___| |\  | |_| |
//   |_|  |_|_____|_| \_|\___/
//


// wp menus
add_theme_support( 'menus' );

// registering wp3+ menus
register_nav_menus(
  array(
    'desktop-header-menu' => 'Desktop Header Menu',
    'mobile-header-menu' => 'Mobile Header Menu',
    'login-links' => 'Login Links',
    'footer-links' => 'Footer Links',
    'press-release-menu' => 'Press Release Menu',
  )
);








// http://wordpress.stackexchange.com/questions/226884/wordpress-add-javascriptvoid0-to-menu-link-item

add_filter('walker_nav_menu_start_el', 'wpse_226884_replace_hash', 999);
/**
 * Replace # with js
 * @param string $menu_item item HTML
 * @return string item HTML
 */
function wpse_226884_replace_hash($menu_item) {
  if (strpos($menu_item, 'href="#"') !== false) {
    $menu_item = str_replace('href="#"', 'href="javascript:void(0);"', $menu_item);
  }
  return $menu_item;
}










//    _____  _    ____ ____
//   |_   _|/ \  / ___/ ___|
//     | | / _ \| |  _\___ \
//     | |/ ___ \ |_| |___) |
//     |_/_/   \_\____|____/
//

// https://wordpress.org/support/topic/custom-post-type-tagscategories-archive-page

function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');

    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('post','social-media-item'); // replace cpt to your custom post type

    $query->set('post_type',$post_type);
    return $query;
  }
}
add_filter('pre_get_posts', 'query_post_type');





// http://wordpress.stackexchange.com/questions/179585/remove-category-tag-author-from-the-archive-title

function custom_get_archive_title($title) {

  if ( is_category() ) {

    $title = single_cat_title( '', false );

  } elseif ( is_tag() ) {

    $title = single_tag_title( '', false );

  } elseif ( is_author() ) {

    $title = '<span class="vcard">' . get_the_author() . '</span>' ;

  }

  return $title;
}
add_filter('get_the_archive_title', 'custom_get_archive_title');




// add except to pages
// http://www.wpbeginner.com/plugins/add-excerpts-to-your-pages-in-wordpress/

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
  add_post_type_support( 'page', 'excerpt' );
}


// http://www.wpbeginner.com/beginners-guide/how-to-add-featured-image-or-post-thumbnails-in-wordpress/
// this is only here to fix the JS cause yoast JS dying = cmb2 js dying
add_action( 'init', 'my_add_thumbnails_to_pages' );
function my_add_thumbnails_to_pages() {
  add_theme_support( 'post-thumbnails' );
}






//    _     ___   ____ ___ _   _   ____   _    ____ _____
//   | |   / _ \ / ___|_ _| \ | | |  _ \ / \  / ___| ____|
//   | |  | | | | |  _ | ||  \| | | |_) / _ \| |  _|  _|
//   | |__| |_| | |_| || || |\  | |  __/ ___ \ |_| | |___
//   |_____\___/ \____|___|_| \_| |_| /_/   \_\____|_____|
//


function my_login_logo() { ?>

    <style type="text/css">
        #login h1 a, .login h1 a {
            display: block;
            width: 300px;
            height: 172px;

            background: transparent url(<?php echo THEMEROOT ?>/kafnu_assets/images/logo/logo-kafnu-color-vertical.svg) center center no-repeat;
            background-size: 300px 172px;
            -webkit-background-size: 300px 172px;

            margin-bottom: 30px;
        }
    </style>

<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );






//     ____ _   _ ____ _____ ___  __  __   ____   ___  ____ _____   _______   ______  _____ ____
//    / ___| | | / ___|_   _/ _ \|  \/  | |  _ \ / _ \/ ___|_   _| |_   _\ \ / /  _ \| ____/ ___|
//   | |   | | | \___ \ | || | | | |\/| | | |_) | | | \___ \ | |     | |  \ V /| |_) |  _| \___ \
//   | |___| |_| |___) || || |_| | |  | | |  __/| |_| |___) || |     | |   | | |  __/| |___ ___) |
//    \____|\___/|____/ |_| \___/|_|  |_| |_|    \___/|____/ |_|     |_|   |_| |_|   |_____|____/
//


require_once( '_theme_post_types.php' );




//    ____  _   _  ___  ____ _____    ____ ___  ____  _____ ____
//   / ___|| | | |/ _ \|  _ \_   _|  / ___/ _ \|  _ \| ____/ ___|
//   \___ \| |_| | | | | |_) || |   | |  | | | | | | |  _| \___ \
//    ___) |  _  | |_| |  _ < | |   | |__| |_| | |_| | |___ ___) |
//   |____/|_| |_|\___/|_| \_\|_|    \____\___/|____/|_____|____/
//



// kafnu_press_quote

function kafnu_press_quote_shortcode( $atts, $content = null ) {
  return '<div class="press-release-content-quote">'. $content .'</a></div>';
}
add_shortcode('kafnu_press_quote', 'kafnu_press_quote_shortcode');




// kafnu_media_contact

function kafnu_media_contact_shortcode( $atts, $content = null ) {

  // defaults
  extract( shortcode_atts( array(
    'subtitle' => '',
    'name' => 'Media Contact Name',
    'position' => 'Media Contact Position',
    'phone' => '',
    'email' => '',
  ), $atts ) );

  $return_str = '';
  $return_str .= '<div class="press-release-content-media-contact">';
  $return_str .=   '<div class="press-release-content-media-contact-name">';

  if ($subtitle != '') {
    $return_str .=     '<h5>' . $subtitle . '</h5>';
  }

  $return_str .=     '<h3>' . $name . '</h3>';
  $return_str .=     '<p>' .  $position . '</p>';
  $return_str .=   '</div>';
  $return_str .=   '<div class="press-release-content-media-contact-details">';

  if ($phone != '') {
    $return_str .=   '<a href="tel:' . $phone . '">' . $phone . '</a>';
  }
  if ($email != '') {
    $return_str .=   '<a href="mailto:' . $email . '">' . $email . '</a>';
  }
  $return_str .=   '</div>';
  $return_str .= '</div>';

  return $return_str;
}
add_shortcode('kafnu_media_contact', 'kafnu_media_contact_shortcode');





//     ____ _   _ ____ _____ ___  __  __   _____ ___ _____ _     ____  ____
//    / ___| | | / ___|_   _/ _ \|  \/  | |  ___|_ _| ____| |   |  _ \/ ___|
//   | |   | | | \___ \ | || | | | |\/| | | |_   | ||  _| | |   | | | \___ \
//   | |___| |_| |___) || || |_| | |  | | |  _|  | || |___| |___| |_| |___) |
//    \____|\___/|____/ |_| \___/|_|  |_| |_|   |___|_____|_____|____/|____/
//



add_action( 'cmb2_render_manic_description', 'custom_cmb2_render_manic_description', 10, 5 );
function custom_cmb2_render_manic_description( $field_args, $value, $object_id, $object_type, $field_type_object ) {
  $value = wp_parse_args( $value, array(
      'title' => '',
      'copy'      => '',
      'url' => '',
  ) );

  // start of html (gspa description)
  ?>
    <div class="custom-metabox-item">
      <label>Title</label>
      <?php echo $field_type_object->input( 
        array( 
          'name'  => $field_type_object->_name( '[title]' ),
          'id'    => $field_type_object->_id( '_title' ),
          'desc'  => '',
          'value' => $value['title'],
        ));
      ?>
    </div>

    <div class="custom-metabox-item">
      <label>Copy</label>
      <?php echo $field_type_object->textarea( 
        array( 
          'name'  => $field_type_object->_name( '[copy]' ),
          'id'    => $field_type_object->_id( '_copy' ),
          'desc'  => '',
          'value' => $value['copy'],
          'sanitization_cb' => false,
        ));
      ?>
    </div>

    <div class="custom-metabox-item">
      <label>URL</label>
      <?php echo $field_type_object->input( 
        array( 
          'name'  => $field_type_object->_name( '[url]' ),
          'id'    => $field_type_object->_id( '_url' ),
          'desc'  => '',
          'value' => $value['url'],
        ));
      ?>
    </div>
  <?php
  // end of html (gspa description)

} // custom_cmb2_render_manic_description


add_filter( 'cmb2_sanitize_manic_description', 'cmb2_sanitize_manic_description_callback', 10, 2 );
function cmb2_sanitize_manic_description_callback( $override_value, $value ) {
  return $value;
}


/////////////////////


add_action( 'cmb2_render_title_hover', 'custom_cmb2_render_title_hover', 10, 5 );
function custom_cmb2_render_title_hover( $field_args, $value, $object_id, $object_type, $field_type_object ) {
  $value = wp_parse_args( $value, array(
      'title' => '',
      'titlehover'      => '',
  ) );

  // start of html (gspa description)
  ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">

          <div class="custom-metabox-item">
            <label>Title</label>
            <?php echo $field_type_object->input( 
              array( 
                'name'  => $field_type_object->_name( '[title]' ),
                'id'    => $field_type_object->_id( '_title' ),
                'desc'  => '',
                'value' => $value['title'],
              ));
            ?>
          </div>

        </div>
        <div class="col-md-5">

          <div class="custom-metabox-item">
            <label>Title Hover</label>
            <?php echo $field_type_object->input( 
              array( 
                'name'  => $field_type_object->_name( '[titlehover]' ),
                'id'    => $field_type_object->_id( '_titlehover' ),
                'desc'  => '',
                'value' => $value['titlehover'],
              ));
            ?>
          </div>

        </div>
      </div>
    </div>

  <?php
  // end of html (gspa description)

} // custom_cmb2_render_title_hover


add_filter( 'cmb2_sanitize_title_hover', 'cmb2_sanitize_title_hover_callback', 10, 2 );
function cmb2_sanitize_title_hover_callback( $override_value, $value ) {
  return $value;
}






// MANIC CTA


add_action( 'cmb2_render_manic_cta', 'custom_cmb2_render_manic_cta', 10, 5 );
function custom_cmb2_render_manic_cta( $field_args, $value, $object_id, $object_type, $field_type_object ) {
  $value = wp_parse_args( $value, array(
      'copy'      => '',
      'link'      => '',
  ) );

  // start of html (gspa description)
  ?>

    <div class="row">
      <div class="col-md-6">

        <div class="custom-metabox-item">
          <label style="display:block;">Copy</label>
          <?php echo $field_type_object->input( 
            array( 
              'name'  => $field_type_object->_name( '[copy]' ),
              'id'    => $field_type_object->_id( '_copy' ),
              'desc'  => '',
              'value' => $value['copy'],
              'sanitization_cb' => false,
            ));
          ?>
        </div>

      </div>
      <div class="col-md-6">
        
        <div class="custom-metabox-item">
          <label style="display:block;">Link</label>
          <?php echo $field_type_object->input( 
            array( 
              'name'  => $field_type_object->_name( '[link]' ),
              'id'    => $field_type_object->_id( '_link' ),
              'desc'  => '',
              'value' => $value['link'],
              'sanitization_cb' => false,
            ));
          ?>
        </div>

      </div>
    </div>


  <?php
  // end of html (gspa description)

} // custom_cmb2_render_manic_cta


add_filter( 'cmb2_sanitize_manic_cta', 'cmb2_sanitize_manic_cta_callback', 10, 2 );
function cmb2_sanitize_manic_cta_callback( $override_value, $value ) {
  return $value;
}










require_once( 'custom_fields/_field-social-media-item.php' );
require_once( 'custom_fields/_field-kafnu-event.php' );
require_once( 'custom_fields/_field-booking-item.php' );
require_once( 'custom_fields/_field-community-manager.php' );

require_once( 'custom_fields/_field-press-release.php' );
require_once( 'custom_fields/_field-media-contact.php' );
require_once( 'custom_fields/_field-gallery-download.php' );



require_once( 'custom_fields/field-default-banner.php' );
require_once( 'custom_fields/field-default-featured-copy-and-image.php' );
require_once( 'custom_fields/field-default-image-and-note.php' );
require_once( 'custom_fields/field-default-copy-and-image.php' );

require_once( 'custom_fields/field-default-centered-text.php' );
require_once( 'custom_fields/field-default-social-media-grid-large.php' );
require_once( 'custom_fields/field-default-social-media-grid.php' );
require_once( 'custom_fields/field-home-banner.php' );
require_once( 'custom_fields/field-home-image-links.php' );
require_once( 'custom_fields/field-home-locations.php' );

require_once( 'custom_fields/field-location-banner.php' );
require_once( 'custom_fields/field-location-booking.php' );
require_once( 'custom_fields/field-location-live.php' );
require_once( 'custom_fields/field-location-work.php' );
require_once( 'custom_fields/field-location-play.php' );
require_once( 'custom_fields/field-location-learn.php' );
require_once( 'custom_fields/field-location-rest.php' );
require_once( 'custom_fields/field-location-contacts.php' );
require_once( 'custom_fields/field-contact-banner.php' );
require_once( 'custom_fields/field-contact-map-and-postit.php' );
require_once( 'custom_fields/field-contact-map-and-postit-02.php' );

require_once( 'custom_fields/field-default-logo-and-copy.php' );
require_once( 'custom_fields/field-community-slider.php' );
require_once( 'custom_fields/field-community-events.php' );


require_once( 'custom_fields/field-location-content-mobile-slider.php' );
require_once( 'custom_fields/field-location-events-mobile.php' );
require_once( 'custom_fields/field-plain-html.php' );


// new press release pages
require_once( 'custom_fields/field-default-banner-short.php' );
require_once( 'custom_fields/field-press-release-banner.php' );
require_once( 'custom_fields/field-press-release-fact-sheet-and-media-contact.php' );
require_once( 'custom_fields/field-press-release-gallery-download-masonry.php' );
require_once( 'custom_fields/field-press-release-gallery-download-slider.php' );
require_once( 'custom_fields/field-press-release-media-contacts.php' );
require_once( 'custom_fields/field-press-release-list.php' );





//     ___  ____ _____ ___ ___  _   _ ____
//    / _ \|  _ \_   _|_ _/ _ \| \ | / ___|
//   | | | | |_) || |  | | | | |  \| \___ \
//   | |_| |  __/ | |  | | |_| | |\  |___) |
//    \___/|_|    |_| |___\___/|_| \_|____/
//

require_once( '_theme_options_cmb.php' );







function get_manic_mobile_image($image_id, $image_mobile){

  $target_image_mobile = wp_get_attachment_image_src($image_id, 'manic-mobile');

  // get [0] of the returned array
  if (isset($target_image_mobile) && is_array($target_image_mobile)) {
    $target_image_mobile = $target_image_mobile[0];
  }

  if (isset($image_mobile) && $image_mobile != ''){
    $target_image_mobile = $image_mobile;
  }

  return $target_image_mobile;
}



function get_manic_tablet_image($image_id, $image_tablet){
  $target_image_tablet = wp_get_attachment_image_src($image_id, 'manic-tablet');

  // get [0] of the returned array
  if (isset($target_image_tablet) && is_array($target_image_tablet)) {
    $target_image_tablet = $target_image_tablet[0];
  }

  if (isset($image_tablet) && $image_tablet != ''){
    $target_image_tablet = $image_tablet;
  }

  return $target_image_tablet;
}



//    ______     ______   _   _ ____  _     ___    _    ____    ____  _   _ ____  ____   ___  ____ _____
//   / ___\ \   / / ___| | | | |  _ \| |   / _ \  / \  |  _ \  / ___|| | | |  _ \|  _ \ / _ \|  _ \_   _|
//   \___ \\ \ / / |  _  | | | | |_) | |  | | | |/ _ \ | | | | \___ \| | | | |_) | |_) | | | | |_) || |
//    ___) |\ V /| |_| | | |_| |  __/| |__| |_| / ___ \| |_| |  ___) | |_| |  __/|  __/| |_| |  _ < | |
//   |____/  \_/  \____|  \___/|_|   |_____\___/_/   \_\____/  |____/ \___/|_|   |_|    \___/|_| \_\|_|
//

// https://css-tricks.com/snippets/wordpress/allow-svg-through-wordpress-media-uploader/

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg_thumb_display() {
  echo '<style type="text/css">
    td.media-icon img[src$=".svg"], img[src$=".svg"].attachment-post-thumbnail { 
      width: 100% !important; 
      height: auto !important; 
    }
    </style>';
}
add_action('admin_head', 'fix_svg_thumb_display');









//     ___  ____ _____ ___ ___  _   _ ____
//    / _ \|  _ \_   _|_ _/ _ \| \ | / ___|
//   | | | | |_) || |  | | | | |  \| \___ \
//   | |_| |  __/ | |  | | |_| | |\  |___) |
//    \___/|_|    |_| |___\___/|_| \_|____/
//


// require_once( '_theme_options_cmb.php' );







// http://stackoverflow.com/questions/2544870/remove-main-editor-from-wordpress-edit-page-screen
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');


// https://developer.wordpress.org/reference/functions/add_editor_style/
function wpdocs_theme_add_editor_styles() {
  // add_editor_style( 'https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i,900' );
  add_editor_style( THEMEROOT . '/kafnu_assets/css/wysiwyg.css' );

}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );




//    _____ _____ ____
//   | ____|_   _/ ___|
//   |  _|   | || |
//   | |___  | || |___
//   |_____| |_| \____|
//


// http://stackoverflow.com/questions/1734250/what-is-the-equivalent-of-javascripts-encodeuricomponent-in-php
function custom_encodeURIComponent($str) {
  $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
  return strtr(rawurlencode($str), $revert);
}







//     ____ _   _ ____ _____ ___  __  __   ____   ___  ____ _____   _______   ______  _____   _____ _   _ _   _  ____ _____ ___ ___  _   _
//    / ___| | | / ___|_   _/ _ \|  \/  | |  _ \ / _ \/ ___|_   _| |_   _\ \ / /  _ \| ____| |  ___| | | | \ | |/ ___|_   _|_ _/ _ \| \ | |
//   | |   | | | \___ \ | || | | | |\/| | | |_) | | | \___ \ | |     | |  \ V /| |_) |  _|   | |_  | | | |  \| | |     | |  | | | | |  \| |
//   | |___| |_| |___) || || |_| | |  | | |  __/| |_| |___) || |     | |   | | |  __/| |___  |  _| | |_| | |\  | |___  | |  | | |_| | |\  |
//    \____|\___/|____/ |_| \___/|_|  |_| |_|    \___/|____/ |_|     |_|   |_| |_|   |_____| |_|    \___/|_| \_|\____| |_| |___\___/|_| \_|
//


// https://wordpress.stackexchange.com/questions/104011/show-tags-of-custom-post-type-only
function post_type_tags( $post_type = '' ) {
    global $wpdb;

    if ( empty( $post_type ) ) {
        $post_type = get_post_type();
    }

    return $wpdb->get_results( $wpdb->prepare( "
        SELECT COUNT( DISTINCT tr.object_id ) 
            AS count, tt.taxonomy, tt.description, tt.term_taxonomy_id, t.name, t.slug, t.term_id 
        FROM {$wpdb->posts} p 
        INNER JOIN {$wpdb->term_relationships} tr 
            ON p.ID=tr.object_id 
        INNER JOIN {$wpdb->term_taxonomy} tt 
            ON tt.term_taxonomy_id=tr.term_taxonomy_id 
        INNER JOIN {$wpdb->terms} t 
            ON t.term_id=tt.term_taxonomy_id 
        WHERE p.post_type=%s 
            AND tt.taxonomy='post_tag' 
        GROUP BY tt.term_taxonomy_id 
        ORDER BY count DESC
    ", $post_type ) );
}

// shows posts with a valid category
// modified by jairus
function post_type_categories( $post_type = '' ) {
    global $wpdb;

    if ( empty( $post_type ) ) {
        $post_type = get_post_type();
    }

    return $wpdb->get_results( $wpdb->prepare( "
        SELECT COUNT( DISTINCT tr.object_id ) 
            AS count, tt.taxonomy, tt.description, tt.term_taxonomy_id, t.name, t.slug, t.term_id 
        FROM {$wpdb->posts} p 
        INNER JOIN {$wpdb->term_relationships} tr 
            ON p.ID=tr.object_id 
        INNER JOIN {$wpdb->term_taxonomy} tt 
            ON tt.term_taxonomy_id=tr.term_taxonomy_id 
        INNER JOIN {$wpdb->terms} t 
            ON t.term_id=tt.term_taxonomy_id 
        WHERE p.post_type=%s 
            AND tt.taxonomy='category' 
        GROUP BY tt.term_taxonomy_id 
        ORDER BY count DESC
    ", $post_type ) );
}









?>