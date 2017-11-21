<?php 

  $home_banner_title = wds_page_builder_get_this_part_data( PREFIX . "home_banner_title" );
  $home_banner_subtitle = wds_page_builder_get_this_part_data( PREFIX . "home_banner_subtitle" );
  $home_banner_link_copy = wds_page_builder_get_this_part_data( PREFIX . "home_banner_link_copy" );
  $home_banner_link_url = wds_page_builder_get_this_part_data( PREFIX . "home_banner_link_url" );
  $home_banner_image = wds_page_builder_get_this_part_data( PREFIX . "home_banner_image" );
  $home_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "home_banner_image_tablet" );
  $home_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "home_banner_image_mobile" );

  // cta
  $home_banner_link_url = home_url( $home_banner_link_url );

  // image
  
  // image
  $home_banner_image_id = wds_page_builder_get_this_part_data( PREFIX . 'home_banner_image_id' );
  $home_banner_image_tablet = get_manic_tablet_image($home_banner_image_id, $home_banner_image_tablet);  
  $home_banner_image_mobile = get_manic_mobile_image($home_banner_image_id, $home_banner_image_mobile);

?>

      
      
      <article id="page-default-banner-section" class="">
        <div id="page-default-banner-image" class="visible-lg visible-md">
          <div class="manic-image-container">
            <img src="" data-image-desktop="<?php echo $home_banner_image; ?>">
          </div>
        </div>
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="<?php echo $home_banner_image_tablet; ?>"
                        data-image-mobile="<?php echo $home_banner_image_mobile; ?>">
          </div>
        </div>
        
        <div id="page-default-banner-copy-container" class="left-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">

                <div id="page-default-banner-copy">
                  <h1><?php echo $home_banner_title; ?></h1>
                  <h3><?php echo $home_banner_subtitle; ?></h3>
                  
                  <a href="<?php echo $home_banner_link_url; ?>" class="square-cta border-version"><?php echo $home_banner_link_copy; ?></a>

                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->