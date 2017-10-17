<?php
$location_banner_title = wds_page_builder_get_this_part_data( PREFIX . "location_banner_title" );
$location_banner_subtitle = wds_page_builder_get_this_part_data( PREFIX . "location_banner_subtitle" );
?>
<!--
         ____    _    _   _ _   _ _____ ____
        | __ )  / \  | \ | | \ | | ____|  _ \
        |  _ \ / _ \ |  \| |  \| |  _| | |_) |
        | |_) / ___ \| |\  | |\  | |___|  _ <
        |____/_/   \_\_| \_|_| \_|_____|_| \_\

      -->

      <article id="page-default-banner-section" class="country-version">
        <div id="page-default-banner-image" class="visible-lg visible-md">
          <div class="container-fluid reduce-padding">
            <div class="row">
              <div class="col-lg-9 col-md-8 no-padding">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/hong-kong-banner.jpg">
                </div>
              </div>
              <div class="col-lg-3 col-md-4 no-padding">
                <div id="banner-sidebar-container" class="kafnu-slick-slider">

                  <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>upcoming events</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="images_cms/country/event-slider-01.jpg"
                        data-image-tablet="images_cms/country/event-slider-01.jpg"
                        data-image-mobile="images_cms/country/event-slider-01.jpg" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5>Vision Board for the Future</h5>
                      <p>12 October 2017 – 6:30 PM</p>
                      <p>We celebrate Kafnu’s opening with a stimulating panel discussion, tasty cocktails, and special guests.</p>
                    </div>
                  </div><!-- banner-sidebar-item -->                              

                </div> <!-- banner-sidebar-container -->
              </div>
            </div> <!-- row -->
          </div>
        </div> <!-- page-default-banner-image -->  
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="images_cms/country/hong-kong-banner.jpg"
                        data-image-mobile="images_cms/country/hong-kong-banner.jpg">
          </div>
        </div>

        <div id="page-default-banner-copy-container" class="left-version">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">

                <div id="page-default-banner-copy">
                  <h1><?php echo $location_banner_title; ?></h1>
                  <h3><?php echo $location_banner_subtitle; ?></h3>
                </div> <!-- page-default-banner-copy -->

              </div>
            </div>
          </div>
        </div> <!-- page-default-banner-copy-container -->

      </article> <!-- page-default-banner-section -->