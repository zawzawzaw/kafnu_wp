<?php 

  $default_banner_short_title = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_title" );
  $default_banner_short_subtitle = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_subtitle" );
  $default_banner_short_link_copy = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_link_copy" );
  $default_banner_short_link_url = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_link_url" );
  $default_banner_short_image = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_image" );
  $default_banner_short_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_image_tablet" );
  $default_banner_short_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "default_banner_short_image_mobile" );

  
  // image
  $default_banner_short_image_id = wds_page_builder_get_this_part_data( PREFIX . 'default_banner_short_image_id' );
  $default_banner_short_image_tablet = get_manic_tablet_image($default_banner_short_image_id, $default_banner_short_image_tablet);  
  $default_banner_short_image_mobile = get_manic_mobile_image($default_banner_short_image_id, $default_banner_short_image_mobile);

?>

<article id="page-default-banner-section">
  <div id="page-default-banner-image" class="press-version-02 visible-lg visible-md">
    <div class="manic-image-container">
      <img src="" data-image-desktop="<?php echo $default_banner_short_image; ?>">
    </div>
  </div>
  <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
    <div class="manic-image-container has-window-height">
      <img src="" data-image-tablet="<?php echo $default_banner_short_image_tablet; ?>"
                  data-image-mobile="<?php echo $default_banner_short_image_mobile; ?>">
    </div>
  </div>

  <div id="page-default-banner-copy-container" class="center-version-02 medium-text-version">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          <div id="page-default-banner-copy">
            <h1><?php echo $default_banner_short_title; ?></h1>
            <h3><?php echo $default_banner_short_subtitle; ?></h3>
          </div> <!-- page-default-banner-copy -->

        </div>
      </div>
    </div>
  </div> <!-- page-default-banner-copy-container -->

</article> <!-- page-default-banner-section -->