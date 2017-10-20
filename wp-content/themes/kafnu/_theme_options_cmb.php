<?php

// https://github.com/WebDevStudios/CMB2-Snippet-Library/blob/master/options-and-settings-pages/theme-options-cmb.php

/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class Manic_Admin {
  /**
   * Option key, and option page slug
   * @var string
   */
  private $key = 'manic_options';
  /**
   * Options page metabox id
   * @var string
   */
  private $metabox_id = 'manic_option_metabox';
  /**
   * Options Page title
   * @var string
   */
  protected $title = '';
  /**
   * Options Page hook
   * @var string
   */
  protected $options_page = '';
  /**
   * Holds an instance of the object
   *
   * @var Manic_Admin
   **/
  private static $instance = null;
  /**
   * Constructor
   * @since 0.1.0
   */
  private function __construct() {
    // Set our title
    $this->title = 'Kafnu Site Options';
  }
  /**
   * Returns the running object
   *
   * @return Manic_Admin
   **/
  public static function get_instance() {
    if( is_null( self::$instance ) ) {
      self::$instance = new self();
      self::$instance->hooks();
    }
    return self::$instance;
  }
  /**
   * Initiate our hooks
   * @since 0.1.0
   */
  public function hooks() {
    add_action( 'admin_init', array( $this, 'init' ) );
    add_action( 'admin_menu', array( $this, 'add_options_page' ) );
    add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
  }
  /**
   * Register our setting to WP
   * @since  0.1.0
   */
  public function init() {
    register_setting( $this->key, $this->key );
  }
  /**
   * Add menu options page
   * @since 0.1.0
   */
  public function add_options_page() {
    $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
    // Include CMB CSS in the head to avoid FOUC
    add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
  }
  /**
   * Admin page markup. Mostly handled by CMB2
   * @since  0.1.0
   */
  public function admin_page_display() {
    ?>
    <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
      <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
      <?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
    </div>
    <?php
  }
  /**
   * Add the options metabox to the array of metaboxes
   * @since  0.1.0
   */
  function add_options_page_metabox() {
    // hook in our save notices
    add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );
    $cmb = new_cmb2_box( array(
      'id'         => $this->metabox_id,
      'hookup'     => false,
      'cmb_styles' => false,
      'show_on'    => array(
        // These are important, don't remove
        'key'   => 'options-page',
        'value' => array( $this->key, )
      ),
    ) );


    //    ____ _____  _    ____ _____
    //   / ___|_   _|/ \  |  _ \_   _|
    //   \___ \ | | / _ \ | |_) || |
    //    ___) || |/ ___ \|  _ < | |
    //   |____/ |_/_/   \_\_| \_\|_|
    //



    $cmb->add_field( array(
      'name' => 'General Options',
      'desc' => '',
      'id'   => PREFIX . 'general_title',
      'type' => 'title',
    ) );

    $field1 = $cmb->add_field( array(
      'name' => 'Site Language',
      'desc' => 'language used on the site',
      'id'   => PREFIX . 'site_language',
      'type' => 'select',
      'default'          => 'english',
      'options'          => array(
        'english'   => 'English',
        'chinese'   => 'Chinese',
      ),
    ) );

    $field2 = $cmb->add_field( array(
      'name' => 'Footer Copyright',
      'desc' => 'the copyright copy found on the footer, use html &copy for the copyright circle',
      'id'   => PREFIX . 'footer_copyright',
      'type' => 'text',
    ) );

    $cmb->add_field( array(
      'name' => 'Social Media Grid',
      'desc' => 'items found in the social media grid',
      'id'   => PREFIX . 'social_media_grid_title',
      'type' => 'title',
    ) );

    $field_3 = $cmb->add_field( array(
        'name'    => 'Social Media Grid Items',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'social_media_grid_items',
        'type'    => 'custom_attached_posts',
        'options' => array(
          'show_thumbnails' => true, // Show thumbnails on the left
          'filter_boxes'    => true, // Show a text box for filtering the results
          'query_args'      => array( 
            'posts_per_page' => -1,
            'post_type' => 'social-media-item',
          ), // override the get_posts args
        )
    ) );

    $cmb->add_field( array(
      'name' => 'Social Media Grid Large',
      'desc' => 'items found in the large version of the social media grid',
      'id'   => PREFIX . 'social_media_grid_large_title',
      'type' => 'title',
    ) );

    $field_4 = $cmb->add_field( array(
        'name'    => 'Social Media Grid Large Items',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'social_media_grid_large_items',
        'type'    => 'custom_attached_posts',
        'options' => array(
          'show_thumbnails' => true, // Show thumbnails on the left
          'filter_boxes'    => true, // Show a text box for filtering the results
          'query_args'      => array( 
            'posts_per_page' => -1,
            'post_type' => 'social-media-item',
          ), // override the get_posts args
        )
    ) );

    $cmb->add_field( array(
      'name' => 'Kafnu Event',
      'desc' => 'items found in the kafnu event',
      'id'   => PREFIX . 'kafnu_event_title',
      'type' => 'title',
    ) );

    $field_3 = $cmb->add_field( array(
        'name'    => 'Kafnu Events',
        'desc' => 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.',
        'id'      => PREFIX . 'selected_kafnu_events',
        'type'    => 'custom_attached_posts',
        'options' => array(
          'show_thumbnails' => true, // Show thumbnails on the left
          'filter_boxes'    => true, // Show a text box for filtering the results
          'query_args'      => array( 
            'posts_per_page' => -1,
            'post_type' => 'kafnu-event',
          ), // override the get_posts args
        )
    ) );
    





    //    _____ _   _ ____
    //   | ____| \ | |  _ \
    //   |  _| |  \| | | | |
    //   | |___| |\  | |_| |
    //   |_____|_| \_|____/
    //

  }
  /**
   * Register settings notices for display
   *
   * @since  0.1.0
   * @param  int   $object_id Option key
   * @param  array $updated   Array of updated fields
   * @return void
   */
  public function settings_notices( $object_id, $updated ) {
    if ( $object_id !== $this->key || empty( $updated ) ) {
      return;
    }
    add_settings_error( $this->key . '-notices', '', 'Settings updated', 'updated' );
    settings_errors( $this->key . '-notices' );
  }
  /**
   * Public getter method for retrieving protected/private variables
   * @since  0.1.0
   * @param  string  $field Field to retrieve
   * @return mixed          Field value or exception is thrown
   */
  public function __get( $field ) {
    // Allowed fields to retrieve
    if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
      return $this->{$field};
    }
    throw new Exception( 'Invalid property: ' . $field );
  }
}
/**
 * Helper function to get/return the Manic_Admin object
 * @since  0.1.0
 * @return Manic_Admin object
 */
function manic_admin() {
  return Manic_Admin::get_instance();
}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function manic_get_option( $key = '' ) {
  return cmb2_get_option( manic_admin()->key, $key );
}
// Get it started
manic_admin();