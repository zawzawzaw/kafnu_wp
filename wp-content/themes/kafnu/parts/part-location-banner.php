<?php
$location_banner_title = wds_page_builder_get_this_part_data( PREFIX . "location_banner_title" );
$location_banner_subtitle = wds_page_builder_get_this_part_data( PREFIX . "location_banner_subtitle" );
$location_banner_image = wds_page_builder_get_this_part_data( PREFIX . "location_banner_image" );
$location_banner_image_tablet = wds_page_builder_get_this_part_data( PREFIX . "location_banner_image_tablet" );
$location_banner_image_mobile = wds_page_builder_get_this_part_data( PREFIX . "location_banner_image_mobile" );

$selected_kafnu_events = manic_get_option( PREFIX . 'selected_kafnu_events' );
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
                  <img src="" data-image-desktop="<?php echo $location_banner_image; ?>">
                </div>
              </div>
              <div class="col-lg-3 col-md-4 no-padding">
                <div id="banner-sidebar-container" class="kafnu-slick-slider">

                  <?php

                  //    ____ _____  _    ____ _____
                  //   / ___|_   _|/ \  |  _ \_   _|
                  //   \___ \ | | / _ \ | |_) || |
                  //    ___) || |/ ___ \|  _ < | |
                  //   |____/ |_/_/   \_\_| \_\|_|
                  //

                  global $post;

                  $selected_kafnu_events_post_array = $selected_kafnu_events;                  // IMPORTANT

                  if ($selected_kafnu_events_post_array != ''):


                    // init
                    $wow_offset = 45;


                    for ($i=0; $i < count($selected_kafnu_events_post_array) ; $i++):

                    $selected_kafnu_event_post_index = $i + 1;
                    $selected_kafnu_event_post_id = $selected_kafnu_events_post_array[$i%count($selected_kafnu_events_post_array)];
                    $post = get_post( $selected_kafnu_event_post_id );
                    setup_postdata( $post );

                    $selected_kafnu_event_post_status = get_post_status();

                      if ($selected_kafnu_event_post_status == 'publish'):

                        // CMB2 custom fields
                                                
                        $kafnu_event_title     = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_title", true );
                        $kafnu_event_image   = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_image", true );
                        $kafnu_event_time    = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_time", true );
                        $kafnu_event_copy   = get_post_meta( $selected_kafnu_event_post_id, PREFIX . "kafnu_event_copy", true );
                        

                        $wow_offset = $wow_offset + 5;
                ?>

                  <div class="banner-sidebar-item">
                    <div class="banner-sidebar-item-title">
                      <h6>upcoming events</h6>                  
                    </div>
                    <div class="banner-sidebar-item-image">
                      <div class="manic-image-container">
                        <img src="" data-image-desktop="<?php echo $kafnu_event_image; ?>"
                        data-image-tablet="<?php echo $kafnu_event_image; ?>"
                        data-image-mobile="<?php echo $kafnu_event_image; ?>" alt="">
                      </div>
                    </div>
                    <div class="banner-sidebar-item-text">
                      <h5><?php echo get_the_title(); ?></h5>
                      <p><?php echo $kafnu_event_time; ?></p>
                      <p><?php echo $kafnu_event_copy; ?></p>
                    </div>
                  </div><!-- banner-sidebar-item -->

                <?php 
                  endif;
                endfor;
              endif;

              wp_reset_postdata();

              //    _____ _   _ ____
              //   | ____| \ | |  _ \
              //   |  _| |  \| | | | |
              //   | |___| |\  | |_| |
              //   |_____|_| \_|____/
              //            
              ?>                       

                </div> <!-- banner-sidebar-container -->
              </div>
            </div> <!-- row -->
          </div>
        </div> <!-- page-default-banner-image -->  
        <div id="page-default-banner-image-mobile" class="visible-sm visible-xs">
          <div class="manic-image-container has-window-height">
            <img src="" data-image-tablet="<?php echo $location_banner_image_tablet; ?>"
                        data-image-mobile="<?php echo $location_banner_image_mobile; ?>">
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