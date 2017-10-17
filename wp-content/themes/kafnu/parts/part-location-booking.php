<?php
$selected_location_booking_items = wds_page_builder_get_this_part_data( PREFIX . "location_booking_items" );
?>

<article id="page-default-booking-section">
  <div class="container-fluid reduce-padding">

    <div id="page-default-booking-item-desktop" class="hidden-sm hidden-xs">
      <div class="row">
        <?php

          //    ____ _____  _    ____ _____
          //   / ___|_   _|/ \  |  _ \_   _|
          //   \___ \ | | / _ \ | |_) || |
          //    ___) || |/ ___ \|  _ < | |
          //   |____/ |_/_/   \_\_| \_\|_|
          //

          global $post;

          $selected_location_booking_items_post_array = $selected_location_booking_items;                  // IMPORTANT

          if ($selected_location_booking_items_post_array != ''):


            // init
            $wow_offset = 45;


            for ($i=0; $i < count($selected_location_booking_items_post_array) ; $i++):

            $selected_booking_item_post_index = $i + 1;
            $selected_booking_item_post_id = $selected_location_booking_items_post_array[$i%count($selected_location_booking_items_post_array)];
            $post = get_post( $selected_booking_item_post_id );
            setup_postdata( $post );

            $selected_booking_item_post_status = get_post_status();

              if ($selected_booking_item_post_status == 'publish'):

                // CMB2 custom fields
                                        
                $booking_item_image   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_image", true );   
                $booking_item_title     = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_title", true );                            
                $booking_item_copy   = get_post_meta( $selected_booking_item_post_id, PREFIX . "booking_item_copy", true );
                $booking_item_URLs = get_post_meta( $selected_booking_item_post_id, PREFIX."booking_item_URLs", true );                       
        ?>

        <div class="col-md-3 no-padding page-default-booking-item">                   
            <div class="manic-image-container">
              <img src="" data-image-desktop="<?php echo $booking_item_image; ?>"
              data-image-tablet="<?php echo $booking_item_image_tablet; ?>"
              data-image-mobile="<?php echo $booking_item_image_mobile; ?>" alt="">
            </div>
            <div class="page-default-booking-item-text">
              <h5><?php echo $booking_item_title; ?></h5>
              <p><?php echo $booking_item_copy; ?></p>
              <span id="price-changes" class="price"><?php echo $booking_item_URLs[0]['_kafnu_booking_item_price']; ?></span>                
            </div>
            <?php if(count($booking_item_URLs) > 1): ?>
              <div class="page-default-booking-item-cta-container dropdown-version">
                  <a href="javascript:void(0);" class="square-cta border-version">Book Now</a>
                  <ul id="book-now-dropdown">
                    <?php foreach ( (array) $booking_item_URLs as $key => $url ): ?>
                      <li><a href="<?php echo $url['_kafnu_booking_item_url'] ?>" data-price="<?php echo $url['_kafnu_booking_item_price'] ?>" target="_blank"><?php echo $url['_kafnu_booking_item_type'] ?></a></li>
                    <?php endforeach; ?>              
                  </ul>                            
              </div>
            <?php else: ?>
              <div class="page-default-booking-item-cta-container">
                <a href="<?php echo $booking_item_URLs[0]['_kafnu_booking_item_url']; ?>" target="_blank" class="square-cta border-version">Book Now</a>            
              </div>
            <?php endif; ?>
        </div>

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

        
      </div> <!-- row -->
    </div>    
    
    <!-- 
        __  _______  ____  ______    ______
       /  |/  / __ \/ __ )/  _/ /   / ____/
      / /|_/ / / / / __  |/ // /   / __/
     / /  / / /_/ / /_/ // // /___/ /___
    /_/  /_/\____/_____/___/_____/_____/

    -->

    <div id="page-default-booking-item-mobile" class="visible-sm visible-xs">
          
      <div class="row">
        <div class="col-sm-12 no-padding page-default-booking-item">
          <div class="manic-expand-container mobile-open-version">
              <div class="scroll-target" data-value="hot-desk"></div>
              <div class="manic-expand-container-title">
                  <h5>Hot Desk</h5> 
              </div>
              <div class="manic-expand-container-btn"></div>
              <div class="manic-expand-container-content">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-01.jpg"
                  data-image-tablet="images_cms/country/booking-space-01.jpg"
                  data-image-mobile="images_cms/country/booking-space-01-mobile.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>Hot Desk</h5>
                  <p>Choose your favorite seat and book by hour, day or month.</p>                        
                  <!-- <span class="price">From HK$70/Hour</span>                 -->
                </div>
                <div class="booknow-slider kafnu-slick-slider">
                  <div class="booknow-slider-item">
                    <span class="time">Hourly</span>
                    <span class="price">From HK$70/Hour</span>                
                    <div class="page-default-booking-item-cta-container">
                      <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361936" target="_blank" class="square-cta border-version">Book Now</a>
                    </div>
                  </div>
                  <div class="booknow-slider-item">
                    <span class="time">Daily</span>
                    <span class="price">HK$550/Day</span>                
                    <div class="page-default-booking-item-cta-container">
                      <a href="https://hongkong.kafnu.com/en/signup?returnUrl=/en/store/signupproducts?productid=435575149" target="_blank" class="square-cta border-version">Book Now</a>
                    </div>
                  </div>
                  <div class="booknow-slider-item">
                    <span class="time">5-Day Pass</span>
                    <span class="price">HK$2,500/Month</span>                
                    <div class="page-default-booking-item-cta-container">
                      <a href="https://hongkong.kafnu.com/en/signup/priceplan/60da246c-9686-4342-8cef-6ea4fd12604f?startdate=" target="_blank" class="square-cta border-version">Book Now</a>
                    </div>
                  </div>
                  <div class="booknow-slider-item">
                    <span class="time">Monthly</span>
                    <!-- <span class="price">From HK$70/Hour</span>                 -->
                    <div class="page-default-booking-item-cta-container">
                      <a href="https://hongkong.kafnu.com/en/tour" target="_blank" class="square-cta border-version">Book Now</a>
                    </div>
                  </div>
                </div>    
                <!-- <div class="page-default-booking-item-cta-container">                        
                  <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a>
                </div> -->                  
              </div>
          </div>                  
        </div>

        <div class="col-sm-12 no-padding page-default-booking-item">
          <div class="manic-expand-container">
              <div class="scroll-target" data-value="4-person"></div>
              <div class="manic-expand-container-title">
                  <h5>4 Person Meeting Room</h5> 
              </div>
              <div class="manic-expand-container-btn"></div>
              <div class="manic-expand-container-content">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-02.jpg" 
                  data-image-tablet="images_cms/country/booking-space-02.jpg"
                  data-image-mobile="images_cms/country/booking-space-02.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>4 Person Meeting Room</h5>
                  <p>Comfortable seating, colorful artwork, high-quality screens.</p>
                  <span class="price">From HK$600/Hour</span>                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361933" target="_blank" class="square-cta border-version">Book Now</a>
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>                   
              </div>
          </div>                  
        </div>

        <div class="col-sm-12 no-padding page-default-booking-item">
          <div class="manic-expand-container">
              <div class="scroll-target" data-value="6-person"></div>
              <div class="manic-expand-container-title">
                  <h5>6 Person Meeting Room</h5> 
              </div>
              <div class="manic-expand-container-btn"></div>
              <div class="manic-expand-container-content">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-03.jpg" 
                  data-image-tablet="images_cms/country/booking-space-03.jpg"
                  data-image-mobile="images_cms/country/booking-space-03.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>6 Person Meeting Room</h5>
                  <p>Digital light cubes or panels, industrial walls, wireless projection.</p>
                  <span class="price">From HK$750/Hour</span>                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361934" target="_blank" class="square-cta border-version">Book Now</a>
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>                  
              </div>
          </div>                  
        </div>

        <div class="col-sm-12 no-padding page-default-booking-item">
          <div class="manic-expand-container">
              <div class="scroll-target" data-value="8-person"></div>
              <div class="manic-expand-container-title">
                  <h5>8 Person Meeting Room</h5> 
              </div>
              <div class="manic-expand-container-btn"></div>
              <div class="manic-expand-container-content">
                <div class="manic-image-container">
                  <img src="" data-image-desktop="images_cms/country/booking-space-04.jpg" 
                  data-image-tablet="images_cms/country/booking-space-04.jpg"
                  data-image-mobile="images_cms/country/booking-space-04.jpg" alt="">
                </div>
                <div class="page-default-booking-item-text">
                  <h5>8 Person Meeting Room</h5>
                  <p>80-inch screen, integrated aqua scape (coming soon).</p>
                  <span class="price">From HK$900/Hour</span>                
                </div>
                <div class="page-default-booking-item-cta-container">
                  <a href="https://hongkong.kafnu.com/en/bookings/search?type=435361935" target="_blank" class="square-cta border-version">Book Now</a>
                  <!-- <a href="javascript:void(0);" class="open-soon"><span>Open 3 October</span></a> -->
                </div>                
              </div>
          </div>                  
        </div>
      </div>
    </div>  
      
  </div>
</article>